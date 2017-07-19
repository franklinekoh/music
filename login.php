<?php
require_once './plugin.php';
require_once './functions.php';
$array = getEventIimages();

$errorMessage = "";
if (!empty(getCookieValue())) {
    header("location: profile.php");
}
//$formRequest = filter_input(INPUT_GET, "id");
$switchRequest = filter_input(INPUT_GET, "s");
if ($switchRequest === "6") {
    //$showLoginPage = false;
//handle a form request
    //if ($formRequest ==='2') {
    $fname = html_entity_decode(filter_input(INPUT_POST, "first_name"));
    $oname = html_entity_decode(filter_input(INPUT_POST, "other_name"));
    $sex = html_entity_decode(filter_input(INPUT_POST, "sex"));
    $dob = html_entity_decode(filter_input(INPUT_POST, "dob"));
    $email = html_entity_decode(filter_input(INPUT_POST, "email"));
    $password = filter_input(INPUT_POST, "password");
    $password2 = filter_input(INPUT_POST, "password2");
    $pwdCheck = strcasecmp($password, $password2) === '0';

    $success = registerUser($fname, $oname, $sex, $dob, $email, $password);
    if ($success) {
        header("location: profile.php");
    } else {
        $errorMessage = "Error connecting to the database";
    }


    //$loginUser = filter_input(INPUT_GET, "id") ==='2';
} elseif ($switchRequest === "1") {
    $errorMessage = "";
    //$showLoginPage = false;
    $userLogin = filter_input(INPUT_POST,"yes");
    //$userLogin2 = filter_input(INPUT_POST,"no");
     $email = html_entity_decode(filter_input(INPUT_POST, "username"));
     $password = html_entity_decode(filter_input(INPUT_POST, "pwdlogin"));
     $logUser = loginTheUser($userLogin, $email, $password);
     if(!$logUser){
         $errorMessage = "Oops!!! incorrect login details please try again";
         $showLoginPage = true;
         

     }
} else {
    $switchRequest = filter_input(INPUT_GET, "s");
    if (!empty($switchRequest)) {
        if ($switchRequest === "2") {
            $showLoginPage = false;
            $showRegister = true;
            $formEnd = false;
            //$showLoginPage = false;
            //$showRegister = false;
            $showParent = false;
            $musicHistory = false;
        } elseif ($switchRequest === "3") {
            $showLoginPage = false;
            $formEnd = false;
            $showRegister = false;
            $musicHistory = false;
            $showParent = true;
        } elseif ($switchRequest === "4") {
            $showLoginPage = false;
            $showRegister = false;
            $showParent = false;
            $musicHistory = true;
        } elseif ($switchRequest === "5") {
            $formEnd = true;
            $showLoginPage = false;
            $showRegister = false;
            $showParent = false;
            $musicHistory = false;
        } elseif ($switchRequest === "1") {

            $showRegister = false;
            $showLoginPage = true;
            $formEnd = false;
            //$showLoginPage = false;
            //$showRegister = false;
            $showParent = false;
            $musicHistory = false;
        }
    } else {
        $showRegister = false;
        $showLoginPage = true;
            $formEnd = false;
            //$showLoginPage = false;
            //$showRegister = false;
            $showParent = false;
            $musicHistory = false;
    }
}
//}
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title><?= $showLoginPage ? "Login" : "Register" ?></title>
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

    <script>
        $(function () {
            $("#carousel").carousel({
                period: 5000,
                duration: 1000,
                effect: 'fade',
                height: 400,
                controls: true,
                markers: {
                    show: true,
                    type: "default",
                    position: "bottom-right"
                }
            });
        });
    </script>
    <body class="metro" style="background: url('imgs/bg.jpg');">
