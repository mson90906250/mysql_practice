<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>刪除記錄</title>
<?php
require_once("sqlConn.inc.php");

$link -> select_db("my_db");

mysqli_query($link,"SET NAMES UTF8");

if(isset($_POST['delete'])){//當delete的按鈕被按下時執行
	$sql = "DELETE FROM person WHERE personID = ".$_POST['id'];
	$link -> query($sql);
	header("location:index.php");
}

$sql = sprintf("SELECT * FROM person WHERE personID = '%d'",$_GET['id']);

$result = $link -> query($sql);

$row = $result -> fetch_array();
		
$link -> close();

?>
</head>

<body>
<form id="form1" name="form1" method="post" action="delete.php">
  
  <div align="center" style="font-size:2em;">
    <table width="500	" border="1" align="center" cellpadding="5" cellspacing="0" >
      <tr>
        <td><div align="center">FirstName</div></td>
        <td><div align="center">LastName</div></td>
        <td><div align="center">Age</div></td>
      </tr>
      <tr>
        <td><label >
			<div align="center"><?php echo $row['FirstName'] ?>
		      </div>
        </label></td>
        <td><label>
           <div align="center"><?php echo $row['LastName'] ?>
              </div>
        </label></td>
        <td><label >
           <div align="center"><?php echo $row['Age'] ?>
              </div>
        </label></td>
      </tr>
      <tr>
        <td colspan="3" align="center"><label>
          <input name="delete" type="submit" id="delete" value="刪除" onclick="return confirm('確定要刪除嗎')"/>
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

</body>
</html>
