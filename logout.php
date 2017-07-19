<?php
logoutUser();

function logoutUser(){
    $set = setcookie("user_id");
    if($set){
        header("location: login.php");
    }
    return $set;
}

?>
