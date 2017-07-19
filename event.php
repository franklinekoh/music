<?php
require './functions.php';


$switchRequest = filter_input(INPUT_GET, "s");
if (!empty($switchRequest)) {
    if ($switchRequest === "1") {
        $eventRequest = true;
        $eventRequest2 = false;
        $eventRequest3 = false;
        $eventRequest4 = false;
    } elseif ($switchRequest === "2") {
        $eventRequest = false;
        $eventRequest2 = true;
        $eventRequest3 = false;
        $eventRequest4 = false;
    } elseif ($switchRequest === "3") {
        $eventRequest = false;
        $eventRequest2 = false;
        $eventRequest3 = true;
        $eventRequest4 = false;
    } elseif($switchRequest ==="4") {
        $eventRequest4 = true;
        $eventRequest = false;
        $eventRequest2 = false;
        $eventRequest3 = false;
    } elseif($switchRequest === "5") {
        $eventRequest4 = false;
        $eventRequest5 = true;
        $eventRequest = false;
        $eventRequest2 = false;
        $eventRequest3 = false;
        
    } else {
        header("location: upcoming.php");
    }
}else{
        header("location: upcoming.php");
}
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title>UPCOMING EVENTS</title>
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

                <?php if ($eventRequest) { ?>
                    <div class="padding20">
                        <h1>042 CAMPUS BATTLE</h1>
                        <h4>Coming Soon!!!</h4>
                        <br/>
                        <hr/>
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span6 padding20">
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                </div>
                                <div class="padding20"></div>
                                <div class="span6 shadow" >
                                    <img src="imgs/img4.jpg" height="2200px" width="2200px"> 

                                </div>
                            </div>
                        </div>




                    </div>


                <?php } elseif ($eventRequest2) { ?>
                    <div class="padding20">
                        <h1>042 RAP BATTLE</h1>
                        <h4>Coming Soon!!!</h4>
                        <br/>
                        <hr/>
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span6 padding20">
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                </div>
                                <div class="padding20"></div>
                                <div class="span6 shadow" >
                                    <img src="imgs/img_2.jpg" height="2200px" width="2200px"> 

                                </div>
                            </div>
                        </div>




                    </div>




                <?php } elseif ($eventRequest3) { ?>
                    <div class="padding20">
                        <h1>042 LYRICS BATTLE</h1>
                        <h4>Coming Soon!!!</h4>
                        <br/>
                        <hr/>
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span6 padding20">
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                </div>
                                <div class="padding20"></div>
                                <div class="span6 shadow" >
                                    <img src="imgs/img_3.jpg" height="2200px" width="2200px"> 

                                </div>
                            </div>
                        </div>




                    </div>


                <?php }elseif($eventRequest4) {?>
                    <div class="padding20">
                        <h1>SUNDAY GOSPEL RIDE</h1>
                        <h4>Coming Soon!!!</h4>
                        <br/>
                        <hr/>
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span6 padding20">
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                </div>
                                <div class="padding20"></div>
                                <div class="span6 shadow" >
                                    <img src="imgs/img_4.jpg" height="2200px" width="2200px"> 

                                </div>
                            </div>
                        </div>




                    </div>
                
                <?php }elseif($eventRequest5) {?>
                <div class="padding20">
                        <h1>SOLO BATTLE</h1>
                        <h4>Coming Soon!!!</h4>
                        <br/>
                        <hr/>
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span6 padding20">
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                    A situation arises when a knowledgeable individual 
                                    understands a new concept about a particular thing of all the things he 
                                    knows he feels happy and proud that he have acquired an idea about something new not 
                                    necessarily to any other person but to himself, meaning that he just discovered some others 
                                    have been utilizing before then.
                                </div>
                                <div class="padding20"></div>
                                <div class="span6 shadow" >
                                    <img src="imgs/img_5.jpg" height="2200px" width="2200px"> 

                                </div>
                            </div>
                        </div>




                    </div>
                
                
                <?php } ?>
            </div>

            <?php require_once './footer.php'; ?>
        </div>



    </body>


</html>
