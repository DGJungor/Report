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
<!--                        <link rel="stylesheet" href="./Public/layui/css/layui.css">-->
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

            <!--                                                <script src="./Public/jquery/1.11.3/jquery.js"></script>-->
            <!--            <script src="//res.layui.com/layui/dist/layui.js?t=1504112998306" media="all"></script>-->

            <!--                        <script src="./Public/layui/layui.js?t=1504112998306" media="all"></script>-->
            <!--                                    <script src="./Public/layui/layui.js"></script>-->
            <!--                                    <script src="//res.layui.com/layui/dist/layui.js?t=1504112998306"></script>-->
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

        <table id="demo" lay-filter="demo"></table>

        <script type="text/html" id="bar">
            <a class="layui-btn layui-btn-mini" lay-event="detail">查看</a>
            <a class="layui-btn layui-btn-mini" lay-event="edit">编辑</a>
            <a class="layui-btn layui-btn-warm layui-btn-mini" lay-event="freeze">冻结</a>
            <a class="layui-btn layui-btn-danger layui-btn-mini" lay-event="del">删除</a>


        </script>

        <script>


            layui.use('table', function () {
                var table = layui.table;

                //展示已知数据
                table.render({
                    id: 'demo'
                    , elem: '#demo'
                    , url: './index.php?c=Report&a=SelectRep'
                    , request: {
                        pageName: 'page' //页码的参数名称，默认：page
                        , limitName: 'limit' //每页数据量的参数名，默认：limit
                    }
                    , height: 480
                    , cols: [[ //标题栏
//                        {checkbox: true, LAY_CHECKED: true} //默认全选
                        {checkbox: false, LAY_CHECKED: false} //关闭选择框
                        , {field: 'id', title: 'ID', width: 100, sort: true}
                        , {field: 'shop_name', title: '店铺名', width: 180}
                        , {field: 'date', title: '日期', width: 100}
//            ,{field: 'sign', title: '签名', width: 150}
                        , {field: 'modify_time', title: '修改时间', width: 160}
                        , {field: 'stateCN', title: '状态', width: 100}
                        , {field: 'remarks', title: '备注', width: 500}
//            ,{field: 'experience', title: '积分', width: 80, sort: true}
                        , {fixed: 'right', title: '操作', width: 200, align: 'center', toolbar: '#bar'}
                    ]]
                    , skin: 'row' //表格风格
                    , even: true
                    , page: true //是否显示分页
                    , limits: [5, 7, 10]
                    , limit: 10 //每页默认显示的数量
                });

                table.on('tool(demo)', function (obj) { //注：tool是工具条事件名，test是table原始容器的属性 lay-filter="对应的值"
                    var data = obj.data; //获得当前行数据
                    var layEvent = obj.event; //获得 lay-event 对应的值
                    var tr = obj.tr; //获得当前行 tr 的DOM对象

                    var editurl = './index.php?c=Report&a=editRep&id=';

                    if (layEvent === 'detail') { //查看
                        //do somehing
                        console.log(data);
                        console.log(data.id);
                        console.log(tr);
                    } else if (layEvent === 'del') { //删除
                        layer.confirm('删除此报表?', function (index) {
                            obj.del(); //删除对应行（tr）的DOM结构
                            layer.close(index);
                            //向服务端发送删除指令
                        });
                    } else if (layEvent === 'edit') { //编辑

                        //跳转到编辑页面
                        window.location.href=editurl+data.id;

//                        //同步更新缓存对应的值
//                        obj.update({
//                            username: '123'
//                            , title: 'xxx'
//                        });
                    } else if (layEvent === 'freeze') { //冻结


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