<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "notice_board";
$conn = mysqli_connect($host,$user,$pass,$db_name);
if(!$conn){
	die('connection error');
}

?>