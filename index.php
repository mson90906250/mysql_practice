<?php
require_once("sqlConn.inc.php");//require_once引入一個php且不能重複,引不到檔案會出現錯誤息，而且程式會停止執行。

$link -> select_db("my_db");//選擇資料庫

header("Content-Type:text/html; charset=utf-8");//PHP 送 Header 告訴瀏覽器這頁是 UTF-8 編碼

/*if(isset($_POST[update])){//當update的按鈕被按下時執行
	$sql = "UPDATE person SET FirstName = \"$_POST[FirstName]\",LastName = \"$_POST[LastName]\",Age = \"$_POST[Age]\" WHERE personID = \"$_GET[id]\" ";
	$link -> query($sql);
}*/

/*if(isset($_POST[delete])){//當delete的按鈕被按下時執行
	$sql = "DELETE FROM person WHERE personID = \"$_GET[id]\" ";
	$link -> query($sql);
}*/

//先將該處理的資料處理完,再提取所有資料做表格
$result = mysqli_query($link,"SELECT * FROM person ORDER BY personID ");


echo "<table border = \"1\" align=\"center\" style=\" text-align:center; color:black; font-size:2em;\"  >
		<tr><td><a href=\"add.php\">new record</a></td></tr>
		<tr>
		<td>FirstName</td>
		<td>LastName</td>
		<td>Age</td>
		<td>updata</td>
		<td>delete</td>
		</tr>";
		
while($row = $result -> fetch_array()){
	echo "<tr>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Age']."</td>";
	echo "<td><a href=\"update.php?id=$row[personID]\">update</a></td>";
	echo "<td><a href=\"delete.php?id=$row[personID]\">delete</a></td>";
	echo "</tr>";
	}

echo "</table>";
	
$link -> close();	
	


?>