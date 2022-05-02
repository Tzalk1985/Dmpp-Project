<?php


include('conn.php');
$id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM pinakasdmpp WHERE DMPP ='$id'"; 

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("refresh:3;url=pinakas.php");