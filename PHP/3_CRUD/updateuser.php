<!-- mysqli_connect_error() -->

<?php

include "database.php";

## step-1 -> get user data by id

if(isset($_GET['id'])){
$sql="select * from crud where id= ".$_GET['id'];
$result=$conn->query($sql);
$user =mysqli_fetch_assoc($result);
}


## step-2 -> Update user data by form submit

if(isset($_POST['submit'])){
    extract($_POST);

    $sql="UPDATE crud SET username='$mail' WHERE id=".$_GET['id'];
    $result=$conn->query($sql);

     if($result){
         $_SESSION['SUCCESS']="Data is UPDATED successfully";
     }
     else{
        $_SESSION['ERROR']="Data is NO UPDATED, PLEASE try again";
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
    <h1>EDIT USER</h1>
<form action="updateuser.php?id=<?php echo $user['id'];?>" method="post">
    <div class="container">
        <label for="">Email Id</label>
        <input type="text" id="mail" name="mail" placeholder="Enter your email id" value="<?php echo $user['username']; ?>">
    </div>
       <button class="btn" type="submit" name="submit">SUBMIT</button> 
    </div>

    <div>
        <a href="allusers.php">SHOW USERS</a>
    </div>

</form>
<div>
</body>
</html>