<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/24
 * Time: 16:50
 */

class Index
{
    public function display()
    {
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
            <link rel="stylesheet" href="./Public/layui/css/layui.css?t=1504112998306" media="all">
            <!--    <link rel="stylesheet" href="./Public/bootstrap/3.3.0/css/bootstrap.min.css">-->
            <!--    <link rel="stylesheet" href="./Public/Common/css/base.css">-->
            <!--    <link rel="stylesheet" href="./Public/Common/css/report.css">-->
            <!--    <link rel="stylesheet" href="//res.layui.com/layui/dist/css/layui.css?t=1504112998306" media="all">-->

            <!-- JS   -->

            <!--    <script src="./Public/jquery/2.0.0/jquery.js"></script>-->
            <!--    <script src="./Public/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
            <!--    <script src="./Public/jquery/2.0.0/jquery.min.js"></script>-->
            <!--    <script src="./Public/My97DatePicker/WdatePicker.js"></script>-->
            <!--            <script src="./Public/layui/layui.js"></script>-->
<!--            <script src="./Public/jquery/1.11.3/jquery.js?t=1504112998306" media="all"></script>-->
            <script src="//res.layui.com/layui/dist/layui.js?t=1504112998306" media="all"></script>
            <script src="./Public/layui/layui.all.js"></script>


            <!--  style  -->
            <style>
                body {
                    margin: 10px;
                }
            </style>

            <!-- script   -->

        </head>
        <body>

        <div>
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item layui-this"><a href="http://www.r2.com/index.php?c=Report&a=Index">店铺收发表</a>
                </li>
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
        </div>
        <div style="width: 100%; height: 50px"></div>

        <!--        数据表格      -->
        <div class="layui-btn-group demoTable">
            <button class="layui-btn" data-type="getCheckData">获取选中行数据</button>
            <button class="layui-btn" data-type="getCheckLength">获取选中数目</button>
            <button class="layui-btn" data-type="isAll">验证是否全选</button>
        </div>

        <table class="layui-table" lay-data="{width: 892, height:332, url:'/demo/table/user/', page:true, id:'idTest'}"
               lay-filter="demo">
            <thead>
            <tr>
                <th lay-data="{checkbox:true, fixed: true}"></th>
                <th lay-data="{field:'id', width:80, sort: true, fixed: true}">ID</th>
                <th lay-data="{field:'username', width:80}">用户名</th>
                <th lay-data="{field:'sex', width:80, sort: true}">性别</th>
                <th lay-data="{field:'city', width:80}">城市</th>
                <th lay-data="{field:'sign', width:177}">签名</th>
                <th lay-data="{field:'experience', width:80, sort: true}">积分</th>

                <th lay-data="{field:'classify', width:80}">职业</th>
                <th lay-data="{field:'wealth', width:135, sort: true}">财富</th>
                <th lay-data="{field:'score', width:80, sort: true, fixed: 'right'}">评分</th>
                <th lay-data="{fixed: 'right', width:160, align:'center', toolbar: '#barDemo'}"></th>
            </tr>
            </thead>
        </table>


        </body>
        </html>

        <?php
    }
}

?>