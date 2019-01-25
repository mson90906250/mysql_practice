<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

	<?php
	
	$name = 周傑倫;
	$price = 400;
	$goods = 衣服;
	
	$format = "%s花了%d元,買了一件%s";
	
	echo sprintf($format,$name,$price,$goods);
	
	
	?>

</body>
</html>
