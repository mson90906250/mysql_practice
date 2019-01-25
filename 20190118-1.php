<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
 <table width="500" border="1" align="center">
  <tr>
    <td><label>姓名</label></td>
    <td><input name="name" type="text" id="name" /></td>
  </tr>
  <tr>
    <td><label>性別</label></td>
    <td><input name="sex" type="radio" value="male" />
男
  <input name="sex" type="radio" value="female" />
女</td>
  </tr>
  <tr>
    <td>生日</td>
    <td><label>
      <select name="yy">
        <?php
			for($i=1910 ;$i<=2019 ;$i++){
				echo "<option value=\"$i\">$i</option>";
			}
		?>
      </select>
      </label>
年
<label>
<select name="mm">
  <?php
			for($i=1 ;$i<=12 ;$i++){
				echo "<option value=\"$i\">$i</option>";
			}
		?>
</select>
</label>
月
<label>
<select name="dd">
  <?php
			for($i=1 ;$i<=31 ;$i++){
				echo "<option value=\"$i\">$i</option>";
			}
		?>
</select>
</label>
日</td>
  </tr>
  <tr>
    <td height="19">興趣:</td>
    <td><label>
      <input type="checkbox" name="playball" value="打球" />
打球</label>
      <input type="checkbox" name="read" value="閲讀" />
閲讀<br />
<input type="checkbox" name="swim" value="游泳" />
游泳
<input type="checkbox" name="outing" value="郊游" />
郊游</td>
  </tr>
  <tr>
    <td height="32" colspan="2"><label>
      <div align="center">
        <input type="submit" name="Submit" value="送出" />
        </div>
    </label></td>
    </tr>
</table>

  
 
</form>
</body>
</html>
