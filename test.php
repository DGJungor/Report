<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>layui在线调试</title>

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
    <!--    <script src="./Public/layui/layui.js"></script>-->
    <!--                    <script src="./Public/jquery/1.11.3/jquery.js"></script>-->
    <!--            <script src="//res.layui.com/layui/dist/layui.js?t=1504112998306" media="all"></script>-->
    <script src="./Public/layui/layui.all.js"></script>

    <style>
        body {
            margin: 10px;
        }

        .demo-carousel {
            height: 200px;
            line-height: 200px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php

echo date('t', strtotime('2017-02'))

?>

<a href="./index.php?c=Report&a=Test1&page=1&limit=5">测试</a>
<table id="demo"></table>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-mini" lay-event="detail">查看</a>
    <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>

    <!-- 这里同样支持 laytpl 语法，如： -->

</script>

<!--http://www.r2.com/index.php?c=Report&a=SelectRep&page=1&limit=5-->
<!--<script src="/static/build/layui.js"></script>-->
<script>


    layui.use('table', function () {
        var table = layui.table;

        //展示已知数据
        table.render({
            elem: '#demo'
            , data: [{
                "id": "10007"
                , "username": "贤心"
                , "email": "xianxin@layui.com"
                , "sex": "男"
                , "city": "浙江杭州"
                , "sign": "人生恰似一场修行"
                , "experience": "16"
                , "ip": "192.168.0.8"
                , "logins": "106"
                , "joinTime": "2016-10-14"
            }, {
                "id": "10008"
                , "username": "贤心"
                , "email": "xianxin@layui.com"
                , "sex": "男"
                , "city": "浙江杭州"
                , "sign": "人生恰似一场修行"
                , "experience": "106"
                , "ip": "192.168.0.8"
                , "logins": "106"
                , "joinTime": "2016-10-14"
            }]
            , height: 272
            , cols: [[ //标题栏
                {checkbox: true, LAY_CHECKED: true} //默认全选
                , {field: 'id', title: 'ID', width: 80, sort: true}
                , {field: 'username', title: '用户名', width: 120}
                , {field: 'email', title: '邮箱', width: 150}
                , {field: 'sign', title: '签名', width: 150}
                , {field: 'sex', title: '性别', width: 80}
                , {field: 'city', title: '城市', width: 100}
                , {field: 'experience', title: '积分', width: 80, sort: true}
                , {fixed: 'right', width: 150, align: 'center', toolbar: '#barDemo'}
            ]]
//    ,skin: 'row' //表格风格
//            ,even: true
//            ,page: true //是否显示分页
//            ,limits: [5, 7, 10]
//            ,limit: 5 //每页默认显示的数量
        });
    });

</script>
</body>
</html>
