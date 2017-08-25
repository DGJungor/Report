<?php
session_start();




//header("Location:./Theme/Report.php");
//header("Location:./Theme/Test.php");
//header("Location:./Controllers/UploadController.php");

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

//url:http://www.r1.com/index.php?c=Demo&a=Index&param=welcome


?>