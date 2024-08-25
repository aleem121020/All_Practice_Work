<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method="post">
    <button type="submit" name="login">LOGIN</button>
    <button type="submit" name="logout">LOGOUT</button>
</form>



<?php




if(isset($_POST['login'])){
$_SESSION['usename']="Abdul Aleem";
$_SESSION['password']="Password123";
echo "LOGIN SUCCESSFUL";

}



if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
     echo "LOGOUT SUCCESSFUL";
    }

?>
</body>
</html>