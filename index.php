<?php
session_start();
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
           <div id="bannerImage" style="padding-bottom: 53px;">
           <div class="container">
                   <center>
                   <div id="bannerContent">
                   <h1>ZEAL ECOSYSTEM</h1>
                   <h1>"A friend of Environment"</h1>
                       <h>**A beautiful plant is like having a friend around the house**</h>
                   </div>
                   </center>
               </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-3">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/Flowering Plants.JPG" alt="Flowering Plants">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Flowering Plants</p>
                                        <a href="products.php" class="btn btn-danger">Details</a>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="products1.php">
                               <img src="img/Fruit Plants.JPG" alt="Fruit Plants">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Fruit Plants</p>
                                    <a href="products1.php" class="btn btn-danger">Details</a>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="products3.php">
                               <img src="img/Medicinal plants.JPG" alt="Medicinal plants">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Medicinal plants</p>
                                    <a href="products3.php" class="btn btn-danger">Details</a>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-3">
                       <div class="thumbnail">
                           <a href="products2.php">
                               <img src="img/Indoor Plants.jpg" alt="Indoor Plants">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Indoor Plants</p>
                                   <a href="products2.php" class="btn btn-danger">Details</a>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
           </div>
        </div>
    </body>
</html>