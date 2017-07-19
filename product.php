<?php
require './functions.php';

$switchRequest = filter_input(INPUT_GET, "id");
if (!empty($switchRequest)) {
    if ($switchRequest === '1') {
        $showBasic = true;
        $showAdvance = false;
    } elseif ($switchRequest === '2') {
        $showAdvance = true;
        $showBasic = false;
    } else {
        //$showGuru = true;
        $showAdvance = false;
        $showBasic = false;
    }
}else{
    header("location: product.php?id=1");
}
?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <?php if($showBasic){?>
        <title>Basic Singer</title>
        <?php } elseif($showAdvance){ ?>
        <title>Advance Singer</title>
        <?php }else{ ?>
         <title>Guru Singer</title> 
         <?php }?>
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
        <div class="container bg-white "  >
            <div class="padding20 shadow" >
                <?php if ($showBasic) { ?>
                
                <small class="place-right"><i class="icon-cart-2 place-right"></i>Add to cart&nbsp;&nbsp;</small>
                <h1>Basic Singers </h1>                    
                    <button class="span4 bg-yellow shadow padding20">DOWNLOAD</button>
                    <button class="span4 bg-dark fg-white shadow padding20">PLAY ONLINE</button>
                    <button class="span4 bg-dark fg-white shadow padding20">BUY</button>

                    <hr/>
                    <div class="grid fluid">
                        <div class="row padding20">
                            <div class="span1">
                            <a href="#"><img src="imgs/prdt.png" height="120px" width="60px"class="shadow">
                            <br/>
                            <h6>100% Voice Potential</h6></a>
                            </div>
                            <div class="span1"></div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6>Understanding Harmony</h6>
                            </div>
                            <div class="span1"></div>
                            
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6>Understanding Styles</h6>
                            </div>
                            <div class="span1"></div>
                           
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                             <h6>Relating Styles</h6>
                            </div>
                            <div class="span1"></div>                           
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6 style="">Harmony Exercises</h6>
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                             <h6 style="">Progression Exercises</h6>
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                             <h6 style="">Song Scores</h6>

                            </div>
                        </div>
                    </div>
                    <div class="fluid grid">
                        <div class="row padding20">
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <td><h6 style="">Melody Scores</h6></td>
                            
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6 style="">Harmony Scores</h6>
                            
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6>Full Instrumentals</h6>
                            
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6>Lyrics on this Beat</h6>
                            
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6 style="">Beat on this Lyrics</h6>
                            
                            </div>
                            <div class="span1">
                            <img src="imgs/prdt.png" height="120px" width="60px" class="shadow">
                            <br/>
                            <h6 style="">Full course Session</h6>
    
                            </div>
                            
                        </div>
                    </div>
                    

                <?php } elseif ($showAdvance) { ?>
                  <small class="place-right"><i class="icon-cart-2 place-right"></i>Add to cart&nbsp;&nbsp;</small>

                    <h1>Advance Singer</h1>
                    <hr/>
                    <button class="span4 bg-yellow shadow padding20">DOWNLOAD</button>
                    <button class="span4 bg-dark fg-white shadow padding20">PLAY ONLINE</button>
                    <button class="span4 bg-dark fg-white shadow padding20">BUY</button>

                    <hr/>
                    <table>
                        <tr>
                            <td><a href="#"><img src="imgs/prdt.png" height="120px" width="60px" ></a></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                        </tr>

                        <tr>
                            <td><h6>Harmony</h6></td>
                            <td><h6 style="margin-left:80px">Advanced Harmony Concepts</h6></td>
                            <td><h6 style="margin-left:80px">ADVANCED STYLE RELATION</h6></td>
                            <td><h6 style="margin-left:80px">ADVANCED HARMONY EXERCISES</h6></td>
                            <td><h6 style="margin-left:80px">ADVANCED PROGRESSION EXERCISES</h6></td>
                            <td><h6 style="margin-left:80px">ADVANCED SONG SCORES</h6></td>
                            <td><h6 style="margin-left:80px">FULL INSTRUMENTALS</h6></td>
                        </tr>
                        <br/>
                        <tr>
                            <td><a href="#"><img src="imgs/prdt.png" height="120px" width="60px" ></a></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                        </tr>

                        <tr>
                            <td><h6>Harmony</h6></td>
                            <td><h6 style="margin-left:80px">BEAT ON  THIS LYRICS</h6></td>
                            <td><h6 style="margin-left:80px">FULL COURSE SESSION</h6></td>
                            <td><h6 style="margin-left:80px">LYRICS ON THIS BEAT</h6></td>
                            <td><h6 style="margin-left:80px">Harmony</h6></td>
                            <td><h6 style="margin-left:80px">Harmony</h6></td>
                            <td><h6 style="margin-left:80px">Harmony</h6></td>
                        </tr>
                    </table>
                    <input name="advance" value="2" hidden=""/>






                <?php } else { ?>
                  <small class="place-right"><i class="icon-cart-2 place-right"></i>Add to cart&nbsp;&nbsp;</small>

                    <h1>Guru Singer</h1>
                    <hr/>
                    <input name="guru" value="3" hidden=""/>
                    <button class="span4 bg-yellow shadow padding20">DOWNLOAD</button>
                    <button class="span4 bg-dark fg-white shadow padding20">PLAY ONLINE</button>
                    <button class="span4 bg-dark fg-white shadow padding20">BUY</button>

                    <hr/>
                    <table>
                        <tr>
                            <td><a href="#"><img src="imgs/prdt.png" height="120px" width="60px" ></a></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                            <td><img src="imgs/prdt.png" height="120px" width="60px"style="margin-left:80px"></td>
                        </tr>

                        <tr>
                            <td><h6>GURU<sup>,</sup>S HARMONY SCORE </h6></td>
                            <td><h6 style="margin-left:80px">GURU<sup>'</sup>S EXERCISE</h6></td>
                            <td><h6 style="margin-left:80px">GURU<sup>'</sup>S INSTRUMENTAL</h6></td>
                            <td><h6 style="margin-left:80px">GURU<sup>'</sup>S CLUB</h6></td>
                            <td><h6 style="margin-left:80px">Harmony</h6></td>
                            <td><h6 style="margin-left:80px">Harmony</h6></td>
                            <td><h6 style="margin-left:80px">Harmony</h6></td>
                        </tr>
                        <br/>
                        
                    </table>




                <?php } ?>

            </div>

            <?php require_once './footer.php'; ?>

        </div>



    </body>


</html>
