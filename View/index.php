<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 16:50
 */

class Index {
    public function display() {
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
    <link rel="stylesheet" href="./Public/layui/css/layui.css">
<!--    <link rel="stylesheet" href="./Public/bootstrap/3.3.0/css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" href="./Public/Common/css/base.css">-->
<!--    <link rel="stylesheet" href="./Public/Common/css/report.css">-->

    <!-- JS   -->
<!--    <script src="./Public/jquery/2.0.0/jquery.js"></script>-->
<!--    <script src="./Public/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
<!--    <script src="./Public/jquery/2.0.0/jquery.min.js"></script>-->
<!--    <script src="./Public/My97DatePicker/WdatePicker.js"></script>-->
    <script src="./Public/layui/layui.js"></script>


    <!--  style  -->


    <!-- script   -->

</head>
<body>



<ul class="layui-nav" lay-filter="">
    <li class="layui-nav-item layui-this"><a href="http://www.r2.com/index.php?c=Report&a=Index">店铺收发表</a></li>
    <li class="layui-nav-item "><a href="index.php?c=Report&a=BuildReport">新建</a></li>
<!--    <li class="layui-nav-item">-->
<!--        <a href="javascript:;">解决方案</a>-->
<!--        <dl class="layui-nav-child"> <!-- 二级菜单 -->-->
<!--            <dd><a href="">移动模块</a></dd>-->
<!--            <dd><a href="">后台模版</a></dd>-->
<!--            <dd><a href="">电商平台</a></dd>-->
<!--        </dl>-->
<!--    </li>-->

</ul>


<!--<table class="layui-table">-->
<!--    <colgroup>-->
<!--        <col width="150">-->
<!--        <col width="200">-->
<!--        <col>-->
<!--    </colgroup>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>昵称</th>-->
<!--        <th>加入时间</th>-->
<!--        <th>签名</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    <tr>-->
<!--        <td>贤心</td>-->
<!--        <td>2016-11-29</td>-->
<!--        <td>人生就像是一场修行</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>许闲心</td>-->
<!--        <td>2016-11-28</td>-->
<!--        <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>-->
<!--    </tr>-->
<!--    </tbody>-->
<!--</table>-->

<script>
    //注意：导航 依赖 element 模块，否则无法进行功能性操作
    layui.use('element', function(){
        var element = layui.element;

        //…
    });

</script>
</body>
</html>

<?php
    }
}
?>