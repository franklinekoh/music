<?php
require './functions.php';
require_once './plugin.php';

$email = getCookieValue();
if(empty($email)){
    header("location: login.php");
}

$userType = getUserType();

$link = getDataBaseConn();
$email2 = getCookieValue();
if($userType ==="PREMIUM"){
$sqli = "SELECT * FROM premuim WHERE email = '$email2'";
}else{
    $sqli = "SELECT * FROM users WHERE email ='$email2'";
}
$query = mysqli_query($link, $sqli);
if($query){
    $row = mysqli_fetch_array($query);

    


?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title><?= getDisplayName()?></title>
        <!--stylesheet libraries -->
        <link href="js/prettify/prettify.css" rel="stylesheet">

        <link href="css/metro-bootstrap.css" rel="stylesheet">
        <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
        <link href="css/iconFont.css" rel="stylesheet">
        <link href="css/docs.css" rel="stylesheet">
        <link href="js/prettify/prettify.css" rel="stylesheet">

        <!-- Load JavaScript Libraries -->
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/jquery/jquery.widget.min.js"></script>
        <script src="js/jquery/jquery.mousewheel.js"></script>
        <script src="js/prettify/prettify.js"></script>

        <!-- Metro UI CSS JavaScript plugins -->
        <script src="js/load-metro.js"></script>

        <!-- Local JavaScript -->
        <script src="js/docs.js"></script>
        <script src="js/github.info.js"></script>


        <!--javascript libraries-->
        <script src="js/metro.min.js"></script>
        <script src="js/jquery/jquery.widget.js"></script>
        <script src="js/jquery/jquery.mousewheel.js"></script>
        <script src="js/prettify/prettify.js"></script>

        <script src="js/load-metro.js"></script>

    </head>
    <body class="metro" style="background: url('imgs/bg.jpg');">
        <?php require_once './header.php'; ?>
        <div class="container bg-white" >
            <div class="padding20">
                <div class="grid fluid">
                    <div class="row">
                        <div class="span3">
                            <button class="large ">UPDATE PROFILE</button>
                            <hr/>
                            <button class="large ">PAYMENT DETAILS</button>
                            <hr/>
                            <button class="large ">PROFILE SETTING</button>

                            
                        </div>
                        <div class="span7">
                            <h1>UPDATE DETAILS</h1>
                            <hr/>
                            <div class="row">
                                <div class="span8">
                                    <div class="rtn">
                                        <div class="input-control text span6">
                                          <input type="text" title="Enter firstname" required name="fname" placeHolder="<?= $row['first_name']?>">
                                        </div>
                                        <div class="input-control text span6">
                                            <input type="text" name="surname" value="" placeHolder="<?= $row['other_name']?>">
                                        </div>
                                            
                                    </div>
                                    <div class="rtn">
                                        <div class="input-control text span8">
                                            <input type="text" name="state" PlaceHolder="<?= $row['state']?>">
                                        </div>
                                            
                                        <div class="input-control text span4">
                                            <input type="text" name="lga" placeHolder="LGA">
                                        </div>
                                    </div>
                                    <div class="rtn">
                                        <div class="input-control text span12">
                                            <input type="email" disabled value="<?= isset($row) ? $row['email'] :'State'?>" name="email"/>
                                        </div>
                                    </div>
                                    <div class="rtn">
                                <div class="input-control textarea span12">
                                    <textarea placeHolder="Enter Home Address" name="address"></textarea>
                                </div>
                                    </div>
                                    <div class="rtn">
                                        <div class="input-control text span7">
                                            <input type="date" placeHolder="<?= $row['dob']?>" name="dob">
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <img src="<?= getDisplayImage()?>">
                                     <h4>
                                    <div class="input-control file ">
                                        <input type="file" name="passport" placeHolder="Update Pic"/>
                                        <button class="btn-file"></button>
                                    </div></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                
            </div>
         
            <?php require_once './footer.php';?>
        </div>
        
        
           
</body>


</html>
