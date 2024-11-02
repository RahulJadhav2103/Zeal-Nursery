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
                    <h1>FLOWER PLANTS!</h1>
                    <p>We have the best Flower Plants for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php?id=1">
                                <img src="img/Flowering plants/Rose.jpg" alt="Rose">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Rose</h3>
                                    <p>Price: Rs.200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
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
                                                <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/West Indian Jasmine.jpg" alt="West Indian Jasmine">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>West Indian Jasmine</h3>
                                    <p>Price: Rs. 240.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
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
                                                <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Zinnia.JPG" alt="Zinnia">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Zinnia</h3>
                                    <p>Price: Rs. 250.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
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
                                                <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Cosmos.JPG" alt="Cosmos">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cosmos</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
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
                                                <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Flowering plants/Dahila.JPG" alt="Dahila">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Dahila</h3>
                                    <p>Price: Rs. 230.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
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
                                                <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Frangipani.JPG" alt="Frangipani">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Frangipani</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
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
                                                <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Hibiscus.JPG" alt="Hibiscus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Hibiscus</h3>
                                    <p>Price: Rs. 250.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
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
                                                <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Lavender.JPG" alt="Lavender">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lavender</h3>
                                    <p>Price: Rs. 180.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
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
                                                <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Flowering plants/Marigold.JPG" alt="Marigold">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Marigold</h3>
                                    <p>Price: Rs. 150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
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
                                                <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Mogra.JPG" alt="Mogra">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Mogra</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
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
                                                <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Geranium.JPG" alt="Geranium">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Geranium</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
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
                                                <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Flowering plants/Chrysanthemum.JPG" alt="Chrysanthemum">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Chrysanthemum</h3>
                                    <p>Price: Rs. 250.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
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
                                                <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
        </div>
    </body>
</html>
