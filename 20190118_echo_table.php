<?php
require_once("sqlConn.inc.php");//require_once引入一個php且不能重複,引不到檔案會出現錯誤息，而且程式會停止執行。

$link -> select_db("my_db");//選擇資料庫

$result = mysqli_query($link,"SELECT * FROM person");

echo "<table border = \"1\" style='text-align:center ; color:red'>
		<tr>
		<td>personID</td>
		<td>FirstName</td>
		<td>LastName</td>
		<td>Age</td>
		</tr>";
		
while($row = $result -> fetch_array()){
	echo "<tr>";
	echo "<td>".$row['personID']."</td>";
	echo "<td>".$row['FirstName']."</td>";
	echo "<td>".$row['LastName']."</td>";
	echo "<td>".$row['Age']."</td>";
	echo "</tr>";
	}
	
$link -> close();	
	


?>
