<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/4
 * Time: 10:13
 */
class Index
{
    public function display($warehouse)
    {
//        var_dump($warehouse);
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
            <!--            <link rel="stylesheet" href="./Public/bootstrap/3.3.0/css/bootstrap.min.css">-->
            <!--            <link rel="stylesheet" href="./Public/Common/css/base.css">-->
            <!--            <link rel="stylesheet" href="./Public/Common/css/report.css">-->

            <!-- JS   -->
            <script src="./Public/jquery/1.11.3/jquery.js"></script>
            <!--            <script src="./Public/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
            <!--            <script src="./Public/jquery/2.0.0/jquery.min.js"></script>-->
            <!--                <script src="./Public/My97DatePicker/WdatePicker.js"></script>-->
            <script src="./Public/layui/layui.js"></script>
            <script src="./Public/layui/layui.all.js"></script>


            <!--  style  -->
            <style>
                body {
                    margin: 10px;
                }
            </style>

            <!-- script   -->
            <script>

            </script>
        </head>
        <body>
        <div class="layui-container">
            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend>出库/入库</legend>
            </fieldset>

            <div class="layui-row">
                <div class="layui-col-md12">

                    <div class="layui-form">
                        <table lay-filter="warehouse">
                            <thead>
                            <tr>

                                <th lay-data="{align:'center',field:'no', width:70}" rowspan="2">NO.</th>
                                <th lay-data="{align:'center',field:'in'}" colspan="3">入库</th>
                                <th lay-data="{align:'center',field:'out'}" colspan="3">出库</th>
                            </tr>
                            <tr>
                                <th lay-data="{align:'center',field:'in_id', width:150}">单据编号</th>
                                <th lay-data="{align:'center',field:'in_name', width:250}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'in_num', width:70}">数量</th>
                                <th lay-data="{align:'center',field:'out_id', width:150}">单据编号</th>
                                <th lay-data="{align:'center',field:'out_name', width:250}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'out_num', width:70}">数量</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($warehouse as $v => $k) {
                                ?>
                                <tr>
                                    <td><?php echo $v + 1; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $k['in_id']; ?></td>
                                    <td><?php echo $k['in_name']; ?></td>
                                    <td><?php echo $k['in_num']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_name']; ?></td>
                                    <td><?php echo $k['out_num']; ?></td>
                                </tr>

                                <?php
                            }
                            ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

            <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
                <legend>销售情况</legend>
            </fieldset>

            <div class="layui-row">
                <div class="layui-col-md12">
                    <div class="layui-form">
                        <table lay-filter="sell">
                            <thead>
                            <tr>

                                <th lay-data="{fixed: 'left',align:'center',field:'no', width:120}" rowspan="2">日期</th>
                                <th lay-data="{align:'center',field:'in', width:520}" colspan="6">销售收入</th>
                                <th lay-data="{align:'center',field:'out', width:520}" colspan="6">销售收款</th>
                                <th lay-data="{align:'center',field:'c', width:520}" colspan="4">现金状态</th>
                            </tr>
                            <tr>
                                <th lay-data="{align:'center',field:'in_id', width:150}">单据编号</th>
                                <th lay-data="{align:'center',field:'in_name', width:200}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'in_num', width:370}">数量</th>
                                <th lay-data="{align:'center',field:'out_id', width:210}">单据编号</th>
                                <th lay-data="{align:'center',field:'out_name', width:210}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'out_num',width:520}">数量</th>

                                <th lay-data="{align:'center',field:'1in_id'}">单据编号</th>
                                <th lay-data="{align:'center',field:'1in_name'}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'1in_num'}">数量</th>
                                <th lay-data="{align:'center',field:'1out_id'}">单据编号</th>
                                <th lay-data="{align:'center',field:'1out_name'}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'12out_num'}">数量</th>
                                <th lay-data="{align:'center',field:'13out_num'}">数量</th>
                                <th lay-data="{align:'center',field:'14out_num'}">数量</th>
                                <th lay-data="{align:'center',field:'15out_num'}">数量</th>

                            </tr>
                            </thead>

                            <tbody>

                            <?php
                            foreach ($warehouse as $v => $k) {
                                ?>
                                <tr>
                                    <td><?php echo $v + 1; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $k['in_id']; ?></td>
                                    <td><?php echo $k['in_name']; ?></td>
                                    <td><?php echo $k['in_num']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_id']; ?></td>
                                    <td><?php echo $k['out_name']; ?></td>
                                    <td><?php echo $k['out_num']; ?></td>
                                </tr>

                                <?php
                            }
                            //
                            ?>
                            <!--                            </tbody>-->
                        </table>

                    </div>


                </div>

            </div>


            <script>

                layui.use(['table', 'form', 'layer'], function () {
                    var table = layui.table;

                    table.init('warehouse', {
                        page: true //是否显示分页
                        , limits: [5, 10, 30]
                        , limit: 10 //每页默认显示的数量
                        , skin: 'row' //行边框风格
                        , even: true //开启隔行背景
                        , size: 'sm' //小尺寸的表格
                        //支持所有基础参数
                    });

                    table.init('sell', {
                        page: true //是否显示分页
                        , limits: [5, 10, 30]
                        , limit: 10 //每页默认显示的数量
                        , skin: 'row' //行边框风格
                        , even: true //开启隔行背景
                        , size: 'sm' //小尺寸的表格
                        //支持所有基础参数
                    });

                });


            </script>


        </body>
        </html>


        <?php

    }
}

?>
