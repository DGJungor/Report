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

    <script src="./Public/layui/layui.js"></script>
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


<table class="layui-table" lay-filter="test3">
    <thead>
    <tr>
        <th lay-data="{field:'id', width:80, sort: true,edit:'text'}">ID</th>
        <th lay-data="{field:'username', width:120, sort: true, edit: 'text'}">用户名</th>
        <th lay-data="{field:'email', width:150, edit: 'text'}">邮箱</th>
        <th lay-data="{field:'sex', width:80, edit: 'text'}">性别</th>
        <th lay-data="{field:'city', width:100, edit: 'text'}">城市</th>
        <th lay-data="{field:'sign', width:150, edit: 'text'}">签名</th>
        <th lay-data="{field:'experience', width:80, sort: true, edit: 'text'}">积分</th>
        <th lay-data="{field:'ip', width:120, edit: 'text'}">IP</th>
        <th lay-data="{field:'logins', width:100, edit: 'text'}">登入次数</th>
        <th lay-data="{field:'joinTime', width:120, edit: 'text'}">加入时间</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
        <td>2131</td>
    </tr>
    </tbody>
</table>


<script>
    layui.use('table', function(){
        var table = layui.table;

        //监听单元格编辑
        table.on('edit(test3)', function(obj){
            var value = obj.value //得到修改后的值
                ,data = obj.data //得到所在行所有键值
                ,field = obj.field; //得到字段
            layer.msg('[ID: '+ data.id +'] ' + field + ' 字段更改为：'+ value);
        });
    });
</script>






</body>
</html>

