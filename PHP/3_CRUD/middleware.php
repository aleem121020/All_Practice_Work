<?php

if(isset($_SESSION['is_user_login'])){
    echo "TRUE";
}
else{
    header("LOCATION: loginForm.php");
}

?>