<?php
require_once './functions.php';
require_once './plugin.php';

$switchRequest = filter_input(INPUT_GET, "id");
if(!empty($switchRequest)){
    if($switchRequest ==="1"){
    $mPage = true;
    $mPage2 = false;
    $mPage3 = FALSE;
    }elseif($switchRequest ==="2"){
    $mPage = false;
    $mPage2 = true;
    $mPage3 = false;  
    }elseif($switchRequest === "3"){
        $mPage3 = TRUE;
        $mPage = FALSE;
        $mPage2 = FALSE;
    }
}else{
    $mPage = TRUE;
    $mPage2 = FALSE;
    $mPage3 = FALSE;
}

?>
<!DOCTYPE html lang="en">
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="Bill">
        <meta name="content" content="Metro UI">


        <title>Our Services</title>
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
        <span class="element-divider"></span>
        <div class="container bg-white no-phone no-tablet">
            <div class="padding20">
                <?php if($mPage) { ?>

                <h1>Studio Sessions</h1>
                <?php }elseif($mPage2){ ?>
                 <h1>Instrumentalist</h1>
                 <small class="fg-gray padding10"><i class="icon-info-2"></i>&nbsp;&nbsp;You can hire an Instrumentalist among the listed options below chose according to the category</small><br/>

                 <?php }elseif($mPage3){ ?>
                 <h1>Music Team</h1>

                 <?php } ?>

                <hr/>
                <div class="grid fluid">
                    <div class="row">
                        <div class="span3">
                            <a href="service.php?id=1"><button class="span8 <?= $mPage? 'bg-dark fg-white':''?> shadow large">Studio Session</button></a>
                            <br/>
                            <div class="padding20"></div>
                            <a href="service.php?id=2"><button class="span8 <?= $mPage2? 'bg-dark fg-white':''?> shadow large">Instrumentalist</button></a>
                            <br/>
                            <div class="padding20"></div>
                            <a href="service.php?id=3"><button class="span8 <?= $mPage3 ? 'bg-dark fg-white':''?> shadow large">Music Team</button></a>
                        </div>
                       

                        <div class="span8">
                             <?php if($mPage){ ?>
                            <small class="fg-gray"><i class="icon-arrow-down"></i>&nbsp;&nbsp;Please choose among the listed plan to proceed for payment</small>
                            <hr/>
                            
                            <div class="table">
                                <table class="table hovered">
                                    <thead class="bg-white">
                                        
                                <tr>
                                    <th colspan="3" class="text-left striped"></th>
                                    <th  colspan="3"></th>

                                </tr> 
                                        <tr>
                                            <th class="text-left">PLAN</th>
                                            <th class="text-left">SESSION</th>
                                            <th class="text-left">INDOOR RECORD</th>
                                            <th class="text-left">LIVE COVERAGE</th>
                                            <th class="text-left">MIX AND MASTER</th>
                                            <th class="text-left"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success"><td>Silver</td><td> 6 hours</td><td>NGN&nbsp;50, 000</td><td>NGN&nbsp;85,000</td><td>NGN&nbsp;50,000</td><td><button class="small bg-transparent">Book Session</button></td></tr>
                                        <tr class="selected"><td colspan="6"></td></tr>
                                        <tr class="warning"><td>Gold</td><td>6 hours</td><td>NGN&nbsp;80,000</td><td>NGN&nbsp;95,000</td><td>NGN&nbsp;70,000</td><td><button class="small bg-transparent">Book Session</button></td></</tr>
                                        <tr class="selected"><td colspan="6"></td></tr>
                                        <tr class="error"><td>Diamond</td><td>9 hours</td><td>NGN&nbsp;100, 000</td><td>NGN&nbsp; 150,000</td><td>NGN&nbsp; 100,000</td><td><button class="small bg-transparent">Book Session</button></td></</tr>
                                    </tbody>

                                </table>
                                <?php }elseif($mPage2){ ?>
                                <small class="fg-gray"><i class="icon-arrow-down"></i>&nbsp;&nbsp;Please choose among the listed plan to proceed for payment</small>
                            <hr/>
                            
                            <div class="table">
                                <table class="table hovered">
                                    <thead class="bg-white">
                                        
                                <tr>
                                    <th colspan="3" class="text-left striped"></th>
                                    <th  colspan="3"></th>

                                </tr> 
                                        <tr>
                                            <th class="text-left">PLAN</th>
                                            <th class="text-left">VALUE</th>
                                            <th class="text-left" title="Sound Engineer">SOUND_ENG</th>
                                            <th class="text-left">BASSIST</th>
                                            <th class="text-left">DRUMMER</th>
                                            <th class="text-left">LEAD</th>
                                            <th class="text-left">KEYBOARD</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success"><td>Silver</td><td> 1000/hr</td><td><img src="<?= getProduct()?>/eng.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/bass.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/img.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/img.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/key.jpg" height="120px" width="90px"></td></tr>
                                        <tr class="selected"><td colspan="7"></td></tr>
                                        <tr class="warning"><td>Gold</td><td>3000/hr</td><td><img src="<?= getProduct()?>/eng.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/bass.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/img.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/img.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/key.jpg" height="120px" width="90px"></td></</tr>
                                        <tr class="selected"><td colspan="7"></td></tr>
                                        <tr class="error"><td>Diamond</td><td>5000/hr</td><td><img src="<?= getProduct()?>/eng.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/bass.jpg" height="120px" width="90px"></td><td><img src="<?= getProduct()?>/img.jpg" height="120px" width="90px"></td><td><img src='<?= getProduct()?>/img.jpg' height='120px' width='90px'></td><td><img src="<?= getProduct()?>/key.jpg" height="120px" width="90px"></td></</tr>
                                    </tbody>

                                </table>
                                
                                <?php }elseif($mPage3){ ?>
                                <small class="fg-gray"><i class="icon-arrow-down"></i>&nbsp;&nbsp;Please choose among the listed plan to proceed for payment</small>
                            <hr/>
                            
                            <div class="table">
                                <table class="table hovered">
                                    <thead class="bg-white">
                                        
                                <tr>
                                    <th colspan="3" class="text-left striped"></th>
                                    <th  colspan="3"></th>

                                </tr> 
                                        <tr>
                                            <th class="text-left">PLAN</th>
                                            <th class="text-left">VALUE</th>
                                            <th class="text-left">PRAISE TEAM</th>
                                            <th class="text-left">WORSHIP TEAM</th>
                                            <th class="text-left">NAIJA HIP-HOP</th>
                                            <th class="text-left">G BLUES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="warning"><td>Silver</td><td>NGN&nbsp;100, 000</td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></tr>
                                        <tr class="selected"><td colspan="6"></td></tr>
                                        <tr class="success"><td>Gold</td><td>NGN&nbsp;250,000</td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></</tr>
                                        <tr class="selected"><td colspan="6"></td></tr>
                                        <tr class="info"><td>Diamond</td><td>NGN&nbsp;500, 000</td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></td><td><button class="small bg-transparent">Book Session</button></td></</tr>
                                    </tbody>

                                </table>
                                <?php } ?>
                                <small><i class="icon-phone"></i>&nbsp;&nbsp;for more information contact us on:</small>
                                <div class="grid fluid">
                                    <div class="row">
                                        <div class="span1">

                                        </div>
                                        <div class="span11">
                                            <hr/>
                                            <i class="icon-facebook"></i>&nbsp;&nbsp;Facebook &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                            <i class="icon-skype"></i>&nbsp;&nbsp;Skype &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                            <i class="icon-google"></i>&nbsp;&nbsp;Gmail &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                            <i class="icon-instagram"></i>&nbsp;&nbsp;Instagram &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                            <i class="icon-phone-2"></i>&nbsp;&nbsp;Mobile &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                            <i class="icon-address-book"></i>&nbsp;&nbsp;Address &nbsp;&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>









            </div>

            <?php require_once './footer.php'; ?>
        </div>
        <div class="on-phone on-tablet no-desktop">
            <span class="element-divider"></span>
            <div class="container bg-white ">
                <div class="padding20">
                    <h1>Studio Session</h1>
                    <hr/>
                    <br/>
                    <div class="table">
                        <table class="table hovered">
                            <thead class="bg-white">

                                <tr>

                                    <th class="text-left">PLAN</th>
                                    <th class="text-left">RECORD SESSION</th>
                                    <th class="text-left">INDOOR RECORD</th>
                                    <th class="text-left">LIVE COVERAGE</th>
                                    <th class="text-left">MIX AND MASTER</th>
                                    <th class="text-left"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success"><td>Silver</td><td> 6 hours</td><td>NGN&nbsp;50, 000</td><td>NGN&nbsp;85,000</td><td>NGN&nbsp;50,000</td><td><button class="small bg-transparent">Book Session</button></td></tr>
                                <tr class="selected"><td colspan="6"></td></tr>
                                <tr class="warning"><td>Gold</td><td>6 hours</td><td>NGN&nbsp;80,000</td><td>NGN&nbsp;95,000</td><td>NGN&nbsp;70,000</td><td><button class="small bg-transparent">Book Session</button></td></</tr>
                                <tr class="selected"><td colspan="6"></td></tr>
                                <tr class="error"><td>Diamond</td><td>9 hours</td><td>NGN&nbsp;100, 000</td><td>NGN&nbsp; 150,000</td><td>NGN&nbsp; 100,000</td><td><button class="small bg-transparent">Book Session</button></td></</tr>
                            </tbody>

                        </table>
                        <small><i class="icon-phone"></i>&nbsp;&nbsp;for more information :</small>
                        <div class="grid fluid">
                            <div class="row">
                                <div class="span1">

                                </div>
                                <div class="span11">
                                    <hr/>
                                    <i class="icon-facebook"></i>&nbsp;&nbsp;Facebook &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                    <i class="icon-skype"></i>&nbsp;&nbsp;Skype &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                    <i class="icon-google"></i>&nbsp;&nbsp;Gmail &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                    <i class="icon-instagram"></i>&nbsp;&nbsp;Instagram &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                    <i class="icon-phone-2"></i>&nbsp;&nbsp;Mobile &nbsp;&nbsp;<span class="fg-red">|</span>&nbsp;&nbsp;
                                    <i class="icon-address-book"></i>&nbsp;&nbsp;Address &nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php require './footer.php'; ?>

            </div>

        </div> 




    </body>


</html>
