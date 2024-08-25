<?php
include("database.php");

if(isset($_POST['submit'])){
    extract($_POST);

    // SQL query to login

    $sql="SELECT * FROM crud WHERE username='$mail' AND password='$pass'";
    $result=$conn->query($sql);
    if($result->num_rows){
        $_SESSION['is_user_login']=true;
        $_SESSION['user_data']=mysqli_fetch_assoc($result);
        header("LOCATION: allusers.php");
    }
    else{
        $_SESSION['ERROR']="INVALID USER INFO";
    }
    include("message.php");

}
?>