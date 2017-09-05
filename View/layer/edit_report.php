<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/4
 * Time: 10:13
 */
class Index
{
    public function display($warehouse,$sell)
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
            <script src="./Public/jquery/1.11.3/jquery.js"></script>
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
                                <th lay-data="{align:'center',field:'in_id', width:150,edit:'text'}">单据编号</th>
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

                                <th lay-data="{align:'center',field:'no', width:96,}" rowspan="2">日期</th>
                                <th lay-data="{align:'center',field:'in', width:520}" colspan="6">销售收入</th>
                                <th lay-data="{align:'center',field:'out', width:520}" colspan="6">销售收款</th>
                                <th lay-data="{align:'center',field:'c', width:520}" colspan="4">现金状态</th>
                            </tr>
                            <tr>
                                <th lay-data="{align:'center',field:'sell_num', width:63}">数量</th>
                                <th lay-data="{align:'center',field:'sell_mon', width:58}">金额</th>
                                <th lay-data="{align:'center',field:'sell_dvip', width:67}">减:VIP</th>
                                <th lay-data="{align:'center',field:'sell_dpro', width:76}">减:促销</th>
                                <th lay-data="{align:'center',field:'sell_ddis', width:74}">减:积分</th>
                                <th lay-data="{align:'center',field:'sell_net', width:80}">销售净额</th>

                                <th lay-data="{align:'center',field:'in_card_wd', width:80}">有线刷卡</th>
                                <th lay-data="{align:'center',field:'in_card_wl', width:83}">无线刷卡</th>
                                <th lay-data="{align:'center',field:'in_purchase', width:82}">内购收现</th>
                                <th lay-data="{align:'center',field:'in_mk', width:83}">商场收款</th>
                                <th lay-data="{align:'center',field:'in_coupon', width:72}">代金券</th>
                                <th lay-data="{align:'center',field:'in_cash', width:83}">现金收入</th>
                                <th lay-data="{align:'center',field:'c_ing', width:79}">进行现金</th>
                                <th lay-data="{align:'center',field:'c_balance', width:79}">现金余额</th>
                                <th lay-data="{align:'center',field:'c_purchase', width:79}">内购现金</th>
                                <th lay-data="{align:'center',field:'c_gro', width:66}">成长金</th>

                            </tr>
                            </thead>

                            <tbody>

<!--                            <tr>-->
<!--                                <td>1</td>-->
<!--                                <td>2</td>-->
<!--                                <td>3</td>-->
<!--                                <td>4</td>-->
<!--                                <td>5</td>-->
<!--                                <td>6</td>-->
<!--                                <td>7</td>-->
<!--                                <td>8</td>-->
<!--                                <td>9</td>-->
<!--                                <td>10</td>-->
<!--                                <td>11</td>-->
<!--                                <td>12</td>-->
<!--                                <td>13</td>-->
<!--                                <td>14</td>-->
<!--                                <td>15</td>-->
<!--                                <td>16</td>-->
<!--                                <td>17</td>-->
<!--                                <td>18</td>-->
<!--                                <td>19</td>-->
<!--                                <td>20</td>-->
<!--                            </tr>-->

                            <?php
                            foreach ($sell as $v => $k) {
                                ?>
                                <tr>
                                    <td><?php echo $k['date']; ?></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><?php echo $k['sell_num']; ?></td>
                                    <td><?php echo $k['sell_mon']; ?></td>
                                    <td><?php echo $k['sell_dvip']; ?></td>
                                    <td><?php echo $k['sell_dpro']; ?></td>
                                    <td><?php echo $k['sell_ddis']; ?></td>
                                    <td><?php echo $k['sell_net']; ?></td>
                                    <td><?php echo $k['in_card_wd']; ?></td>
                                    <td><?php echo $k['in_card_wl']; ?></td>
                                    <td><?php echo $k['in_purchase']; ?></td>
                                    <td><?php echo $k['in_mk']; ?></td>
                                    <td><?php echo $k['in_coupon']; ?></td>
                                    <td><?php echo $k['in_cash']; ?></td>
                                    <td><?php echo $k['c_ing']; ?></td>
                                    <td><?php echo $k['c_balance']; ?></td>
                                    <td><?php echo $k['c_purchase']; ?></td>
                                    <td><?php echo $k['c_gro']; ?></td>
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


                    //监听单元格编辑
                    table.on('edit(warehouse)', function(obj){
                        var value = obj.value //得到修改后的值
                            ,data = obj.data //得到所在行所有键值
                            ,field = obj.field; //得到字段
                        layer.msg('[ID: '+ data.id +'] ' + field + ' 字段更改为：'+ value);
                        console.log(field);
                    });

                });


            </script>


        </body>
        </html>


        <?php

    }
}

?>
