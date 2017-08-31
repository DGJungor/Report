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
            <!--            <link rel="stylesheet" href="./Public/layui/css/layui.css">-->
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

<!--                                    <script src="./Public/jquery/1.11.3/jquery.js"></script>-->
            <!--            <script src="//res.layui.com/layui/dist/layui.js?t=1504112998306" media="all"></script>-->
                        <script src="./Public/layui/layui.all.js"></script>
<!--            <script src="./Public/layui/layui.js?t=1504112998306" media="all"></script>-->
<!--                        <script src="./Public/layui/layui.js"></script>-->
<!--                        <script src="//res.layui.com/layui/dist/layui.js?t=1504112998306"></script>-->


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

        <table id="demo"></table>

        <script>

//            layui.use('table', function () {
//                var table = layui.table;
//
//
//                table.render({
//                    elem: '#demo'
//                    ,page: true
//                    ,limits: [30,60,90,150,300]
//                    ,limit: 60 //默认采用60
//                    ,cols:  [[ //标题栏
//                        {checkbox: true}
//                        ,{field: 'id', title: 'ID', width: 80}
//                        ,{field: 'username', title: '用户名', width: 120}
//                    ]]
//                });
//
//
//            });



layui.use('table', function(){
    var table = layui.table;

    //展示已知数据
    table.render({
        elem: '#demo'
//        ,data: [{
//            "id": "10001"
//            ,"username": "杜甫"
//            ,"email": "xianxin@layui.com"
//            ,"sex": "男"
//            ,"city": "浙江杭州"
//            ,"sign": "人生恰似一场修行"
//            ,"experience": "116"
//            ,"ip": "192.168.0.8"
//            ,"logins": "108"
//            ,"joinTime": "2016-10-14"
//        },  {
//            "id": "10008"
//            ,"username": "贤心"
//            ,"email": "xianxin@layui.com"
//            ,"sex": "男"
//            ,"city": "浙江杭州"
//            ,"sign": "人生恰似一场修行"
//            ,"experience": "106"
//            ,"ip": "192.168.0.8"
//            ,"logins": "106"
//            ,"joinTime": "2016-10-14"
//        }]
        , url: './index.php?c=Report&a=SelectRep'
        ,request: {
            pageName: 'curr' //页码的参数名称，默认：page
            ,limitName: 'nums' //每页数据量的参数名，默认：limit
        }
        ,height: 272
        ,cols: [[ //标题栏
            {checkbox: true, LAY_CHECKED: true} //默认全选
            ,{field: 'id', title: 'ID', width: 80, sort: true}
            ,{field: 'username', title: '用户名', width: 120}
            ,{field: 'email', title: '邮箱', width: 150}
            ,{field: 'sign', title: '签名', width: 150}
            ,{field: 'sex', title: '性别', width: 80}
            ,{field: 'city', title: '城市', width: 100}
            ,{field: 'experience', title: '积分', width: 80, sort: true}
        ]]
        ,skin: 'row' //表格风格
        ,even: true
        ,page: true //是否显示分页
        ,limits: [5, 7, 10]
        ,limit: 5 //每页默认显示的数量
    });
});
        </script>

        </body>
        </html>

        <?php
    }
}

?>