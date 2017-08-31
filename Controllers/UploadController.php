<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 14:45
 */


require 'App/Test.class.php';
require_once 'App/PHPExcel.php';
require_once 'App/PHPExcel\IOFactory.php';
require_once 'App/PHPExcel\Reader\Excel2007.php';//excel 2007
require_once 'Config/MySQL.php';

class UploadController
{
    private $fileMag;                        //文件信息
    private $filePath = "./upFile/";          //上传文件保存的路径
//    private $allowtype = array('jpg','gif','png'); //设置限制上传文件的类型
//    private $maxsize = 1000000;           //限制文件上传大小（字节）
//    private $israndname = true;           //设置是否随机重命名文件， false不随机
    private $originName;              //源文件名
    private $tmpFileName;              //临时文件名
//    private $fileType;               //文件类型(文件后缀)
//    private $fileSize;               //文件大小
//    private $newFileName;              //新文件名
//    private $errorNum = 0;             //错误号
//    private $errorMess="";             //错误报告消息

    //测试用的控制器
    public function Test()
    {
        $data = "";

        require('View/test.php');
        $view = new Index();
        $view->display($data);

    }

    public function __construct()
    {


    }

    /*
     *
     */
    public function create()
    {
        //测试数据
        var_dump(date('Y-m-d H:i:s'));
        var_dump($_POST);
        var_dump($_SESSION);

        $objReader     = PHPExcel_IOFactory::createReader('Excel2007');
        $objPHPExcel   = PHPExcel_IOFactory::load($_SESSION['tmpExcel']['uploadfile']);
        $sheet         = $objPHPExcel->getSheet(0);
        $highestRow    = $sheet->getHighestRow(); // 取得总行数
        $highestColumn = $sheet->getHighestColumn(); // 取得总列数
        $time          = date('Y-m-d H:i:s');//获取当前时间

        //使用POD连接数据库
        $reportPDO = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);

        try {
            //开启事务处理
            $reportPDO->beginTransaction();

            //添加数据到数据库报表关联表中
            $sql = 'INSERT INTO reports(shop_name,shop_code,date,add_time,modify_time) VALUE(:shop_name,:shop_code,:date,:add_time,:modify_time)';
            $sth = $reportPDO->prepare($sql);
            $sth->execute(array(
                ':shop_name'   => $_POST['shopname'],
                'shop_code'    => $_POST['shopcode'],
                ':date'        => $_POST['date'],
                ':add_time'    => $time,
                ':modify_time' => $time
            ));
            $lastID = $reportPDO->lastInsertId();
            //当添加数据库是出错 则抛出异常
            if (!$lastID)
                throw new PDOException('报表关联表添加失败');

            //循环读取excel文件,读取一条,插入一条
            for ($j = 2; $j <= $highestRow; $j++) {
                $str = "";
                for ($k = 'A'; $k <= $highestColumn; $k++) {
                    $str .= iconv("UTF-8", "UTF-8", $objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()) . '\\';//读取单元格
                }
                $strs = explode("\\", $str);

                //将Excel行数据 添加到数据库 rep_details_goods表中
                $sql           = "INSERT INTO rep_details_goods(rid,in_id,in_name,in_num,out_id,out_name,out_num,abs) VALUE (:rid,:in_id,:in_name,:in_num,:out_id,:out_name,:out_num,:abs)";
                $sth           = $reportPDO->prepare($sql);
                $affected_rows = $sth->execute(array(
                    ':rid'      => $lastID,
                    ':in_id'    => $strs[3],
                    ':in_name'  => $strs[4],
                    ':in_num'   => $strs[5],
                    ':out_id'   => $strs[6],
                    ':out_name' => $strs[7],
                    ':out_num'  => $strs[8],
                    ':abs'      => $strs[2]
                ));

                //若果添加数据库出错  则抛出异常
                if (!$affected_rows)
                    throw new PDOException('报表关联表添加失败');
            }

            //事务提交
            $reportPDO->commit();
        } catch (PDOException $e) {

            //当抛出异常时  事务回滚
            echo $e->getMessage();
            $reportPDO->rollBack();
        }
        //关闭PDO数据库连接
        $reportPDO = null;

