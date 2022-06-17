<?php

$sname ="locahost";
$uname ="root";
$password ="";
$db_name = "my_db";

$conn = mysql_connect($sname,$uname,$password,$db_name);
if(!$conn){
	echo "Connection Failed";
}