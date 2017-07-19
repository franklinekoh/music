<?php

require_once './functions.php';
require_once './plugin.php';

$email = getCookieValue();


$switchRequest = filter_input(INPUT_GET, "id");
if(!empty($switchRequest)){
    if($switchRequest ==="1"){
        $currentA = true;
        $resourceA = false;
        $studyHs = false;
    }elseif($switchRequest === "2"){
    $currentA = false;
        $resourceA = true;
        $studyHs = false;
        
    }elseif($switchRequest ==="3"){
        $currentA = false;
        $resourceA = false;
        $studyHs = true;
    
    }
}else{
    
        $currentA = true;
        $resourceA = false;
        $studyHs = false;
}

if (empty($email)) {
    header("location: login.php");
}
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title><?= getDisplayName(); ?></title>
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
                <div class="fluid grid">
                    <div class="row">
                        <div class="span3 bg-white shadow">
                            <div class="padding20">
                            <img src="imgs/mem.png"><br/>
                            <div class="padding10"></div>
                            <small class="fg-red text-center">Student Level</small>
                            <h2><?= getUserType()?></h2><hr/>
                            <h4><i class="icon-user"></i>&nbsp;&nbsp;<?= getDisplayName()?></h4>
                            </div>
                        </div>
                        <div class="span9 padding10">
                            <h3>General Study Progress 70%</h3>
                            <div class="progress-bar large" data-value ="70"data-role="progress-bar" data-color="bg-green">
                            </div>
                            <div class="padding20"></div>
                            <hr/>
                            <a href="#"><button class="large bg-black fg-white bg-hover-red shadow">PAYMENT STATUS</button></a>
                            <a href="#"><button class="large bg-black fg-white bg-hover-red shadow">REPORT STATUS</button></a>
                            <a href="#"><button class="large bg-black fg-white bg-hover-red shadow">ATTITUDE QUO</button></a>
                            <a href="#"><button class="large bg-black fg-white bg-hover-red shadow">SESSION PROGRESS</button></a>
                        </div>
                    </div>
                </div>
                <hr/>
                <div class="fluid grid">
                    <div class="row">
                        <div class="span4">
                    <div class="row">
                        <div class="span3">
                            <a href="profile.php?id=1">
                            <div class="tile double">
                                <div class=" shadow padding20 <?= $currentA ? 'bg-red' : 'bg-dark' ?>">
                                    <h4 class="fg-white">CURRENT ASSIGNMENT</h4>
                                    <h5 class="fg-gray">Assignment for the week</h5>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="span1 padding10"></div>
                        

                    </div>
                
                    <div class="row">
                        <div class="span4">
                            <a href="profile.php?id=2">
                            <div class="tile double">
                                <div class=" shadow padding20 <?= $resourceA ? 'bg-red' : 'bg-dark' ?>">
                                    <h4 class="fg-white">YOUR RESOURCES</h4>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="span3">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <a href="profile.php?id=3">
                            <div class="tile double">
                                <div class="shadow padding20 <?= $studyHs ? 'bg-red' : 'bg-dark' ?>">
                                    <h4 class="fg-white">STUDY HISTORY</h4>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span9">
                            
                            
                        </div>
                        
                    </div>
                        </div>
                        <?php if($currentA){ ?>
                        <div class="span8">
                            <h1>Current Assignment</h1>
                            <hr/>
                            <br/><h1>
                                <div class="padding20"></div>
                            <i class="icon-warning"></i></h1>
                            <h3 class="place-left fg-red">No Current Assignment</h3>
                            
                        </div>
                        <?php }elseif($resourceA) {?>
                        <div class="span8">
                            <h1>Your Resources </h1>
                            <hr/>
                            <br/>
                                
                                <div class="row">
                                    <div class="span3">
                                        <img src="<?= getProduct()?>/prdt.png" height="300px" width="150px;">
                                    </div>
                                    <div class="span4">
                                        <h2>100% Voice Potential</h2>
                                        <hr/>
                                        <small><p>DVD that teaches the step by step process and exercise Singers
                                                        can take to release the full potential in their voice.</p></small> 
                                    </div>
                                </div>
                            <hr/>
                            <div class="row">
                                <div class="span3">
                                        <img src="<?= getProduct()?>/prdt.png" height="300px" width="150px;">
                                    </div>
                                    <div class="span4">
                                        <h2>Understanding Harmony</h2>
                                        <hr/>
                                        <small><p>DVD that teaches Singers, Singing groups and Choirs, the basics, dynamics, skill
                                                        and tricks that are involved to sing effective Harmony in Songs</p></small> 
                                    </div>
                            </div>
                            <a href="product.php">See more of our products</a>
                            
                        </div>
                        
                        <?php }elseif($studyHs){?>
                        <div class="span8">
                            <h1>Study History </h1>
                            <hr/>
                            <br/><h1>
                                <div class="padding20"></div>
                            <i class="icon-warning"></i></h1>
                            <h3 class="place-left fg-red">No Study History</h3>
                            
                        </div>
                        <?php }?>
                </div>
                        <div class="span2 ">
                            <img src="imgs/contact.png">
                        </div>
                </div>
            </div>

            <?php require_once './footer.php'; ?>
        </div>



    </body>


</html>
