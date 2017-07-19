<?php

require_once './constants.php';
//require_once './login.php';

function getDefaultConn() {
    $link = mysqli_connect($GLOBALS['db_hostname'], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["default_db_name"]);
    return $link;
}



function validateInfo($fname, $oname, $dob, $email, $password) {
    return isset($fname) &&
            isset($oname) &&
            isset($dob) &&
            isset($email) &&
            isset($password);
}
function getEventIimages(){
    $link = getDefaultConn();
    $query = "SELECT * FROM event_imgs";
    $result = mysqli_query($link, $query);
    if(!$result){
        echo " unable to connect to database";
    }else{
        return $result;
    }
    
    
    
}

function getImage() {
    $link = getDefaultConn();
    $sqli = "SELECT * FROM img_slider";
    $query = mysqli_query($link, $sqli);
    if (!$query) {
        echo "unable to select from database";
    } else {
        return $query;
    }
}
function registerUser($fname, $oname, $dob, $email, $password){
    $collect = validateInfo($fname, $oname, $dob, $email, $password);
    if($collect){
        $success = saveUserData($fname, $oname, $dob, $email, $password);
        if($success){
            return $success;
        }
    }
}

function saveUserData($fname, $oname, $dob, $email, $password) {
    $link = getDefaultConn();
    $fname = mysqli_escape_string($link, $fname);
    $oname = mysqli_escape_string($link, $oname);
    $dob = mysqli_escape_string($link, $dob);
    $email = mysqli_escape_string($link, $email);
    //$password = mysqli_escape_string($link, $password);
    $password = sha1($password);
    $query = "INSERT INTO users SET first_name = '$fname',"
            . "other_name ='$oname',"
            . "dob = '$dob',"
            . "email = '$dob',"
            . "password = '$password',";
    $ok = mysqli_query($link, $query);

    //  $result = mysqli_query($link, $sqli);
    if (!$ok) {
        return " error Inserting data to db";
    } else {
        return $ok;
    }
}

function loginUser($email, $password) {
    //if(!(empty($email) | empty($password))){
    $link = getDefaultConn();
    $query = "SELECT * FROM users WHERE email = '$email'";

    $ok = mysqli_query($link, $query);
    if ($ok) {
            $row = mysqli_fetch_array($ok);
            $match = strcmp($password, $row["password"]);
            return $match === 0 ? getCookie($email, $password) : false;
            
           
       }
       return true;
   // }
       // return false;


}

function getCookie($email, $password){
    $exp = time() + (60 * 60 * 7 * 24);
    $set = setcookie("user", $email, $exp);
    if($set){
        //$exp = time() + (60 * 60 * 7 * 24);
        $pwd = setcookie("pwd_id", $password, $exp);
        if($pwd){
            return true;
        }
    }else{
        return FALSE;
    }
    return true;
}

function isUserLoggedIn() {
    //$link = getDefaultConn();
    $check = filter_input(INPUT_COOKIE, "user");
    if(isset($check)){
        return true;
    }else{
        return FALSE;
    }
}

?>
