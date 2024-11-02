<?php
    session_start();
    require 'check_if_added.php';
   // $item_id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/PlantStore.JPG" />
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div id="bannerImage" style="padding-bottom: 576px;">
            <div class="alert alert-info" role="alert">
            <p style="color:red;font-weight:bold;font-size:20px;">Complete Detail<p>
            </div>
            <img src="img/Medicinal plants/Tulsi.JPG" alt="Tulsi">
            <div class="container">
                <div class="jumbotron black-color-background">
                    <h2>TULSI</h2>
                    <h3>Benefits of Tulsi.</h3>
                    <p><br>1. Natural Immunity Booster-Tulsi is rich in Vitamin C and zinc </br>
                      <br> 2.Reduces Cold, Cough </br>
                      <br> 3.Good for Heart Health </br>
                      <br> 4.Good for Diabetes Patients </br>
                      <br> 5.Useful in Kidney Stones & Gouty Arthritis </br>
                    </p>
                </div>
            </div>
        </div>
        </div>
    </body>