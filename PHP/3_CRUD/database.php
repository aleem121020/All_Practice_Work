<?php
session_start();


$server="localhost";
$username="root";
$password="";
$dbname="crud_db";


// create connection

$conn=new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed");
}





?>