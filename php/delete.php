<?php
include_once '../include/db_connect.php';

session_start();
 $admin = $_SESSION['admin'];

if(!isset($_SESSION['admin']))
{
	header("location: i.php");
}
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query1=$con->query("delete from members where id='$id'");
if($query1)
{
header('location:./a.php');
}
}
?>