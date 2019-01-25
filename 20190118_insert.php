<?php
include_once("sqlConn.inc.php");

$link -> select_db("my_db");

$link -> query("INSERT INTO person(FirstName,LastName,Age) VALUES('Peter','Griffin','35')");

$link -> query("INSERT INTO person(FirstName,LastName,Age) VALUES('Gleen','Quagmire','33')");

$link -> close();

?>
