<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<?php
	session_start();
	
	if(isset($_SESSION['cnt'])){
		echo "歡迎您第".$_SESSION['cnt']."次造訪本網頁";
		$_SESSION['cnt']++;
		if($_SESSION['cnt']>10){
			session_destroy();
		}
	}else{
		echo "歡迎您第1次造訪本網頁";
		$_SESSION['cnt'] = 2;
	}
	




?>
</body>
</html>
