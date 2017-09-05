<?php
require_once 'Config/MySQL.php';

class AjaxRepController
{


    public function editOne()
    {

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
                ':rid' => $rid
            ));
            if (!$affected_rows)
                throw new PDOException('删除失败');

            //删除报表仓详情表
            $sql           = 'DELETE FROM rep_details_goods WHERE rid= :rid';
            $sth           = $PDO->prepare($sql);
            $affected_rows = $sth->execute(array(
                ':rid' => $rid
            ));
            if (!$affected_rows)
                throw new PDOException('删除失败');

            //删除报表收入详情表
            $sql           = 'DELETE FROM rep_details_sell WHERE rid= :rid';
            $sth           = $PDO->prepare($sql);
            $affected_rows = $sth->execute(array(
                ':rid' => $rid
            ));
            if (!$affected_rows)
                throw new PDOException('删除失败');

            //事务提交
            $PDO->commit();
//            $PDO->rollBack();
        } catch (PDOException $e) {
            //当抛出异常时  事务回滚
            echo $e->getMessage();
            $PDO->rollBack();
        }
        //关闭PDO链接
        $PDO = null;

        $mag['code'] = 1;
        echo json_encode($mag);

    }

}



