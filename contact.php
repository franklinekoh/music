<?php
require './functions.php';
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title>Contact Us</title>
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
                <h1>Contact Us</h1>
                <hr/>
                <div class="grid fluid">
                    <div class="row">
                        <div class="span3">
                            <h2>J_Rock Music Institute</h2>
                            <br/><h4>
                            <small class="fg-green">Enugu State Broadcasting Service</small><br/>
                            <small>Call: <span class="fg-green">(+234) 803 90000</span></small><br/>
                            <small>Email: admin@j_rock.com</small></h4>


                        </div>
                        <div class="span1 padding20"></div>
                        <div class="span8">
                            <h2 class="fg-green">Fill the form</h2>
                            <hr/>
                            <span class="fg-red">&nbsp;&nbsp;*&nbsp;&nbsp;</span><small class="fg-red"><i class="icon-info"></i>&nbsp;&nbsp;All fields are required</small>
                            <div class="padding10"></div>
                            
                            <form action="contact.php" method="POST">
                                <div class="rtn">
                                    <div class="input-control text span4">
                                        <input type="text" autofocus required PlaceHolder="Enter Firstname"/>
                                    </div>
                                    <div class="input-control text span3">
                                        <input type="text" required PlaceHolder="Enter Surname"/>
                                    </div>

                                </div>
                                <div class="rtn">
                                    <div class="input-control text span7">
                                        <input type="email" required name="email" placeHolder="Enter Your Email"/>
                                    </div>
                                </div>
                                <br/>
                                <div class="rtn">
                                    <div class="input-control textarea span7">
                                        <textarea name="comment" placeHolder="Enter your Comment"></textarea>
                                    </div>
                                </div>
                                <div class="rtn">
                                    <div class="input-control submit span7">
                                        <input type="submit" class="span12 shadow bg-green"name="submitButton" value="Completed" height="30px" width="120px">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>


        </div>


        <?php require_once './footer.php'; ?>
    </div>



</body>


</html>
