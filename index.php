<?php
require 'db.php';
session_start();
?>
<head>
    <title>Virtual Shop</title>
    <?php include 'css/css.html'; ?>
    <?php include 'navbar.html' ?>
</head>
<body>
<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src= "images/1.jpg" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/2.jpg" style="width:100%;">
            </div>

            <div class="item">
                <img src="images/3.jpg" style="width:100%;">
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>