<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="../Public/bootstrap/3.3.0/Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Public/layui/css/layui.css">
    <link rel="stylesheet" href="../Public/Common/css/base.css">
    <link rel="stylesheet" href="../Public/Common/report.css">

    <!-- JS   -->
    <script src="../Public/jquery/2.0.0/jquery.min.js"></script>
    <script src="../Public/bootstrap/3.3.0/Js/bootstrap.min.js"></script>
    <script src="../Public/My97DatePicker/WdatePicker.js"></script>

    <!--  style  -->
    <style>
        .layui-upload-button {
            top: 5px;
        }
    </style>

    <!-- script   -->
    <script>
        function sub() {
            document.myform.submit();
        }
    </script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">店铺收发报表</a>
        </div>
        <div>
            <form class="navbar-form navbar-left" role="search">
                <button type="submit" class="btn btn-default">
                    导出Excel
                </button>
            </form>
            <div class="layui-box layui-upload-button">
                <form target="layui-upload-iframe" method="post" key="set-mine" enctype="multipart/form-data"
                      action="../App/Upload.php"><input type="file" name="file" lay-type="file" class="layui-upload-file">
                </form>
                <span class="layui-upload-icon"><i class="layui-icon"></i>上传文件</span></div>
            <input type="button" value="保存" class="btn btn-default" onclick="sub()" style="margin-top:9px;">

        </div>
    </div>
</nav>



<?php
$number=$_COOKIE['number'];
if($number){
    ?>
    <div class="containerd">
        <div class="title">
            <h2>以纯龙庭店</h2>
        </div>
        <div class="layui-form">
            <table class="layui-table">
                <thead>
                <tr>
                    <th></th>
                    <th colspan="2">店铺机构代码</th>
                    <th colspan="2" class="bnone"><input type="text" name="" value="<?=$number;?>" /></th>
                    <th>上期金额</th>
                    <th colspan="2" class="bnone"><input type="text" name="" /></th>
                    <th>上期结存数</th>
                    <th colspan="2" class="bnone"><input type="text" name="" /></th>
                    <th>本期盘点日期</th>
                    <th colspan="2" class="bnone"><input type="text" name="" onclick="layui.laydate({elem: this})" readonly /></th>
                    <th>盘点盈亏</th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th>本期结算数</th>
                    <th colspan="2" class="bnone"><input type="text" name="" /></th>
                    <th>月份</th>
                    <th colspan="2" class="bnone"><input type="text" name="" onclick="WdatePicker({dateFmt:'yyyy-MM'})"></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="3">入库</th>
                    <th colspan="3">出库</th>
                    <th colspan="7">销售收入</th>
                    <th colspan="5">销售收款</th>
                    <th colspan="2">现金状态</th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th>NO</th>
                    <th>摘要</th>
                    <th>单据编号</th>
                    <th>对方店铺/大仓</th>
                    <th>数量</th>
                    <th>单据编号</th>
                    <th>对方店铺/大仓</th>
                    <th>数量</th>
                    <th>日期</th>
                    <th>数量</th>
                    <th>金额</th>
                    <th>减：VIP折扣</th>
                    <th>减：促销折扣</th>
                    <th>减：积分折扣</th>
                    <th>净销售额</th>
                    <th>有线刷卡</th>
                    <th>无线刷卡</th>
                    <th>内购收现</th>
                    <th>商场收款</th>
                    <th>代金券</th>
                    <th>现金收入</th>
                    <th>现金余额</th>
                    <th>内购现金</th>
                    <th>成长金</th>
                </tr>
                </thead>
                <form name="myform" action="handle.php" method="post" >
                    <tbody>
                    <?php
                    include_once('inc/conn.php');
                    $i=1;
                    $sql=mysql_query("select * from report where number='$number'");
                    while($row=mysql_fetch_assoc($sql)){
                        ?>
                        <tr>
                            <td><?=$i;?></td>
                            <td><?=$row['data_1'];?></td>
                            <td><?=$row['data_2'];?></td>
                            <td><?=$row['data_3'];?></td>
                            <td><?=$row['data_4'];?></td>
                            <td><?=$row['data_5'];?></td>
                            <td><?=$row['data_6'];?></td>
                            <td><?=$row['data_7'];?></td>
                            <td class="bnonee"><input type="text" name="<?=$row['id'];?>|data_8" onclick="layui.laydate({elem: this})" readonly /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                            <td class="bnonee"><input type="text" name="" /></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                    </tbody>

                </form>
                <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th colspan="2">盘盈</th>
                    <th></th>
                    <th colspan="2">盘亏</th>
                    <th></th>
                    <th colspan="16"></th>
                </tr>
                <tr>
                    <th>合计</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th></th>
                    <th></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                    <th class="bnone"><input type="text" name="" /></th>
                </tr>
                </tfoot>
            </table>

        </div>
    </div>
    <?php
}
?>



<script src="../Public/layui/layui.js"></script>
<script>
    function setCookie(c_name,value,expiredays){
        var exdate=new Date()
        exdate.setDate(exdate.getDate()+expiredays)
        document.cookie=c_name+ "=" +escape(value)+
            ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
    }
    layui.use(['form', 'laydate','upload'], function(){
        var form = layui.form(),
            layer = layui.layer,
            laydate = layui.laydate,
            upload = layui.upload;
        upload({
            url: 'upload.php', //上传接口
            success: function(res){ //上传成功后的回调
                console.log(res);
                setCookie('number',res);
            }
        });
    });
</script>
</body>
</html>