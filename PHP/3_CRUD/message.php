<?php
include("database.php");

if(isset($_SESSION['SUCCESS'])){
    echo $_SESSION['SUCCESS'];
    unset($_SESSION['SUCCESS']);
}

if(isset($_SESSION['ERROR'])){
    echo $_SESSION['ERROR'];
    unset($_SESSION['ERROR']);
}


?>