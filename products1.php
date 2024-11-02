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
                    <h1>FRUIT PLANTS!</h1>
                    <p>We have the best Fruit Plants for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Fruits Plants/Pineapple.JPG" alt="Pineapple">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Pineapple</h3>
                                    <p>Price: Rs. 180.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(13)){
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
                                                <a href="cart_add.php?id=13" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Chiku.JPG" alt="Chiku">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Chiku</h3>
                                    <p>Price: Rs. 120.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(14)){
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
                                                <a href="cart_add.php?id=14" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Dragon.JPG" alt="Dragon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dragon</h3>
                                    <p>Price: Rs. 150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(15)){
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
                                                <a href="cart_add.php?id=15" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Fig.JPG" alt="Fig">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Fig</h3>
                                    <p>Price: Rs. 120.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(16)){
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
                                                <a href="cart_add.php?id=16" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Guava.JPG" alt="Guava">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Guava</h3>
                                    <p>Price: Rs. 150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(17)){
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
                                                <a href="cart_add.php?id=17" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Jamun.JPG" alt="Jamun">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Jamun</h3>
                                    <p>Price: Rs. 150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(18)){
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
                                                <a href="cart_add.php?id=18" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Lemon.JPG" alt="Lemon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lemon</h3>
                                    <p>Price: Rs. 100.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(19)){
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
                                                <a href="cart_add.php?id=19" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Mango.JPG" alt="Mango">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mango</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(20)){
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
                                                <a href="cart_add.php?id=20" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Orange.JPG" alt="Orange">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Orange</h3>
                                    <p>Price: Rs. 250.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(21)){
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
                                                <a href="cart_add.php?id=21" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Papaya.JPG" alt="Papaya">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Papaya</h3>
                                    <p>Price: Rs. 120.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(22)){
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
                                                <a href="cart_add.php?id=22" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Banana.JPG" alt="Banana">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Banana</h3>
                                    <p>Price: Rs. 320.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(23)){
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
                                                <a href="cart_add.php?id=23" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Fruits Plants/Amla.JPG" alt="Amla">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Amla</h3>
                                    <p>Price: Rs. 120.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(24)){
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
                                                <a href="cart_add.php?id=24" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
