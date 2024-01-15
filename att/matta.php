<?php
include_once "../../include/db_connect.php";

session_start();

$username = $_POST['id'];
if(isset($_SESSION['admin'])) {
	$q = $con->query("UPDATE `members` SET absent = absent+1 , days = days+1, pect = present*100/days WHERE username = '$username'");
	header("location: ../att.php");
}
else {
		echo "access forbidden";
	}
?>