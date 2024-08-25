<!-- mysqli_connect_error() -->

<?php

include "database.php";



if(isset($_POST['submit'])){
    $mail=$_POST['mail'];
    $password=$_POST['pass'];

    // extract($_POST);

   $pass=md5($password);
   $sql="INSERT INTO crud (username,password) VALUES ('$mail','$pass')";
   $result=$conn->query($sql);
    if($result){
        $_SESSION['SUCCESS']="Data is submitted successfully";
    }
    else{
        $_SESSION['ERROR']="DATA IS NOT INSETED";
    }
    header("LOCATION: allusers.php");
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
<body>
<div class="form">
    <h1>ADD USER</h1>
<form action="newuser.php" method="post">
    <div class="container">
        <label for="">Email Id</label>
        <input type="text" id="mail" name="mail" placeholder="Enter your email id">
    </div>

    <div class="container">
        <label for="">Password</label>
        <input type="password" id="pass" name="pass" placeholder="Enter your password">
    </div>
    <div>
       <button class="btn" type="submit" name="submit">SUBMIT</button> 
    </div>

    <div>
        <a href="allusers.php">SHOW USERS</a>
    </div>
</form>
<div>
</body>
</html>