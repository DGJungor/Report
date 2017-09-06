<?php
require_once 'Config/MySQL.php';

class AjaxRepController
{

    /*
     * 修改单条单个数据的AJAX
     */
    public function editOne()
    {
        $field   = $_POST['field'];
        $value   = $_POST['value'];
        $id      = $_POST['id'];

        switch ($_POST['surface']) {
            case 'sell':
                $surface = 'rep_details_sell';
                break;
            case '':

                break;
            default:
                break;
        }

        //使用POD连接数据库
        $PDO           = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);
        $sql           = "UPDATE " . $surface . " set " . $field . "=:value WHERE id=:id";
        $sth           = $PDO->prepare($sql);
        $affected_rows = $sth->execute(array(
            ':value' => $value,
            ':id'    => $id
        ));
        if ($affected_rows) {
            $req['code'] = 1;
            $req['msg']  = '修改成功';
            echo json_encode($req);
        } else {
            $req['code'] = 0;
            $req['msg'] = '修改失败';
            echo json_encode($req);
        }

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


    /*
     * 执行冻结报表表
     *返回ajax代码   1: 报表开启成功  2:报表冻结成功
     *
     * @param $rid   需要冻结的报表id
     */
    public function frozenRep()
    {
        //获取需要修改状态的报表ID
        $rid = $_POST['rid'];

        //使用POD连接数据库
        $PDO = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWD);
        $sql = "UPDATE reports set state=:state WHERE id=:rid";
        $sth = $PDO->prepare($sql);
        switch ($_POST['action']) {
            case 'open':

                $affected_rows = $sth->execute(array(
                    ':state' => 1,
                    ':rid'   => $rid
                ));
                if ($affected_rows) {
                    $mag['code'] = 1;
                    $mag['mag']  = '开启成功';
                }
                break;
            case 'freeze':
                $affected_rows = $sth->execute(array(
                    ':state' => 0,
                    ':rid'   => $rid
                ));
                if ($affected_rows) {
                    $mag['code'] = 2;
                    $mag['mag']  = '冻结成功';
                }
                break;
            default:
                break;
        }
        //关闭PDO链接
        $PDO = null;

        //返回ajax 的信息

        echo json_encode($mag);
    }


}



