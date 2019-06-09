<!Doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Mavin Agency</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">   
 
  </head>
  <body>
    <!--<div class="loader">
        <div class="loader-center">
            <div class="main-container">
                <div class="dot-container">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>  
                </div>
                <div class="dot-container">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>  
                </div>
                <div class="dot-container">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>  
                </div>
            </div>
        </div>
    </div>-->
    <!-- Start Top Navbar -->
    <div class="top-nav">
      <div class="grid-container">
        <div class="top-bar">
          <div class="top-bar-left">
            <ul class="menu">
              <li><a href="javascipt:void(0);"><img src="assets/img/flag-in.png">INDIA: +91 75673 70079</a></li>
              <li><a href="javascipt:void(0);"><img src="assets/img/flag-sa.png">SA: +44 (0) 7812 147153</a></li>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li><a href="#" class="button" data-open="get-quote">Get a Quote</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Top Navbar -->
    
    <!-- Start Main Navbar -->
    <div class="main-nav">
      <div class="grid-container">
        <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
          <!-- <button class="menu-icon" type="button" data-toggle></button> -->
          <button id="toggle-menu" class="toggle-menu" data-toggle>
            <span></span>
            <span></span>
            <span></span>
          </button>
          <div class="title-bar-title">
            <a href="index.php"><img src="assets/img/mobile-logo.png" /></a>
          </div>
        </div>
    
        <div class="top-bar" id="responsive-menu">
          <div class="top-bar-left">
            <ul class="menu">
              <li class="menu-text">
                <a href="index.php">
                  <img src="assets/img/logo.png" />
                </a>
              </li>          
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li class="is-active"><a href="index.php"><span>Home</span></a></li>
              <li><a href="services.php"><span>Services</span></a></li>
              <li><a href="portfolio.php"><span>Our Work</span></a></li>
              <li><a href="team.php"><span>Our Team</span></a></li>
              <li><a href="about.php"><span>About Us</span></a></li>
              <li><a href="blogs.php"><span>Blogs</span></a></li>
              <li><a href="contact.php"><span>Contact Us</span></a></li>          
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Main Navbar -->   
<?php
  include("request_quote.php");
?>