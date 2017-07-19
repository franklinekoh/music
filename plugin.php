<?php

if (isset($_POST["loginButton"])) {
    // loginTheUser();
}

function getDataBaseConn() {
    $link = mysqli_connect("localhost", "root", "", "music_db");
    if (!$link) {
        echo 'unable to establish connection';
    }
    return $link;
}

function getProduct() {
    $dir = "imgs/";
    return $dir;

    
}

function getErrorMsg() {
    $error = loginTheUser();
    if ($error === true) {
        return $error;
    }
    return $error;
}

//require_once './functions.php';
//require_once '';
function loginTheUser($userLogin, $email, $password) {
    if ($userLogin === "SILVER" || $userLogin ==="PREMIUM") {
        $email = html_entity_decode(filter_input(INPUT_POST, "username"));
        $password = html_entity_decode(filter_input(INPUT_POST, "pwdlogin"));
//$errorMessage ="";
//$email = $_POST["username"];
//$password = $_POST["pwdlogin"];
//loginUser($email, $password);
        $link = getDataBaseConn();
        if ($link) {
            if($userLogin ==="SILVER"){
              $query = "SELECT * FROM users WHERE email = '$email'";

            }elseif($userLogin === "PREMIUM"){
                $query ="SELECT * FROM premuim WHERE email= '$email'";

            }
        }
            $result = mysqli_query($link, $query);
            if ($result && mysqli_num_rows($result) >0) {

                $row = mysqli_fetch_array($result);
                $success = $row["password"];
                $match = strcasecmp($password, $success) === 0;

                if ($match) {
                    //return $errorMessage = false;
                    //echo ' logged in';
                    setUserCookie($userLogin, $email);
                    header("location: profile.php");
                    //return $match;
                } 
            } else {
                //$errorMessage = 'unable to reach db';
                return false;

            }
        } else {
           // $errorMessage = "unable to establish connection please check your internet connection";
           return false;

        }
//echo "you are logged in"
    }

function setUserCookie($userLogin, $email) {
    $exp = time() + (60 * 60 * 7 * 24);
    $cookie = setcookie("user_id", $email, $exp);
    
    if($cookie){
        $userType = setcookie("user_type", $userLogin, $exp);
        //$userType2 = setcookie("user_type2", $userLogin2, $exp);
    }
    if (empty($cookie)) {
        echo ' activate browser cookie';
        //return false;
    }
    return $cookie && $userType;
}

function logoutUser() {
    $set = setcookie("user_id") && setcookie("user_type");
    if ($set) {
        header("location: login.php");
    }
    return $set;
}

function getDisplayName() {
    $link = getDataBaseConn();
    $email = getCookieValue();
    $usertype =  getUserType();
    //check user type premuim level or silver
    if($usertype === "PREMIUM"){
      $get = "SELECT * FROM premuim WHERE email='$email'";  
    }elseif($usertype === "SILVER"){
       $get = "SELECT * FROM users WHERE email ='$email'";

    }
    
    //$get2 = "SELECT * FROM premuim WHERE email = '$email'";
    $query = mysqli_query($link, $get);
    if ($query) {
        $row = mysqli_fetch_array($query);
        $fname = $row["first_name"];
        $oname = $row["other_name"];
        $displayname = $fname . " " . $oname;
    }
    return $displayname;
}
function getUserType(){
        $userType = filter_input(INPUT_COOKIE, "user_type");
        return $userType;;
    
}

function getCookieValue() {
    $emailCookie = filter_input(INPUT_COOKIE, "user_id");
    return $emailCookie ;
       
}

function getDisplayImage() {
    $email = getCookieValue();
    $link = getDataBaseConn();
    $userType = getUserType();
    if($userType === "PREMIUM"){
    $dir = "passport/";
    $query = "SELECT * FROM premuim WHERE email = '$email'";
        
    }else{
    $dir = "passport/";
    $query = "SELECT * FROM users WHERE email = '$email'";
    }
    $result = mysqli_query($link, $query);
    if ($result) {
        $row = mysqli_fetch_array($result);
        $passport = $row["passport"];
        $location = $dir . '' . $passport;
    }
    return $location;
}

?>
