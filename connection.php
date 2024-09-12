<?php
$servername="localhost";
$username="root";
$password="";
$database="billing_database";

$con= new mysqli($servername,$username,$password,$database);

if($con->connect_error){
    die("failed to connect to database");
}


?>









