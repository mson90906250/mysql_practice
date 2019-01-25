<?php
header("Access-Control-Allow-Origin:*");//使所有使用者可以取得echo裡的資料
$servername = "localhost";
$username = "admin";
$password = "123456";

$link = new mysqli($servername,$username,$password);

mysqli_query($link,"SET NAMES UTF8");


//check connection
if(mysqli_connect_error()){
	//echo "can't create connection".$link -> connect_error;
}else{
	//echo "connection created!!<br>";
}

?>