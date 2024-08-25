<?php
include("database.php");
include("middleware.php");


## For delete user

if(isset($_GET['id'])){
    $sql="DELETE FROM crud WHERE id=".$_GET['id'];
    $result=$conn->query($sql);
    if($result){
        $_SESSION['SUCCESS']="Data is deleted id=".$_GET['id'];
    }
    else{
        $_SESSION['ERROR']="THERE IS NO ERROR";
    }
}

## get all user

$sql="select * from crud";

$result=$conn->query($sql);


?>

<!-- For current timeFor current time -->
<!-- echo date("d-m-Y H:i A");  -->

<!-- For database time -->
<!-- echo date("d-m-Y H:i a",strtotime($row['created_at'])); -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php include("message.php") ?></h1>
    <table cellspacing="0" border="3">
        <thead>
            <tr>
                <th>Mail Id</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>

        <?php
    if($result->num_rows>0){
        while($row=mysqli_fetch_assoc($result)){
        
        ?>
           <tbody>
               <tr>
                   <td><?php echo $row['username']  ?></td>
                   <td><?php echo $row['password']  ?></td>
                    <td>
                       <a href="updateuser.php?id=<?php echo $row['id']  ?>" class="editbtn">Edit</a>
                       <a href="allusers.php?id=<?php echo $row['id']  ?>" class="deletebtn">Delete</a>
                     </td>
                 </tr>
             </tbody>
    <?php
    }
    }else{
        echo "<tr><td colspan='3'>No record found</td></tr>";
        }
    ?>
    </table>
    <div>
        <button><a href="newuser.php">ADD USER</a></button>
    </div>
     
</body>
</html>