<?php
//开启session
session_start();

//设置为中国时区
date_default_timezone_set('PRC');

//mvc 模式开发
//index.php
// get runtime controller prefix
$c_str = $_GET['c'];
// the full name of controller
$c_name = $c_str.'Controller';
// the path of controller
$c_path = 'Controllers/'.$c_name.'.php';
// get runtime action
$method = $_GET['a'];
// get runtime parameter
$param = $_GET['param'];
// load controller file
require($c_path);
// instantiate controller
$controller = new $c_name;
// run the controller  method
$controller->$method($param);
// End of index.php

//使用方法   url:http://www.r2.com/index.php?c=Demo&a=Index&param=welcome


?>