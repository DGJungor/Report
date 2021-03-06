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
        $sthCN = $PDO->query('
SELECT
COUNT(*)
FROM
reports
');
        $CN    = $sthCN->fetch();

        //获取查询数据
        $sql = '
SELECT
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
        foreach ($count as $v => $k) {
            switch ($k['state']) {
                case 0:
                    $count[$v]['stateCN'] = '冻结';
                    break;
                case 1:
                    $count[$v]['stateCN'] = '开启';
                default;
            }

        }
//        var_dump($count);

        $data['code']  = 0;
        $data['msg']   = '';
        $data['count'] = $CN[0];
        $data['data']  = $count;
        $data          = json_encode($data);

//        var_dump($count);
        echo $data;

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



    public function ShowRep()
    {

//        var_dump($_GET);      //测试数据

        $rid = $_GET['id'];

        //使用POD连接数据库
        $PDO = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);


        //获取查询数据
        $sql = '
SELECT
rep_details_goods.id,
rep_details_goods.in_id,
rep_details_goods.in_name,
rep_details_goods.out_id,
rep_details_goods.in_num,
rep_details_goods.out_name,
rep_details_goods.out_num
FROM
rep_details_goods
WHERE
rep_details_goods.rid = :rid
ORDER BY
rep_details_goods.id ASC

';
        $sth = $PDO->prepare($sql);
        $sth->bindParam(':rid', $rid, PDO::PARAM_INT);
        $sth->execute();
        $warehouse = $sth->fetchAll(PDO::FETCH_ASSOC);

        //获取销售收据
        $sql='
SELECT
rep_details_sell.id,
rep_details_sell.c_gro,
rep_details_sell.c_purchase,
rep_details_sell.c_ing,
rep_details_sell.c_balance,
rep_details_sell.in_cash,
rep_details_sell.in_coupon,
rep_details_sell.in_mk,
rep_details_sell.in_purchase,
rep_details_sell.in_card_wl,
rep_details_sell.in_card_wd,
rep_details_sell.sell_ddis,
rep_details_sell.sell_net,
rep_details_sell.sell_dpro,
rep_details_sell.sell_dvip,
rep_details_sell.sell_mon,
rep_details_sell.sell_num,
rep_details_sell.date,
rep_details_sell.rid
FROM
rep_details_sell
WHERE
rep_details_sell.rid = :rid
ORDER BY
rep_details_sell.date ASC
';
        $sth = $PDO->prepare($sql);
        $sth->bindParam(':rid', $rid, PDO::PARAM_INT);
        $sth->execute();
        $sell = $sth->fetchAll(PDO::FETCH_ASSOC);


        //关闭PDO数据库
        $PDO = null;

//        var_dump($sell);

        require('View/layer/show_report.php');
        $view = new Index();
        $view->display($warehouse,$sell);
    }



    public function editRep()
    {

        $rid = $_GET['id'];

        //使用POD连接数据库
        $PDO = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);


        //获取查询数据
        $sql = '
SELECT
rep_details_goods.id,
rep_details_goods.in_id,
rep_details_goods.in_name,
rep_details_goods.out_id,
rep_details_goods.in_num,
rep_details_goods.out_name,
rep_details_goods.out_num
FROM
rep_details_goods
WHERE
rep_details_goods.rid = :rid
ORDER BY
rep_details_goods.id ASC
';
        $sth = $PDO->prepare($sql);
        $sth->bindParam(':rid', $rid, PDO::PARAM_INT);
        $sth->execute();
        $warehouse = $sth->fetchAll(PDO::FETCH_ASSOC);

        //获取销售收据
        $sql='
SELECT
rep_details_sell.id,
rep_details_sell.c_gro,
rep_details_sell.c_purchase,
rep_details_sell.c_ing,
rep_details_sell.c_balance,
rep_details_sell.in_cash,
rep_details_sell.in_coupon,
rep_details_sell.in_mk,
rep_details_sell.in_purchase,
rep_details_sell.in_card_wl,
rep_details_sell.in_card_wd,
rep_details_sell.sell_ddis,
rep_details_sell.sell_net,
rep_details_sell.sell_dpro,
rep_details_sell.sell_dvip,
rep_details_sell.sell_mon,
rep_details_sell.sell_num,
rep_details_sell.date,
rep_details_sell.rid
FROM
rep_details_sell
WHERE
rep_details_sell.rid = :rid
ORDER BY
rep_details_sell.date ASC
';
        $sth = $PDO->prepare($sql);
        $sth->bindParam(':rid', $rid, PDO::PARAM_INT);
        $sth->execute();
        $sell = $sth->fetchAll(PDO::FETCH_ASSOC);


        //关闭PDO数据库
        $PDO = null;



        require('View/layer/edit_report.php');
        $view = new Index();
        $view->display($warehouse,$sell);

    }

    public function Test1()
    {


    }

}