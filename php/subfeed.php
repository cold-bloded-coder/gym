<?php
include_once '../include/db_connect.php';

session_start();

$firstname = $_SESSION['username'];
$lastname = $_POST['feed'];

$sql="INSERT INTO feedbacks (username,feed)
VALUES ('$firstname', '$lastname')";

if (!$con->query($sql)) {
  die('Error: ' . mysqli_error($mysqli));
}
else{
	header("location: ../Feedback.php?success=1");
}
?>