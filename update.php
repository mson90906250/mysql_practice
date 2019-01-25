<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>更新記錄</title>
<?php
include_once("sqlConn.inc.php");

$link -> select_db("my_db");

mysqli_query($link,"SET NAMES UTF8");

if(isset($_POST['update'])){//當update的按鈕被按下時執行
	$sql = "UPDATE person SET FirstName = '".$_POST['FirstName']."',LastName = '".$_POST['LastName']."',Age = '".$_POST['Age']."' WHERE personID ='".$_POST['id']."' ";
	$link -> query($sql);
	header("location:index.php");
}

$sql = "SELECT * FROM person WHERE personID =\"$_GET[id]\" ";

$result = $link -> query($sql);

$row = $result -> fetch_array();
		
$link -> close();

?>

</head>

<body>

 <form id="form1" name="form1" method="post" action="update.php">
  
  <div align="center">
    <table width="500	" border="1" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td><div align="center">FirstName</div></td>
        <td><div align="center">LastName</div></td>
        <td><div align="center">Age</div></td>
      </tr>
      <tr>
        <td><label>
			<input name="FirstName" type="text" id="FirstName" value="<?php echo $row['FirstName'] ?>"/>
        </label></td>
        <td><label>
           <input name="LastName" type="text" id="LastName" value="<?php echo $row['LastName'] ?>"/>
        </label></td>
        <td><label>
           <input name="Age" type="text" id="Age" value="<?php echo $row['Age'] ?>"/>
        </label></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
          <input name="update" type="submit" id="update" value="更新" />
        </label>
		<label>
          <input name="cancel" type="button" id="cancel" value="取消" onclick="javascript:history.back(-1)" />
        </label>
		<label>
          <input name="id" type="hidden" id="id" value="<?php echo $row['personID'] ?>" />
        </label></td>
      </tr>
                </table>
  </div>
</form>
</body>
</html>
