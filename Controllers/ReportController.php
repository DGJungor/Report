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
        $CN    = $sthCN->fetch();

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

    public function editRep()
    {
        xdebug_var_dump($_GET);
    }

    /*
     *执行删除报表
     *
     * @param  $rid  需要删除报表的rid
     */
    public function delRep()
    {

        $rid = $_POST['rid'];

        //使用POD连接数据库
        $PDO = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);

        try {
            //开启事务处理
            $PDO->beginTransaction();

            //删除报表关联表数据
            $sql           = 'DELETE FROM reports WHERE id= :rid';
            $sth           = $PDO->prepare($sql);
            $affected_rows = $sth->execute(array(
                ':rid'=> $rid
            ));
            if (!$affected_rows)
                throw new PDOException('删除失败');

            //删除报表仓详情表
            $sql           = 'DELETE FROM rep_details_goods WHERE rid= :rid';
            $sth           = $PDO->prepare($sql);
            $affected_rows = $sth->execute(array(
                ':rid'=> $rid
            ));
            if (!$affected_rows)
                throw new PDOException('删除失败');

            //删除报表收入详情表
            $sql           = 'DELETE FROM rep_details_sell WHERE rid= :rid';
            $sth           = $PDO->prepare($sql);
            $affected_rows = $sth->execute(array(
                ':rid'=> $rid
            ));
            if (!$affected_rows)
                throw new PDOException('删除失败');

            //事务提交
//            $PDO->commit();
            $PDO->rollBack();
        } catch (PDOException $e) {
            //当抛出异常时  事务回滚
            echo $e->getMessage();
            $PDO->rollBack();
        }
        $PDO = null;

        $mag['code'] = 1;
        echo json_encode($mag);

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