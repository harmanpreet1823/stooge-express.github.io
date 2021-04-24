<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Stoogle Express</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="9876467484 Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <style type="text/css">
        .img1{
              width:100%;
              height:150px;
              background: #fff;
              margin-top:15px;
              margin-left: 7px;
              opacity: 0.95;
              border-radius: 6px;
        }
        .marquee{
            animation: scroll 30s linear infinite;
            position: relative;

        }
        .marquee:hover{
            color:#f00;
            animation-play-state: paused;
        }
    </style>
    <script>

        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link href="css/nav.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <div class="inner-page" id="home">
        <!--/nav-->
        <div class="top_nav">
            <h1>
                <a class="logo" href="index.php">Stoogle Express</a>
            </h1>
            <!--<div class="top-btns">
                <div class="sign-btn">
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-lock"></i> Sign In</a>
                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                        <i class="far fa-user"></i> Register</a>
                </div>
            </div>-->
            <div class="container-btn" id="btn">
                <div class="text">Menu</div>
                <div id="bars">
                    <div class="bar first"></div>
                    <div class="bar second"></div>
                    <div class="bar third"></div>
                </div>
            </div>


            <!-- top-overlay -->
          <?php
    include("menu.php");
 ?>
            <!--//nav-->
        </div>
    
    </div>
    <!---->