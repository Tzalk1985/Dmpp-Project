<?php
//DATABASE CONNECTION
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="test";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection failed : ".$conn->connect_error);
  }
?>

