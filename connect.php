<?php

$servername="localhost";
$username="root";
$password="";
$db = "gym";

$con=new mysqli($servername ,$username,$password);
if(!$con){
    echo alert("Could not connect to");
}

$query = `use '$db'`;

?>
