<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KitKart</title>

    <!-- linking css -->
    <link rel="stylesheet" href="style/styles.css">

    <!-- linking custom animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>

<body>
    <div class="main">

        <!-- HEADER -->
        <div class="header">
            <a href="index.php">
                <div class="leftLogo logo">
                    <h1 class="animate__animated animate__backInRight">K</h1>
                </div>
            </a>
            <div class="title">
                <a href="index.php"><h1>KitKart</h1></a>
                <p>Khana Kha Ke Kharid Lo</p>
                <?php
                
                    if(isset($_SESSION['uname'])){
                        echo("<div class = 'headerWelcomeMsg'>");
                        $username=$_SESSION['uname'];
                        $usertype=$_SESSION['utype'];
                        echo("Welcome ".$usertype." ".$username." ");
                        echo("<a href='logout.php'>LogOut</a>");
                        echo("</div>");

                        echo("<div class = 'cartIcon'>");
                        include("dbconnect.php");
                        $rsCart  = mysqli_query($con,"select * from cart_info where username = '$username' ");
                        $totalCartItem = mysqli_num_rows($rsCart);
                        echo("<a href='displayCart.php'><img src='images/cartIcon.png'></a>");
                        echo(" (".$totalCartItem.")") ;
                        echo("</div>");
                    }

                ?>
            </div><!-- end of title -->
            <div class="rightLogo logo"><img src="images/cartIcon.png" alt="rightLogo" style="background-color:green;"></div>
        </div><!-- end of header -->
        