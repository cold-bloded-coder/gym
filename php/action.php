<?php
include_once '../include/db_connect.php';

session_start();

if(!isset($_SESSION['admin']))
{
	header("location: i.php");
}
$i = $_GET['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$query1=$con->query("UPDATE members SET username ='$username', email = '$email' where id = '$i'");
if($query1)
{
header('location:./a.php');
}
?>