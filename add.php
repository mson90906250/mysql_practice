<?php
include_once("sqlConn.inc.php");

$link -> select_db("my_db");

$sql = sprintf("INSERT INTO person(FirstName,LastName,Age) VALUES('%s','%s','%d')",$_POST['FirstName'],$_POST['LastName'],$_POST['Age']);

if(isset($_POST['Submit'])){//isset()測試變數是否有被設置,即判斷按鈕(id:Submit)是否有被按
	$link -> query($sql);
	header("location:index.php");//echo會由header來發送,而header每一頁面只能執行一次,若sqlConn.inc.php裡有echo則													                                 //header("location:index.php")不能執行
}




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增記錄</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="add.php">
  
  
  <div align="center">
    <table width="500	" border="1" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td><div align="center">FirstName</div></td>
        <td><div align="center">LastName</div></td>
        <td><div align="center">Age</div></td>
      </tr>
      <tr>
        <td><label>
          <input name="FirstName" type="text" id="FirstName" />
        </label></td>
        <td><label>
          <input name="LastName" type="text" id="LastName" />
        </label></td>
        <td><label>
          <input name="Age" type="text" id="Age" />
        </label></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
          <input name="Submit" type="submit" id="Submit" value="送出" />
        </label></td>
      </tr>
                </table>
  </div>
</form>
	
</body>
</html>
