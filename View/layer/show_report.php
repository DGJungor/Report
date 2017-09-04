<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/4
 * Time: 10:13
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

                                <th lay-data="{align:'center',field:'username', width:70}" rowspan="2">NO.</th>
                                <th lay-data="{align:'center',field:'amount'}" colspan="3">入库</th>
                                <th lay-data="{align:'center'}" colspan="3">出库</th>
                            </tr>
                            <tr>
                                <th lay-data="{align:'center',field:'province', width:150}">单据编号</th>
                                <th lay-data="{align:'center',field:'city', width:250}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'county', width:70}">数量</th>
                                <th lay-data="{align:'center',field:'province', width:150}">单据编号</th>
                                <th lay-data="{align:'center',field:'city', width:250}">对方店铺/大仓</th>
                                <th lay-data="{align:'center',field:'county', width:70}">数量</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>贤心1</td>
                                <td>66</td>
                                <td>人生就像是一场修行a</td>
                            </tr>
                            <tr>
                                <td>贤心2</td>
                                <td>88</td>
                                <td>人生就像是一场修行b</td>
                            </tr>
                            <tr>
                                <td>贤心3</td>
                                <td>33</td>
                                <td>人生就像是一场修行c</td>
                            </tr>
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

                    <!--                    <table lay-filter="warehouse">-->
                    <!--                        <thead>-->
                    <!--                        <tr>-->
                    <!---->
                    <!--                            <th lay-data="{align:'center',field:'username', width:70}" rowspan="2">NO.</th>-->
                    <!--                            <th lay-data="{align:'center',field:'amount'}" colspan="3">入库</th>-->
                    <!--                            <th lay-data="{align:'center'}" colspan="3">出库</th>-->
                    <!--                        </tr>-->
                    <!--                        <tr>-->
                    <!--                            <th lay-data="{align:'center',field:'province', width:150}">单据编号</th>-->
                    <!--                            <th lay-data="{align:'center',field:'city', width:250}">对方店铺/大仓</th>-->
                    <!--                            <th lay-data="{align:'center',field:'county', width:70}">数量</th>-->
                    <!--                            <th lay-data="{align:'center',field:'province', width:150}">单据编号</th>-->
                    <!--                            <th lay-data="{align:'center',field:'city', width:250}">对方店铺/大仓</th>-->
                    <!--                            <th lay-data="{align:'center',field:'county', width:70}">数量</th>-->
                    <!--                        </tr>-->
                    <!--                        </thead>-->
                    <!---->
                    <!--                        <tbody>-->
                    <!--                        <tr>-->
                    <!--                            <td>贤心1</td>-->
                    <!--                            <td>66</td>-->
                    <!--                            <td>人生就像是一场修行a</td>-->
                    <!--                        </tr>-->
                    <!--                        <tr>-->
                    <!--                            <td>贤心2</td>-->
                    <!--                            <td>88</td>-->
                    <!--                            <td>人生就像是一场修行b</td>-->
                    <!--                        </tr>-->
                    <!--                        <tr>-->
                    <!--                            <td>贤心3</td>-->
                    <!--                            <td>33</td>-->
                    <!--                            <td>人生就像是一场修行c</td>-->
                    <!--                        </tr>-->
                    <!--                        </tbody>-->
                    <!--                    </table>-->


                </div>

            </div>


            <script>

                layui.use(['table', 'form', 'layer'], function () {
                    var table = layui.table;


                    table.init('warehouse', {
//                        height: 600 //设置高度
                        page: true //是否显示分页
                        , limits: [5, 10, 30]
                        , limit: 10 //每页默认显示的数量
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
