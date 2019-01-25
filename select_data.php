<?php

include_once("sqlConn.inc.php");


/*如果資料庫已經建立,則不需使用此程式碼
//create database
if($link -> query("CREATE DATABASE my_db")){
	echo "database created!!";
}else{
	echo "Error creating database".$link ->error;
}*/

//create table
$link -> select_db("my_db");

$sql = "
CREATE TABLE person(
personID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(personID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";

//execute sql
$link -> query($sql);

$link -> close();
?>