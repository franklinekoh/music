<?php
require_once'./functions.php';
require_once './plugin.php';

$check = getCookieValue();

?>

<!DOCTYPE html>
<html>
    
    <div class="navigation-bar dark center-block">
        <?php if(empty($check)){?>
        <li class="navigation-bar-content container no-phone no-tablet">
            
            <div class="center fg-white">
                <h4 style=" padding-left: 20em;" font-size="20px" ><a href="#" class="fg-white">  &COPY; &nbsp;Copyright 2015 | J_ROCK Music Institute </a></h4>
            </div>
        </li>
        <li class="no-desktop on-tablet on-phone">
            <div class="fg-white padding10">
                <h4><a href="" class="fg-white">  &COPY; &nbsp;Copyright 2015 | J_ROCK Music Institute </a></h4>

            </div>
        </li>
       <?php }else{?>
        <div class="bg-dark navigation-bar-content">
            <span class="element-divider place-right"></span>
        <ul class="element-menu ">
            <li><a href="index.php"><i class="icon-home"></i> &nbsp; Home</a></li>
        </ul>
            <ul class="element-menu">
                <li><a href="about.php">About Us</a></li>
            </ul>
            <ul class="element-menu">
                <li><a href="product.php">Products</a></li>
            </ul>
            <ul class="element-menu">
                <li><a href="service.php?id=1">Our Services</a></li>
            </ul>
            <ul class="element-menu">
                <li><a href="upcoming.php">Upcoming Events</a></li>
            </ul>
            <ul class="element-menu">
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
            <ul class="element-menu place-right">
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <span class="element-divider place-right"></span>
        
        
        <?php } ?>
        </div>
    </div>
</html>
