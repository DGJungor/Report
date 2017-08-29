<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/28
 * Time: 14:55
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
            <link rel="stylesheet" href="./Public/layui/css/layui.css">
            <!--            <link rel="stylesheet" href="./Public/bootstrap/3.3.0/css/bootstrap.min.css">-->
            <link rel="stylesheet" href="./Public/Common/css/base.css">
            <link rel="stylesheet" href="./Public/Common/css/report.css">

            <!-- JS   -->
            <!--            <script src="./Public/jquery/2.0.0/jquery.js"></script>-->
            <!--            <script src="./Public/bootstrap/3.3.0/js/bootstrap.min.js"></script>-->
            <!--            <script src="./Public/jquery/2.0.0/jquery.min.js"></script>-->
            <!--    <script src="./Public/My97DatePicker/WdatePicker.js"></script>-->
            <script src="./Public/layui/layui.js"></script>


            <!--  style  -->


            <!-- script   -->
            <script>

            </script>
        </head>
        <body>


        <ul class="layui-nav" lay-filter="">
            <li class="layui-nav-item "><a href="">店铺收发表</a></li>
            <li class="layui-nav-item layui-this"><a href="">新建</a></li>
            <!--    <li class="layui-nav-item">-->
            <!--        <a href="javascript:;">解决方案</a>-->
            <!--        <dl class="layui-nav-child"> <!-- 二级菜单 -->-->
            <!--            <dd><a href="">移动模块</a></dd>-->
            <!--            <dd><a href="">后台模版</a></dd>-->
            <!--            <dd><a href="">电商平台</a></dd>-->
            <!--        </dl>-->
            <!--    </li>-->

        </ul>
        <div style="width: 100%; height: 50px"></div>
        <div class="layui-collapse">
            <div class="layui-colla-item">
                <h2 class="layui-colla-title">新建</h2>
                <div class="layui-colla-content layui-show">
                    <form class="layui-form" action="index.php?c=Report&a=Test1" method="post">
                        <div class="layui-form-item">
                            <label class="layui-form-label">店铺名</label>
                            <div class="layui-input-block">
                                <input type="text" name="shopname" required lay-verify="required" placeholder="请输入输入店铺名"
                                       autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">店铺代码</label>
                            <div class="layui-input-block">
                                <input type="text" name="shopcode" required lay-verify="required" placeholder="请输入输入店铺机构代码"
                                       autocomplete="off" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">日期</label>
                            <div class="layui-input-inline">
                                <input type="text" name="date" required lay-verify="required" class="layui-input" id="date">
                            </div>
                            <div class="layui-form-mid layui-word-aux">辅助文字</div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">Excel表格</label>
                            <div class="layui-input-inline">
                                <div class="layui-upload" style="width: 200px">
                                    <button type="button"  class="layui-btn layui-btn-normal" id="choiceExcel">选择文件</button>
<!--                                    <button type="button" class="layui-btn" id="upFile">开始上传</button>-->
                                </div>
                            </div>
                            <div class="layui-form-mid layui-word-aux"><a href="./dowFile/report.xls">点击下载报表模板文件</a></div>
                        </div>

                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="formDemo" id="upFile">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            //表单模块
            layui.use('form', function () {
                var form = layui.form;

                form.verify({
                    date: function(value){
                        if(value.length < 5){
                            return '不能为空!';
                        }
                    }
                });

                //监听提交
                form.on('submit(formDemo)', function (data) {
                    layer.msg(JSON.stringify(data.field));
                    return false;
                });
            });

            //日期模块
            layui.use('laydate', function () {
                var laydate = layui.laydate;

                //执行一个laydate实例
                laydate.render({
                    elem: '#date' //指定元素
                    , type: 'month'
                    , format: 'yyyy-MM'
                });
            });

            //文件上传模块
            layui.use('upload', function () {
                var $ = layui.jquery
                    , upload = layui.upload;

                //选完文件后不自动上传
                upload.render({
                    elem: '#choiceExcel'
                    , accept: 'file'
                    , url: 'index.php?c=Upload&a=UploadExcel'
                    , auto: false
                    //,multiple: true
                    , bindAction: '#upFile'
                    ,exts: 'xls'
                    , done: function (res) {
                        console.log(res)
                    }
                    ,choose: function(obj){
                        //将每次选择的文件追加到文件队列
                        var files = obj.pushFile();

                });
            });


        </script>
        </body>
        </html>

        <?php
    }
}

?>