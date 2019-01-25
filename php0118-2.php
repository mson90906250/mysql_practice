<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<table width="500" border="1" align="center">
  <tr>
    <td >
		
	  <div align="center">
	    <?php
			$sex = $_POST['sex'];
			if($sex==male){
				echo "<img src=\"image/male.jpg\">";
			}else{
				echo "<img src=\"image/female.jpg\">";
			}
		?>
      </div></td>
    <td>
		<div align="center">
		  <?php
			$name = $_POST['name'];
			echo "姓名: $name";
		?>	
	  </div></td>
  </tr>
  <tr>
    <td>
		<div align="center">
		  <?php
			$yy = $_POST['yy'];
			$mm = $_POST['mm'];
			$dd = $_POST['dd'];
			echo "生日: $yy 年 $mm 月 $dd 日";
		?>	
	  </div></td>
    <td>
		<div align="center">
		  <?php
		
			/*$playball = $_POST['playball'];
			$swim = $_POST['swim'];
			$outing = $_POST['outing'];
			$read = $_POST['read'];
			echo "興趣: $playball $swim $outing $read";*/
			
			echo "興趣: ";
			$hobby = $_POST['hobby'];
			for($i=0 ;$i<count($hobby) ;$i++){
				echo $hobby[$i]." ";
			}
				
				 
			
		?>	
	  </div></td>
  </tr>
</table>
	
</body>
</html>
