<?php
session_start();

$number = mt_rand(10000,999999);

//Current Date and Time
date_default_timezone_set("Asia/Calcutta");
		$current_time = time('H:i:s');
		$date = date('Y-m-d');


$fs="_";
$newname="sameer".$fs.$current_time.$fs.$date.".xls";
if (!empty($_FILES)) {
	$tempFile=$_FILES['file']['tmp_name'];
	  	 $_SESSION['currentfile']=$newname;
    move_uploaded_file($tempFile,'upload/'.$newname);
}
?>