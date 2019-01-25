<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

	<?php
	
		$date = date("w");//取出server時間中的星期
		
		/*if($date==0){
			echo "今天星期日,猴子寫日志";
		}else if($date==1){
			echo "今天星期一,猴子穿新衣";
		}else if($date==2){
			echo "今天星期二,猴子肚子餓";
		}else if($date==3){
			echo "今天星期三,猴子去爬山";
		}else if($date==4){
			echo "今天星期四,猴子";
		}else if($date==5){
			echo "今天星期五,猴子去跳舞";
		}else if($date==6){
			echo "今天星期六,猴子";
		}*/
		
		switch($date){
			case 0:
				echo "今天星期日,猴子寫日志";
				break;
			case 1:
				echo "今天星期一,猴子穿新衣";
				break;
			case 2:
				echo "今天星期二,猴子肚子餓";
				break;		
			case 3:
				echo "今天星期三,猴子去爬山";
				break;
			case 4:
				echo "今天星期四,猴子";
				break;
			case 5:
				echo "今天星期五,猴子去跳舞";
				break;
			case 6:
				echo "今天星期六,猴子";
				break;			
		}
	
	?>

</body>
</html>
