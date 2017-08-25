<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 16:50
 */

class Index {
    public function display($data) {
        // ob_start();
  ?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="./Public/bootstrap/3.3.0/Css/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/layui/css/layui.css">
    <link rel="stylesheet" href="./Public/Common/css/base.css">
    <link rel="stylesheet" href="./Public/Common/report.css">

    <!-- JS   -->
    <script src="./Public/jquery/2.0.0/jquery.min.js"></script>
    <script src="./Public/bootstrap/3.3.0/Js/bootstrap.min.js"></script>
    <script src="./Public/My97DatePicker/WdatePicker.js"></script>

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
<!--                <form target="layui-upload-iframe" method="post" key="set-mine" enctype="multipart/form-data" action="../App/Upload.php">-->
                <form target="layui-upload-iframe" method="post" key="set-mine" enctype="multipart/form-data" action="App/Upload.php">
                    <input type="file" name="file" lay-type="file" class="layui-upload-file">
                </form>
                <span class="layui-upload-icon"><i class="layui-icon"></i>上传文件</span></div>
            <input type="button" value="保存" class="btn btn-default" onclick="sub()" style="margin-top:9px;">

        </div>
    </div>
</nav>



<script src="./Public/layui/layui.js"></script>
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
            url: 'App/Upload.php', //上传接口
            success: function(res){ //上传成功后的回调
                console.log(res);
                setCookie('number',res);
            }
        });
    });
</script>
</body>
</html>

<?php
    }
}
?>