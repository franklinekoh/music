<?php
require_once './plugin.php';
require_once './functions.php';
$array = getEventIimages();

?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title>UPCOMING SHOWS</title>
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
            <div class="no-phone no-tablet on-desktop">
                    <div class="carousel" style="height: 400px;">
                        <div class="bg-transparent no-overflow" id="carousel">
                            <?php foreach ($array as $value) { ?>
                                <a class="slide image-container" href="<?= $value['link'] ?>"><img src="imgs/<?= $value['img_url'] ?>" class="image">
                                    <div class="overlay">
                                        <h2>
                                            <div class="fg-white"><?= $value['img_info'] ?></div>
                                        </h2>
                                    </div>
                                </a>
                                <?php
                            }
                            ?>

                            <a class="controls left"><i class="icon-arrow-left-3"></i></a>
                            <a class="controls right"><i class="icon-arrow-right-3"></i></a>
                        </div>
                    </div>
                </div>
            <div class="padding20">
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
                <h1>UPCOMING SHOWS</h1>
                <br/>
                <hr/>

                <div class="row">
                    <a href="event.php?s=1"><h3><i class="icon-music">&nbsp;&nbsp;042 CAMPUS BATTLE</i></h3></a>
                    <hr/>
                    <a href="event.php?s=2"><h3><i class="icon-music">&nbsp;&nbsp;042 RAP BATTLE</i></h3></a>
                    <hr/>
                    <a href="event.php?s=3"></i><h3><i class="icon-music">&nbsp;&nbsp;042 LYRICS BATTLE</i></h3></a>
                    <hr/>
                    <a href="#"><h3><i class="icon-music">&nbsp;&nbsp;042 X-FACTOR</i></h3></a>
                    <hr/>
                    <a href="#"><h3><i class="icon-music">&nbsp;&nbsp;042 HIP-HOP BATTLE</i></h3></a>
                    <hr/>
                    <a href="event.php?s=5"><h3><i class="icon-music">&nbsp;&nbsp;042 SOLO BATTLE</i></h3></a>
                    <hr/>
                    <a href="event.php?s=4"></i><h3><i class="icon-music">&nbsp;&nbsp;042 SUNDAY GOSPEL RIDE</i></h3></a>
                    <hr/>
                    <a href="#"><h3><i class="icon-music">&nbsp;&nbsp;042<sup>'</sup>S GOT TALENT</i></h3></a>
                </div>
            </div>

            <?php require_once './footer.php'; ?>
        </div>



    </body>


</html>
