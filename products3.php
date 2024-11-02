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
                    <h1>MEDICINAL PLANTS!</h1>
                    <p>We have the best Medicinal plants for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="details.php">
                                <img src="img/Medicinal plants/Tulsi.JPG" alt="Tulsi">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Tulsi</h3>
                                    <p>Price: Rs. 180.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(37)){
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
                                                <a href="cart_add.php?id=37" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Ashwangandha.JPG" alt="Ashwangandha">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Ashwangandha</h3>
                                    <p>Price: Rs. 320.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(38)){
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
                                                <a href="cart_add.php?id=38" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Basil.JPG" alt="Basil">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Basil</h3>
                                    <p>Price: Rs. 100.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(39)){
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
                                                <a href="cart_add.php?id=39" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Bryophyllum.JPG" alt="Bryophyllum">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Bryophyllum</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(40)){
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
                                                <a href="cart_add.php?id=40" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Calendula.JPG" alt="Calendula">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Calendula</h3>
                                    <p>Price: Rs. 210.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(41)){
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
                                                <a href="cart_add.php?id=41" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Costus.JPG" alt="Costus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Costus</h3>
                                    <p>Price: Rs. 200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(42)){
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
                                                <a href="cart_add.php?id=42" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Echinacea.JPG" alt="Echinacea">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Echinacea</h3>
                                    <p>Price: Rs. 150.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(43)){
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
                                                <a href="cart_add.php?id=43" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/German Chamomile.JPG" alt="German Chamomile">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>German Chamomile</h3>
                                    <p>Price: Rs. 300.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(44)){
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
                                                <a href="cart_add.php?id=44" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Gotu Kola.JPG" alt="Gotu Kola">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Gotu Kolas</h3>
                                    <p>Price: Rs. 200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(45)){
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
                                                <a href="cart_add.php?id=45" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Lavender.JPG" alt="Lavender">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lavender</h3>
                                    <p>Price: Rs. 220.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(46)){
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
                                                <a href="cart_add.php?id=46" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Lemon Balm.JPG" alt="Lemon Balm">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lemon Balm</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(47)){
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
                                                <a href="cart_add.php?id=47" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Lemon Grass.JPG" alt="Lemon Grass">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Lemon Grass</h3>
                                    <p>Price: Rs. 100.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(48)){
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
                                                <a href="cart_add.php?id=48" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Peppermint.JPG" alt="Peppermint">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Peppermint</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(49)){
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
                                                <a href="cart_add.php?id=49" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Sage.JPG" alt="Sage">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sage</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(50)){
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
                                                <a href="cart_add.php?id=50" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Thyme.JPG" alt="Thyme">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Thyme</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(51)){
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
                                                <a href="cart_add.php?id=51" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
                                <img src="img/Medicinal plants/Aloe Vera.JPG" alt="Aloe Vera">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Aloe Vera</h3>
                                    <p>Price: Rs. 350.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(52)){
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
                                                <a href="cart_add.php?id=52" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
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
