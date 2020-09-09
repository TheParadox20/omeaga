<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mechanic | Find Mechanic</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css-fashi/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css-fashi/style.css" type="text/css">

    <script src="mapBox.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body onload="getLocation()" >
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
<?php require 'header.php'?>
<!-- Header End -->

<!-- Map Section Begin -->
<br><br><br>
<div class="container">
    <div class="inner-header">
        <div class="row">

            <div class="col-lg-9 col-md-7">
                <div class="advanced-search">

                    <form action="#" class="input-group">
                        <input type="text" placeholder="Locate your mechanic">
                        <button type="button"><i class="ti-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="map spad">
    <div class="container">
        <div class="map-inner">
            <div id="map" style='width: 800px; height: 600px;' ></div>
        </div>
    </div>
</div>
<!-- Map Section Begin -->

<!-- Contact Section Begin -->
<br><br><br>
<!-- Contact Section End -->

<!-- Footer Section Begin -->
<?php
require 'footer.php'
?>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js-fashi/jquery-3.3.1.min.js"></script>
<script src="js-fashi/bootstrap.min.js"></script>
<script src="js-fashi/jquery-ui.min.js"></script>
<script src="js-fashi/jquery.countdown.min.js"></script>
<script src="js-fashi/jquery.nice-select.min.js"></script>
<script src="js-fashi/jquery.zoom.min.js"></script>
<script src="js-fashi/jquery.dd.min.js"></script>
<script src="js-fashi/jquery.slicknav.js"></script>
<script src="js-fashi/owl.carousel.min.js"></script>
<script src="js-fashi/main.js"></script>
</body>

</html>