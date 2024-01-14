<?php


//DATABASE CONNECTION

$host="localhost";
$dbusername="pma";
$dbpassword="";
$dbname="test";

// Create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

// Check connection
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection failed : ".$conn->connect_error);
  }

?>

