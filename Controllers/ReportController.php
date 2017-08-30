<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/28
 * Time: 13:30
 */
class ReportController
{

    public function Index()
    {


        //输出视图
        require('View/index.php');
        $view = new Index();
        $view->display();
    }

    public function BuildReport()
    {

        require ('View/add_report.php');
        $view = new Index();
        $view->display();
    }

    public function Test1()
    {
        var_dump($_POST);
        var_dump($_SESSION);
    }

}