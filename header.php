<?php
require_once './plugin.php';

$check = getCookieValue();
//require_once './fuctions.php';
//$isUserLoggedIn = $GLOBALS["login"];
?>
<!DOCTYPE html lang="en">
<html>
    <div class="navigation-bar dark fixed-top shadow">
        <div class="navigation-bar-content container">
            <?php if (empty($check)) { ?>
                <a href="index.php" class="element"><span class="icon-home"></span> &nbsp; MUSIC</a>
                <span class="element-divider"></span>




                <a class="element1 pull-menu" href="#"></a>
                <ul class="element-menu">

                    <li><a href="index.php">Home</a></li>
                        

                </ul>
                <?php //if($isUserLoggedIn){  ?>
                <ul class="element-menu">
                    <li>
                        <a class="dropdown-toggle" href="product.php">Our Products</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="product.php?id=1">Basic Singer</a></li>
                            <li><a href="product.php?id=2">Advanced Singer</a></li>
                            <li><a href="product.php?id=3">Gurus</a></li>
                        </ul>
                    </li>
                </ul>
                <?php //}  ?>
                <ul class="element-menu">
                    <li>
                        <a class="dropdown-toggle" href="about.php">About Us</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="about.php">Mission</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">What we do</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="element-menu">
                    <li>
                        <a class="dropdown-toggle" href="#">Our Services</a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
                            <li><a href="service.php?id=1">Studio Sessions</a>
                            <li><a href="service.php?id=2">Instrumentalists</a>
                            <li><a href="service.php?id=3">Music Team</a>
                        </ul>
                    </li>
                </ul>
                <ul class="element-menu">
                    <li>
                        <a href="upcoming.php">Upcoming Events</a>
                    </li>
                </ul>

                <ul class="element-menu">
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <ul class="element-menu">
                    <li>
                        <a class="dropdown-toggle" href="student.php">Student</a>
                        <ul class="dropdown-menu" data-role="dropdown">
                            <li><a href="student.php?id=2">Premium Classes</a>
                            <li><a href="student.php?id=2">Advanced Classes</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="element-menu place-right">
                    <li class="no-phone no-tablet">
                        <ul class="element-menu">
                        <a href="login.php" title="Login or Register" class="element bg-transparent bg-hover-dark place-left ">
                            <i class="icon-user"></i>&nbsp;&nbsp;Login | Register
                        </a>
                        </ul>
                    </li>
                </ul>

                <span class="element-divider place-right"></span>

                <ul class="element-menu">

                    <li class="on-tablet on-phone no-desktop">

                        <?php if (empty($check)) { ?>
                           
                                <a href="login.php" class="bg-hover-dark">Login | Register</a>
                           
                        <?php } else { ?>
                           
                                <a href="profile.php" class="bg-hover-dark"><?= getDisplayName() ?></a>
                           
                        <?php } ?>
                    </li>
                </ul>


            <?php } else { ?>





                <div class="no-phone no-tablet">
                    <span class="element-divider place-right"></span>
                    <ul class="element-menu">
                        <li><a href="profile.php" title="Profile" class=" element bg-transparent bg-hover-dark">
                                welcome, &nbsp <?= getDisplayName() ?>&nbsp&nbsp<img src="<?= getDisplayImage() ?>" alt="" height="10px" width="20px">
                                                
                            </a> </li>
                    </ul>
                    <ul class="element-menu place-right">

                        <li><a href="logout.php" name="logout"><i class="icon-exit"></i>&nbsp;&nbsp;Logout</a></li>


                    </ul>
                    <ul class="element-menu place-right">
                        <li><a href="profile2.php"><i class="icon-cog"></i>&nbsp;&nbsp;Update Profile</a></li>
                    </ul>
                </div>
                <div class="on-phone on-tablet no-desktop">
                    <ul class="element-menu">
                        <li><a href="profile.php"><?= getDisplayName() ?></a></li>
                    </ul>

                </div>
            <?php } ?>



        </div>

    </div>
    <div class="padding20"></div>


</html>