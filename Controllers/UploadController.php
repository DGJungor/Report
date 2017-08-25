<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 14:45
 */

//require_once 'App/PHPExcel.php';
//require_once 'APP/PHPExcel\IOFactory.php';
//require_once 'App/PHPExcel\Reader\Excel2007.php';//excel 2007
require 'App/Test.class.php';
require_once 'App/PHPExcel.php';
require_once 'App/PHPExcel\IOFactory.php';
require_once 'App/PHPExcel\Reader\Excel2007.php';//excel 2007

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

    public function __construct()
    {


    }

    function Index($param)
    {
        require('View/index.php');
//        require('Model/demo.php');
        $view = new Index();
//        $data = $model->getData($param);

        $data = 123;
        $view->display($data);

    }

    public function UploadExcel()
    {

    }

    public function Test()
    {




        require('View/test.php');
        $view = new Index();
        $view->display();

    }

    /*
     *
     */
    public function Test2()
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


        $mag = $this->tmpFileName;
        var_dump($mag);
        var_dump($this->fileMag);
        var_dump($filename);
        var_dump($name);
        var_dump($uploadfile);
        var_dump($result);
        die();


        require('View/test.php');
        $view = new Index();
        $view->display($data);
    }

}

?>