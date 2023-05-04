<?php
include 'connection.php';
$id = $_POST['id'];
$sql = "DELETE FROM `users` WHERE id=$id";
if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
var_dump($id);
?>