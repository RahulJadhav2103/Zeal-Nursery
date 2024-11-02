<?php
    session_start();
    require 'check_if_added.php';
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
            <div id="bannerImage">
            <div class="container">
                <div class="jumbotron black-color-background">
                    <h1>INDOOR PLANTS!</h1>
                    <p>We have the best Indoor plants for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Aloe Vera.JPG" alt="Aloe Vera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Aloe Vera</h3>
                                    <p>Price: Rs. 180.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(25)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                 </br>
                                                <a href="cart_add.php?id=25" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Anthurium.JPG" alt="Anthurium">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Anthurium</h3>
                                    <p>Price: Rs. 320.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(26)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                 <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=26" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Bamboo.JPG" alt="Bamboo">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bamboo</h3>
                                    <p>Price: Rs. 100.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(27)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                               <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=27" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Dracaena Reflexa.JPG" alt="Dracaena Reflexa">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dracaena Reflexa</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(28)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                 <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=28" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Ferns.JPG" alt="Ferns">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ferns</h3>
                                    <p>Price: Rs. 210.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(29)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                               <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=29" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Grape ivy plants.JPG" alt="Grape ivy plants">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Grape ivy plants</h3>
                                    <p>Price: Rs. 200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(30)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=30" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Money plant.JPG" alt="Money plant">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Money plant</h3>
                                    <p>Price: Rs. 150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(31)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=31" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Monstera.JPG" alt="Monstera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Monstera</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(32)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=32" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Peace Lily.JPG" alt="Peace Lily">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Peace Lily</h3>
                                    <p>Price: Rs. 200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(33)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=33" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Snake.JPG" alt="Snake">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Snake</h3>
                                    <p>Price: Rs. 220.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(34)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                 <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=34" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/ZZ plant.JPG" alt="ZZ plant">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>ZZ plant</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(35)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                 <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=35" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                     <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Indoor Plants/Garden Croton.JPG" alt="Garden Croton">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Garden Croton</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(36)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <br>
                                                 <center>
                                                <div>
                                                    <a href="details.php" class="btn btn-danger">Details</a>
                                                </div>
                                                </center>
                                                </br>
                                                <a href="cart_add.php?id=36" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
