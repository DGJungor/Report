<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/28
 * Time: 13:30
 */
require_once 'Config/MySQL.php';


class ReportController
{

    public function SelectRep()
    {

        //获取页数量
        $page = (int)$_GET['page'];
        //获取每一页的数量
        $limit = (int)$_GET['limit'];
        //计算偏移量
        $offset = ($page - 1) * $limit;

        //使用POD连接数据库
        $PDO = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);

        //PDO 获取报表总条数
        $sthCN = $PDO->query('SELECT
COUNT(*)
FROM
reports
');
        $CN = $sthCN->fetch();

        //获取查询数据
        $sql = 'SELECT
reports.id,
reports.shop_code,
reports.shop_name,
reports.date,
reports.state,
reports.remarks,
reports.add_time,
reports.modify_time
FROM
reports
ORDER BY
reports.date DESC
LIMIT :offset, :rows
';
        $sth = $PDO->prepare($sql);
        $sth->bindParam(':offset', $offset, PDO::PARAM_INT);
        $sth->bindParam(':rows', $limit, PDO::PARAM_INT);
        $sth->execute();
        $count = $sth->fetchAll(PDO::FETCH_ASSOC);
        //关闭PDO数据库
        $PDO = null;

        //数据中加入状态的中文
        foreach ($count as $v=>$k){
            switch ($k['state'])
            {
                case 0:
                    $count[$v]['stateCN'] = '冻结';
                    break;
                case 1:
                    $count[$v]['stateCN'] = '开启';
                default;
            }

        }
//        var_dump($count);

        $data['code']=0;
        $data['msg']='';
        $data['count']=$CN[0];
        $data['data']=$count;
        $data = json_encode($data);

//        var_dump($count);
        echo $data;

    }

    public function editRep()
    {
        xdebug_var_dump($_GET);
    }

    public function Index()
    {


        //输出视图
        require('View/index.php');
        $view = new Index();
        $view->display();
    }

    public function BuildReport()
    {

        require('View/add_report.php');
        $view = new Index();
        $view->display();
    }

    public function Test1()
    {


    }

}