<?php


include('conn.php');
$id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM pinakasdmpp WHERE DMPP ='$id'"; 

if ($conn->query($sql) === TRUE) {
  echo "Επιτυχής διαγραφή συνταγής. Επιστροφή στην αρχική σελιδα σε 3 δευτερόλεπτα";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
echo '<script>
  const myTimeout = setTimeout(back, 3000);
 function back(){
  window.location = "http://www.kostastzallas.com/Pinakas.php" };</script>';

?>
