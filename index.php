<?php
require './functions.php';
$array = getImage();
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title>Home</title>
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
    <body class="metro">
        <?php require_once './header.php'; ?>
        <div class="on-phone on-tablet no-desktop">

            <div class="carousel" style="height: 200px">
                <div class="bg-transparent  no-overflow" >

                    <?php foreach ($array as $value) { ?>
                        <a class="slide image-container" href="<?= $value['links'] ?>"> <img src="imgs/<?= $value['img_url'] ?>" height="200%" class="image">
                            <div class="overlay">
                                <h2>
                                    <div class="fg-white"> <?= $value['img_info'] ?></div>
                                </h2>
                            </div>

                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>


        </div>

        <div class="no-phone no-tablet on-desktop">
            <div class="carousel" style="height: 400px;">
                <div class="bg-transparent no-overflow" id="carousel">
                    <?php foreach ($array as $value) { ?>
                        <a class="slide image-container" href="<?= $value['links'] ?>"><img src="imgs/<?= $value['img_url'] ?>" class="image">
                            <div class="overlay">
                                <h2>
                                    <div class="fg-white"><?= $value['img_info'] ?></div>
                                </h2>
                            </div>
                        </a>
                        <?php
                    }
                    ?>

                    <a class="controls left"><i class="icon-arrow-left-5"></i></a>
                    <a class="controls right"><i class="icon-arrow-right-5"></i></a>
                </div>
            </div>
        </div>
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
        <div class="container">
            <div class="padding20 border">

                <div class="grid fluid">
                    <div class="row">
                        <div class="span7">
                            <h1>Discover the Possibilities</h1>
                            
                                

                        </div>
                        <div class="span1"></div>
                        
                        <div class="span5 padding20">                            
                            <small class="fg-gray">What we do:</small><br/>
                            <hr/>
                            <div class="text-muted"></div>
                            <a href="service.php"><i class="icon-soundcloud"></i>&nbsp;Digital Multi-track Studio Sessions</a>
                            <br/>
                            <br/>
                            <a href="more.php"><i class="icon-soundcloud"></i>&nbsp;Record your Live Concerts</a>
                           
                        </div>
                    </div>
                </div>


            </div>
            <?php require_once './footer.php'; ?>
        </div>


    </body>


</html>