<?php require_once './header.php'; ?>
        <script>
        </script>
        <div class="container bg-white">
        <?php
        if ($showLoginPage) {
            ?>
                <div class="padding20">
                    <div class="grid fluid">
                        <div class="row">

                            <div class="span4">
                                <h1><?= $showLoginPage ? "<span class='text-left'>Login</span>" : "Register" ?></h1>

                                <div class="container">
                                    <form action="login.php?s=1" method="POST">
                                        <div class="grid ntm row">
                                        <h4><?= isset($errorMessage) ?"<span class='fg-green'> ". $errorMessage ."</span>": "" ?></h4>                                            
                                        </div>

                                        <div class="grid">
                                            <div class="row ntm">
                                                <small class="fg-red">Login as: &nbsp;&nbsp;</small>
                                                <div class="input-control radio default-style" data-role="data-control">
                                                    <label>
                                                        <input type="radio" name="yes" <?= !empty($userLogin) ==="SILVER" ? "checked": ""?> required value="SILVER"/>
                                                        <span class="check"></span>
                                                        Silver
                                                    </label>
                                                </div>
                                                <div class="input-control radio default-style" data-role="data-control">
                                                    <label>
                                                        <input type="radio" name="yes" <?=  !empty($userLogin) ==="PREMIUM" ? "checked": ""?> required value="PREMIUM"/>
                                                        <span class="check"></span>
                                                        Premium
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row ntm">
                                                <div class="input-control text span4">
                                                    <input type="email" placeHolder="Enter Email Address" required name="username" maxlength="30"
                                                        <?= $switchRequest ? "value='$email'" : "" ?> />
                                                </div>
                                            </div><br/>
                                            <div class="row ntm">
                                                <div class="input-control span4 password">
                                                    <input type="password" name="pwdlogin" required maxlength="30" placeHolder="Enter Password" 
                                                       />
                                                    <button class="btn-reveal"></button>
                                                </div>
                                            </div>
                                            <h2><button class="large" name="loginButton">Login</button>
                                   

                                    <a href="login.php?s=2">&nbsp;&nbsp; Get Registered::</a></h2>
                                            <div class="row">
                                                <small class="fg-red fg-hover-red"><a href="reset.php">Reset Password</a></small>
                                            </div>
                                        </div>
 </form>

                                </div>
                            </div>
                            <div class="span1"></div>

                            <div class="span6 shadow">
                                <div class="carousel" style="height: 250px;">
                                    <div class="bg-transparent no-overflow" id="carousel">
    <?php foreach ($array as $value) { ?>
                                            <a class="slide image-container" href="<?= $value['link'] ?>"><img src="imgs/<?= $value['img_url'] ?>" class="image">
                                                <div class="overlay">
                                                    <h3>
                                                        <div class="fg-white"><small class="fg-white">UPCOMING:</small>&nbsp;<?= $value['img_info'] ?></div>
                                                    </h3>
                                                </div>
                                            </a>
        <?php
    }
    ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>





    <?php
} elseif ($showRegister) {
    ?>
                <div  class="padding20">
                    <h1><?= $showLoginPage ? "Login" : "Fill the form to get Started" ?></h1>
                    <hr/>                        
                    <h2><?= isset($errorMessage) ? $errorMessage : "" ?></h2>

                    <form action="login.php?s=2" method="POST">
                        <input name="type" value="2" hidden="" />
                        <div class="row">
                            <h4> Names <span class="fg-red">*</span>
                                <div class="input-control text span3 ">
                                    <input type="text" name="surname" placeHolder="Surname" required data-role="input-control"/>
    <?php // $formRequest ? "value = '$other_name'" : "";         ?> 
                                </div>
                                <div class="input-control text span3">
                                    <input type="text" required name="first_name" data-role="input-control" placeHolder="First Name"
                                    <?php // $formRequest ? "value='first_name'" : ""               ?> tabindex="2" >
                                </div>


                                <div class="input-control text span3">
                                    <input type="text" required name="other_name" data-role="input-control"placeHolder="Other Name"/>
    <?php // $formRequest ? "value='other_name'" : ""                ?> 

                                </div>
                            </h4>
                        </div>

                        <div class="row">
                            <h4>Sex <span class="fg-red">*</span>
                                <div class="input-control select span5">
                                    <select data-transform="input-control" class="">
                                        <option class="fg-gray">Please specify</option><option>Male</option>
                                        <option>Female</option>
                                    </select> 
                                </div>
                            </h4>
                        </div>

                        <div class="row">
                            <h4>Email Address <span class="fg-red">*</span>&nbsp;&nbsp;&nbsp;
                                <div class="input-control text span5">
                                    <input type="email" name="email" required placeHolder="Enter Email Address"
    <?php //$formRequest ? "value='$email'" : "" ?> tabindex="3"/> 
                                </div>
                            </h4>
                        </div>
                        <div class="row">
                            <h4>Occupation <span class="fg-red">*</span>&nbsp;&nbsp;&nbsp;
                                <div class="input-control select span4">
                                    <select name="occupation">
                                        <option class="fg-gray">Please Select...</option>
                                        <option>Student</option>
                                        <option>Civil Servant</option>
                                        <option>Entrepreneur</option>
                                        <option>Others Specify</option>
                                    </select>
                                </div>
                                <div class="input-control text span4">
                                    <input type="text" name="specify2" placeHolder="Type others Here" disabled=""/>
                                </div>
                            </h4>
                        </div>
                        <div class="row">

                            <h4>Educational Qualification <span class="fg-red">*</span>
                                <div class="input-control select span4">
                                    <select type="text" name="music" required placeHolder="Type here">
                                        <option>Bsc</option>
                                        <option>Masters</option>
                                        <option>PhD</option>
                                        <option>HND</option>
                                        <option>OND</option>
                                    </select>
                            </h4>
                        </div>
                        <div class="row">
                            <h4 >Password
                                <div class="input-control password span4">

                                    <input type="password" required name="password" placeHolder="Enter Password" tabindex="4">

                                    <button class="btn-reveal"></button>
                                </div>
                            </h4>


                        </div>
                        <h4>Confirm Password
                            <div class="input-control text span4">
                                <input type="password" required name="password2" placeHolder="Confirm Password"
    tabindex="5"/>

                            </div></h4>
                        <div class="row">
                            <h4>Age bracket (<italic>indicate your age</italic>)</h4>

                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>11 - 14<span class="check"></span>
                                </label>

                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/> 15 - 19<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>20 - 24<span class="check"></span>
                                </label>
                            </div>

                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>25 - 26<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>

                                    <input type="checkbox"/>27 - 31<span class="check"></span>
                                </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="input-control radio">
                                <label>
                                    <input type="radio"/>
                                    <span class="check"></span>
                                    <a href="terms.pdf" target=""><em>Agree to terms and condition</em></a>

                                </label>

                            </div>
                        </div>
                        <input type="submit" name="submitButton" value="continue" class="button default span5"/>
                        <a href="login.php?s=3"><button class="span4 fg-white bg-dark">Next</button></a>

                        <br/>
                        <em><a href="login.php?s=1">Already a User</a></em>


                    </form>
                </div>


<?php } elseif ($showParent) {
    ?>
                <div class="padding20">
                    <h1>Stage 2: Parent /Guardian Details</h1>
                    <hr/><br/>

                    <div class="row">
                        <h4>Parent/Guardian Names
                            <div class="input-control text span4">
                                <input type="text" name="parent" Placeholder="Enter Surname"/>
                            </div>
                            <div class="input-control text span4">
                                <input name="parent2" PlaceHolder="Enter Othername" />
                            </div>
                        </h4>

                    </div>
                    <div class="row">
                        <h4>Parent/Guardian's Nos.
                            <div class="input-control text span4">
                                <input type="number" name="pnumber" placeHolder="Contact Number"/>
                            </div>
                    </div>
                    <div class="row">
                        <h4>Do you live with your parents?
                            <div class="input-control radio margin10" data-role="input-control">
                                <label>
                                    Yes 
                                    <input type="radio" name="r1" checked/>
                                    <span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control radio margin10"data-role="input-control">
                                <label>
                                    No
                                    <input type="radio" name="r1"/>
                                    <span class="check"></span>
                                </label>
                            </div>
                        </h4>
                    </div>
                    <br/>

                    <h1>Stage 3: Social</h1>
                    <br/>
                    <hr/>
                    <div class="row">
                        <h4>Who are your favorite Foreign Gospel Artist? 
                            <div class="input-control text span3">

                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>
                            <div class="input-control text span3">
                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>


                        </h4>

                    </div>
                    <div class="row">
                        <h4>Who are your favorite Foreign Secular Artist? 
                            <div class="input-control text span3">

                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>
                            <div class="input-control text span3">
                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>


                        </h4>

                    </div>
                    <div class="row">
                        <h4>Who are your favorite Nigerian Secular Artist? 
                            <div class="input-control text span3">

                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>
                            <div class="input-control text span3">
                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>


                        </h4>

                    </div>
                    <div class="row">
                        <h4>Who are your favorite Nigerian Gospel Artist? 
                            <div class="input-control text span3">

                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>
                            <div class="input-control text span3">
                                <input type="text" name="favorite" placeHolder="Artist 1"/>
                            </div>


                        </h4>

                    </div>
                    <div class="row">
                        <h4>What do you like about songs?
                            <div class="input-control span4 select">
                                <select data-transform="input-control" >
                                    <option>Lyrics</option>
                                    <option>The Beat</option>
                                    <option>The Concept</option>
                                    <option>Others Specify</option>
                                </select></div>
                            <div class="input-control span4 text">
                                <input type="text" name="Other" placeHolder="Specify"/>
                            </div>
                        </h4>

                    </div>
                    <br/>
                    <br/>
                    <a href="login.php?s=2"><button class="large span4 shadow bg-dark fg-white">Previous</button></a>
                    <a href="login.php?s=4"><button class="large span4 shadow fg-white bg-dark">Next</button></a>

                </div>











<?php } elseif ($musicHistory) {
    ?>
                <div class="padding20">
                    <h1><i class="icon-music"></i>&nbsp;&nbsp;Music History</h1>
                    <hr/>
                    <br/>
                    <div class="row">
                        <h4>Have you been in a Choir/Singing Team/group before? 
                            <div class="input-control select span3">
                                <select data-transform="input-control"><option>Yes</option><option>No</option></select>
                            </div>
                            <div class="input-control text span3">
                                <input type="text" name="song1" disabled placeHolder="Please specify"/>
                            </div> 
                        </h4>
                    </div>
                    <div class="row">
                        <h4>Have you released any Single or produced any track of yours?
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Yes&nbsp;&nbsp;&nbsp;<span class="check"></span>
                                    <input type="checkbox"/>No&nbsp;&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4> Have you been featured by any artist or Singer? 

                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Yes <span class="check"></span>
                                    <input type="checkbox"/>No <span class="check"></span>
                                </label>
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4>Have you been part of a band? 
                            <div class="input-control checkbox" data-role="input-control">
                                <label>
                                    Yes 
                                    <input value="yes" type="checkbox" checked name="r1" /> 
                                    <span class="check"></span>
                                </label>
                            </div>
    <?php ?>
                            <div class="input-control checkbox margin10" data-role="input-control">
                                <label>
                                    No
                                    <input value="no" type="checkbox" name="r1" />  
                                    <span class="check"></span>

                                </label>
                            </div>
                        </h4>
                    </div>

                    <br/>
                    <h1>Lets Know more about you</h1>
                    <hr/>
                    <div class="row">
                        <h4>What is your favorite delicacy?
                            <div class="input-control text span5">
                                <input type="text" name="favorite" Placeholder="Whats your favourite meal"/>
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4>Where do you see yourself in 5 years?
                            <div class="input-control text span5">
                                <input type="text" name="future1" placeHolder="" />
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4>Where do you see yourself in 10 years?
                            <div class="input-control text span5">
                                <input type="text" name="future2" placeHolder="" />
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4>Where do you see yourself in 20 years?
                            <div class="input-control text span5">
                                <input type="text" name="future3" placeHolder="" />
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4>Would you like to speak with one of our agents 
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox" name="contact1" />Yes<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox"><label>
                                    <input type="checkbox" name="contact1" />No<span class="check"></span>

                                </label>
                            </div>
                        </h4>
                    </div>
                    <div class="row">
                        <h4>How did you know about J_Rock<sup>'</sup>s and why you decided to join J_Rock  
                            <div class="input-control text span5">
                                <input type="text" name="knowabout" />
                            </div>
                        </h4>
                    </div>
                    <a href="login.php?s=3"><button class="large span4 bg-gray shadow fg-white">Previous</button></a>
                    <a href="login.php?s=5"><button class="large span4 bg-gray shadow fg-white">Next</button></a>
                </div>

<?php } elseif ($formEnd) { ?>
                <div class="padding20">
                    <h1><i class="icon-rocket fg-gray " ></i>JRock Music Institute</h1>
                    <hr/>
                    <h2><i class="icon-cart"></i>&nbsp;&nbsp;Choose the courses to be registered for you below</h2>
                    <hr/>
                    <br/>
                    <div class="padding20">

                        <div class="row">
                            <h3>Course 1: Voice Development </h3>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox">Voice Training&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Voice Sharpening &nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div clas="row">
                            <h3>Course 2: Instruments</h3>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Piano Training &nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Guitar Training &nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Drums Training &nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>

                        </div>
                        <div class="row">
                            <h3>Course 3: Team Development</h3>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>Building my team&nbsp;&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>&nbsp;&nbsp;&nbsp;Joining a good team&nbsp;&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <h3>Course 4: Music Release</h3>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>SIngles&nbsp;&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>&nbsp;&nbsp;&nbsp;Music Videos&nbsp;&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                            <div class="input-control checkbox">
                                <label>
                                    <input type="checkbox"/>&nbsp;&nbsp;&nbsp;Music Album &nbsp;&nbsp;&nbsp;<span class="check"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <h4>What is your Primary need with respect to Music?
                            <div class="input-control select span5">
                                <select data-transform="input-control">
                                    <option class="fg-gray">Please select an option</option>
                                    <option>Becoming a good singer</option>
                                    <option>Becoming Famous</option>
                                    <option>Becoming Famous</option>
                                    <option>Having lots of Singles</option>
                                    <option>Having lots of Albums</option>
                                    <option>Making money via the industry</option>
                                    <option>Becoming a good performing Artist</option>
                                    <option>Becoming a good recording Artist</option>
                                    <option>Doing Kingdom business.</option>
                                    <option>Being part of a Music clique or family with a clear sense of vision & Purpose.</option>
                                    <option>Your personal Reason </option>
                                </select>
                            </div>
                            <div class="input-control text span3">
                                <input type="text" name="other3" disabled placeHolder="Please Specify"/>
                            </div>
                        </h4>

                    </div>
                    <div class="row">
                        <h3>Rehearsal Method and Time best for you</h3>
                        <div class="input-control checkbox">
                            <label>
                                <input type="checkbox"/>Thursday Night (8pm-3am) <span class="check"></span>
                            </label>
                        </div>
                        <div class="input-control checkbox">
                            <label>
                                <input type="checkbox"/>&nbsp;&nbsp;&nbsp;Monday Night  (8pm-3am)<span class="check"></span>
                            </label>
                        </div>
                        <div class="input-control checkbox">
                            <label>
                                <input type="checkbox"/>&nbsp;&nbsp;&nbsp;Saturday (7am-1pm)<span class="check"></span>
                            </label>
                        </div>
                    </div>

                    <div class="input-control checkbox">
                        <label>
                            <input type="checkbox" checked disabled/>Online Rehearsal&nbsp;&nbsp;&nbsp;<span class="check"></span>
                        </label>
                    </div>
                    <div class="input-control checkbox">
                        <label>
                            <input type="checkbox"  disabled/>&nbsp;&nbsp;&nbsp;Offline Rehearsal&nbsp;&nbsp;&nbsp;<span class="check"></span>
                        </label>
                    </div>


                    <div class="row">
                        <h3 class="fg-red">What time will you like to start?</h3>

                        <h4>I will like to enroll for the J_ROCK induction class
                            <div class="input-control select span4">
                                <select data-transform="input-control" >
                                    <option class="fg-gray">Please select...</option>
                                    <option>Today</option>
                                    <option>A week from today</option>
                                    <option>A month from today</option>
                                    <option>During the next holiday</option>
                                </select> 
                            </div>
                        </h4>
                        <h4>I will like to enroll for the J_ROCK Basic Music training course
                            <div class="input-control select span4">
                                <select data-transform="input-control" >
                                    <option class="fg-gray">Please select...</option>
                                    <option>Today</option>
                                    <option>A week from today</option>
                                    <option>A month from today</option>
                                    <option>During the next holiday</option>
                                </select> 
                            </div>
                        </h4>
                        <h4>I will like to enroll for the J_ROCK Advanced Music training course
                            <div class="input-control select span4">
                                <select data-transform="input-control" >
                                    <option class="fg-gray">Please select...</option>
                                    <option>Today</option>
                                    <option>A week from today</option>
                                    <option>A month from today</option>
                                    <option>During the next holiday</option>
                                </select> 
                            </div>
                        </h4>
                        <h4>I will like to enroll for the J_ROCK Masters Music training course
                            <div class="input-control select span4">
                                <select data-transform="input-control" >
                                    <option class="fg-gray">Please select...</option>
                                    <option>Today</option>
                                    <option>A week from today</option>
                                    <option>A month from today</option>
                                    <option>During the next holiday</option>
                                </select> 
                            </div>
                        </h4>

                    </div>
                    <br/>
                    <hr/>
                    <a href="login.php?s=4"><button class="left large shadow glyphicon span4 bg-dark fg-white">Previous</button></a>
                    <button class="left large shadow glyphicon span4 bg-dark fg-white">Completed</button>

                </div>

            </div>


    <?php
}
//}
?>


        <?php require_once './footer.php'; ?>

    </div>




</div>




</body>


</html>