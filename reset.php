<?php
require './functions.php';
require_once './plugin.php';
//md5(uniqid(rand(), true))

//$resetRequest = filter_input(INPUT_GET,"s");
$switchRequest = filter_input(INPUT_GET, "id");

if($switchRequest ==="3"){
    $resetPassword = false;
    $requestPrompt= false;
    $errorMessage ="";
$email = $_POST["email"];
$link = getDataBaseConn();
$query = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($link, $query);
if($result){
    $row = mysqli_fetch_array($result);
    $user = $row["email"];
    $errorMessage = $user;
    //$found = isset($user);
    
    
}else{
   // $found = false;
    $errorMessage = $email. "was not found in any account";
}

}

    $uniq = md5(uniqid(true));
    $userid = $uniq;


if (!empty($switchRequest)) {

    if ($switchRequest === "2") {
        $resetPassword = false;
        $requestPrompt = true;
        //$getUserEmail = true;
    } elseif($switchRequest ==="3") {
        $resetPassword = FALSE;
        $requestPrompt = false;
        $foundEmail = true;
        

        // $getUserEmail = false;
    }else{
    $resetPassword = true;
    $requestPrompt = false;    
    $foundEmail = false;


    }
} else {
    // header("location: login.php");
    $resetPassword = true;
    $requestPrompt = false;
    $foundEmail = false;

}
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title>Recover your Account</title>
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
        <?php if ($resetPassword) { ?>
                    <div class="fluid grid">
                        <div class="row">
                            <div class="span3">

                            </div>
                            <div class="span5">
                                <h1>Reset Password</h1>
                                <hr/>
                                <small>Recover your account</small>
                                <div class="input-control radio default-style">
                                    <label>
                                        <h2><input type="radio" checked name="email"/><span class="check"></span>&nbsp;&nbsp;Reset using email address</h2>
                                    </label>
                                    <br/>
                                    <label>
                                        <h2><input type="radio" disabled><span class="check"></span>&nbsp;&nbsp;Reset using Phone number</h2>
                                    </label>

                                </div>
                                <br/>
                                <a href="reset.php?id=2"><button class="span3">Continue</button></a>
                            </div>
                        </div>
                    </div> 
<?php } elseif($requestPrompt) { ?>
                    <div class="fluid grid">
                        <div class="row">
                            <div class="span3"></div>
                            <div class="span8">
                                <h1>Reset Password</h1>
                                <hr/>

                                <small>Please enter your email address</small>
                                <br/>
                                <form action="reset.php?id=3" method="POST">
                                <div class="row ntm">
                                    <div class="input-control text span6 margin10">
                                        <input type="text" name="email" Placeholder="Enter your email Address"/>

                                    </div>

                                </div>
                                    <a href="reset.php?id=3"><button class="large" name="submit">Submit</button></a>
                                </form>
                                <small><a href="login.php">&nbsp;&nbsp;::login to your account</a></small>

                            </div>
                        </div>
                    </div>

<?php }elseif($foundEmail){ ?>
                <div class="grid fluid">
                    <div class="row">
                        <div class="span3"></div>
                        <div class="span8">
                            <h1>Reset Password</h1>
                            <hr/>
                            <?= isset($user)? "<small>Email Address found</small>"
                            
                            : "<small>Email Address not found</small> <br/> <h2>\"".$email."\"</h2>" ?>
                                <h2 class="fg-green"><?= isset($errorMessage) ? $errorMessage : ""?></h2>
                                <button name="resetPassword">Reset Password</button>
                                <small><a href="login.php">&nbsp;&nbsp;::login to your account</a></small>

                                

                        </div>
                    </div>
                </div>

                <?php } ?>


            </div>

<?php require_once './footer.php'; ?>
        </div>



    </body>


</html>
