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


        <title>JROCK Music Institute</title>
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
                <h1>JROCK Music Institute</h1>
                <div class="grid fluid">
                    <div class="row">
                        <div class="span2">

                        </div>
                        <div class="span10">
                            <div class="span10">

                                <div class="listview-outlook">
                                    <a href="#" class="list">
                                        <div class="list-content">
                                            <div class="row">
                                                <h2 class="fg-green">100% Voice Potential</h2>

                                                <div class="span3">
                                                    <img src="<?= getProduct() ?>/img.jpg">
                                                </div>
                                                <div class="span4">
                                                    <p>DVD that teaches the step by step process and exercise Singers
                                                        can take to release the full potential in their voice.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <hr/>
                                <div class="listview-outlook">
                                    <a href="#" class="list">
                                        <div class="list-content">
                                            <div class="row">

                                                <h2 class="fg-green">Understanding Harmony</h2>

                                                <div class="span3">
                                                    <img src="<?= getProduct() ?>/img.jpg">
                                                </div>
                                                <div class="span6">
                                                    <p>DVD that teaches Singers, Singing groups and Choirs, the basics, dynamics, skill
                                                        and tricks that are involved to sing effective Harmony in Songs</p>

                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php require_once './footer.php'; ?>
        </div>



    </body>


</html>
