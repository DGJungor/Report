<?php
include_once('inc/conn.php');
$file = $HTTP_POST_FILES['file']['name'];
$filetempname = $_FILES['file']['tmp_name'];

//自己设置的上传文件存放路径
	$filePath = '../upFile/';
	$str = "";

	require_once 'PHPExcel.php';
	require_once 'PHPExcel\IOFactory.php';
	require_once 'PHPExcel\Reader\Excel2007.php';//excel 2007

	$filename=explode(".",$file);//把上传的文件名以“.”好为准做一个数组。
	$time=date("Y-m-d-H-i-s");//去当前上传的时间
	$filename[0]=$time;//取文件名t替换
	$name=implode(".",$filename); //上传后的文件名
	$uploadfile=$filePath.$name;//上传后的文件名地址

	//move_uploaded_file() 函数将上传的文件移动到新位置。若成功，则返回 true，否则返回 false。
  $result=move_uploaded_file($filetempname,$uploadfile);//假如上传到当前目录下
	if($result){ //如果上传文件成功，就执行导入excel操作
		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
		$objPHPExcel = PHPExcel_IOFactory::load($uploadfile);
		$sheet = $objPHPExcel->getSheet(0);
		$highestRow = $sheet->getHighestRow(); // 取得总行数
		$highestColumn = $sheet->getHighestColumn(); // 取得总列数

	//循环读取excel文件,读取一条,插入一条
		for($j=2;$j<=$highestRow;$j++){
			for($k='A';$k<=$highestColumn;$k++){
				$str .= iconv("UTF-8","gbk",$objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()).'\\';//读取单元格
			}
			$strs = explode("\\",$str);
			mysql_query("set names 'gb2312'");//这就是指定数据库字符集，一般放在连接数据库后面就系了
			$sql = "INSERT INTO report (number,month,data_1,data_2,data_3,data_4,data_5,data_6,data_7) VALUES('".$strs[0]."','".$strs[1]."','".$strs[2]."','".$strs[3]."','".$strs[4]."','".$strs[5]."','".$strs[6]."','".$strs[7]."','".$strs[8]."')";
			if(!mysql_query($sql)){
				return false;
			}
			$str = "";
			$p=$strs[0];
		}
		unlink($uploadfile); //删除上传的excel文件
		$msg = json_encode("$p");
	}else{
		$msg =json_encode("上传失败");
	}
	return  $msg;


