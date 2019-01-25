<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?php

 $total = 0; //總彩金
 $cnt = 0;	//抽中次數
 $money = 0;
 $format1 = "<br>抽中彩金%d,累計%d元";
 $format2 = "<br>抽中彩金%d,恭喜您共獲得%d元";
 
 do{
 	$money = rand(0,10);
 
 	$cnt++;//計算抽的次數
	
	$total= $total+$money;//計算總彩金
	
	echo sprintf($format1,$money,$total);
	
 
 }while($money!=0);
	
echo sprintf($format2,$money,$total);	

?>

</body>
</html>