        //跳转回到显示页面
        Header("Location: /index.php?c=Report&a=Index");

        //清除上传临时上传文件夹下的所有xls文件
        $this->delFile("./upFile/", "xls");

        //删除上传的excel文件
//        unlink($_SESSION['tmpExcel']['uploadfile']);


//
//        var_dump($highestRow);
//        var_dump($highestColumn);
//        var_dump($objPHPExcel);


//            $count = $reportPDO->exec($sql);

//                $reportPDO = '';
//                var_dump($count);
//                var_dump($sql);
//                $sth = $reportPDO->prepare();

//                $p   = $strs[0];

        //使用PDO将数据添加到数据库


//                $sql       = 'select * from report';
//                $reportPDO->query('set names utf-8');
//                $count     = $reportPDO->query("SELECT * FROM report" )->fetchALL();

//            var_dump($str);
//            var_dump($strs);
//            var_dump($count);

//            unlink($uploadfile); //删除上传的excel文件


        //输出到视图
//        require('View/test.php');
//        $view = new Index();
//        $view->display($data);
    }

    /*
     * 通过接口 使用异步上传 先将上传上来的Excel文件的临时路径名放入到session
     *
     *
     *
     */
    public function TmpExcel()
    {
        $this->fileMag     = $_FILES;                               //获取文件信息
        $this->tmpFileName = $_FILES['file']['tmp_name'];           //获取临时文件名
        $this->originName  = $_FILES['file']['name'];               //获取源文件名
        $time              = date("Y-m-d-H-i-s");           //获取当前时间

        $filename    = explode(".", $this->originName);
        $filename[0] = $time;                                         //取文件名t替换
        $name        = implode(".", $filename);                 //上传后的文件名
        $uploadfile  = $this->filePath . $name;                       //上传后的文件名地址
        $result      = move_uploaded_file($this->tmpFileName, $uploadfile);          //上传到当前目录下   函数将上传的文件移动到新位置。若成功，则返回 true，否则返回 false。

        if ($result) {
            $_SESSION['tmpExcel']['uploadfile'] = $uploadfile;
            $tmp                                = array("code" => 1, 'msg' => '上传成功', "filename" => $this->originName);
            $msg                                = json_encode($tmp);
            echo $msg;
        } else {
            $tmp = array("code" => 0, 'msg' => '上传失败');
            $msg = json_encode($tmp);
            echo $msg;
        }


    }


    /*
     *
     * 删除指定目录中的所有目录及文件（或者指定文件）
     * 可扩展增加一些选项（如是否删除原目录等）
     * 删除文件敏感操作谨慎使用
     * @param $dir 目录路径
     * @param array $file_type指定文件类型
     */
    private function delFile($dir, $file_type = '')
    {
        if (is_dir($dir)) {
            $files = scandir($dir);
            //打开目录 //列出目录中的所有文件并去掉 . 和 ..
            foreach ($files as $filename) {
                if ($filename != '.' && $filename != '..') {
                    if (!is_dir($dir . '/' . $filename)) {
                        if (empty($file_type)) {
                            unlink($dir . '/' . $filename);
                        } else {
                            if (is_array($file_type)) {
                                //正则匹配指定文件
                                if (preg_match($file_type[0], $filename)) {
                                    unlink($dir . '/' . $filename);
                                }
                            } else {
                                //指定包含某些字符串的文件
                                if (false != stristr($filename, $file_type)) {
                                    unlink($dir . '/' . $filename);
                                }
                            }
                        }
                    } else {
                        delFile($dir . '/' . $filename);
                        rmdir($dir . '/' . $filename);
                    }
                }
            }
        } else {
            if (file_exists($dir)) unlink($dir);
        }
    }

    //析构方法
    function __destruct()
    {

    }


}

?>