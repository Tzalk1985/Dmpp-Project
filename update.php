<?php
/*
	include('conn.php');
	$id=$_GET['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
 
	mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");*/
	include('conn.php');

	$DMPP = $_POST['DMPP'];
	$H3PO4 = $_POST['H3PO4'];
	$DMP = $_POST['DMP'];
	$COLOR = $_POST['COLOR'];
	$YELLOW = $_POST['YELLOW'];
	$BLUE = $_POST['BLUE'];
	$Kilos = $_POST['Kilos'];
	$Litre = $_POST['Litre'];

	header('location:pinakasdmpp.php');
?>

