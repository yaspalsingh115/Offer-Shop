<?php
require './includes/common.php';

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
</head>

<body>

    <!-- Header -->
    <?php
    require './includes/header.php';
    require './includes/check-if-added.php';
    ?>
    <!-- products content  -->

    <div class="container container-margin">
        <div class="jumbotron text-center">
            <h1>Welcome to our <span class="text-color">Offer-Shop</span> Store!</h1>
            <p>We have the best collections for you in affordable price. No need to hunt around, we have all in one place.
            </p>
            <marquee width="40%" direction="left" class="orange">
                FREE DELIVERY! + 75% OFF by Offer-Shop on your First Purchase.
            </marquee>
        </div>

        <hr>

        <!-- products categories  -->
        <div class="container text-center categories">
            <div class="row">
                <h3>Products Categories:</h3>
                <div class="col-sm-3">
                    <a href="#cameras" type="button" class="btn btn-success category">CAMERAS</a>
                </div>
                <div class="col-sm-3 pc">
                    <a href="#watches" type="button" class="btn btn-success category">WATCHES</a>
                </div>
                <div class="col-sm-3 pc">
                    <a href="#shirts" type="button" class="btn btn-success category">SHIRTS</a>
                </div>
                <div class="col-sm-3 pc">
                    <a href="#mobiles" type="button" class="btn btn-success category">MOBILES</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- CAMERAS  -->
        <section id="cameras">
            <div class="container text-center product-head">
                <h2 class="border-head">CAMERAS</h2>
            </div>
            <div class="row text-center">
                <!-- camera 1 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/camera1.png" alt="camera">
                        <div class="caption">
                            <h3>Canon PowerShot</h3>
                            <p class="green">Price: Rs. 23,590.00</p>
                            <p class="red-strike">Rs. <strike>23,795</strike> <span style="color: black;">(Save &#8377; 250)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- camera 2 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/2.jpg" alt="camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p class="green">Price: Rs. 46,489.00</p>
                            <p class="red-strike">Rs. <strike>55,780</strike> <span style="color: black;">(Save &#8377; 9,291)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- camera 3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/5.jpg" alt="camera">
                        <div class="caption">
                            <h3>Canon EOS</h3>
                            <p class="green">Price: Rs. 31,250.00</p>
                            <p class="red-strike">Rs. <strike>44,495</strike> <span style="color: black;">(31%)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- camera 4 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/4.jpg" alt="camera">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p class="green">Price: Rs. 62,490.00</p>
                            <p class="red-strike">Rs. <strike>74,990</strike> <span style="color: black;">(Save &#8377; 12,500)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <!-- camera 5 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/3.jpg" alt="camera">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p class="green">Price: Rs. 43,190.00</p>
                            <p class="red-strike">Rs. <strike>48,990</strike> <span style="color: black;">(12% off)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- camera 6 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/nikon.png" alt="camera">
                        <div class="caption">
                            <h3>Nikon D7500</h3>
                            <p class="green">Price: Rs.68,000.00</p>
                            <p class="red-strike">Rs. <strike>94,950</strike> <span style="color: black;">(Save &#8377; 26,950)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- camera 7 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/sony-cybershot.png" alt="camera">
                        <div class="caption">
                            <h3>Sony CyberShot</h3>
                            <p class="green">Price: Rs. 15,490.00</p>
                            <p class="red-strike">Rs. <strike>17,390</strike> <span style="color: black;">(10% off)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- camera 8 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/lumix.png" alt="camera">
                        <div class="caption">
                            <h3>Lumix Fz series</h3>
                            <p class="green">Price: Rs. 64,990.00</p>
                            <p class="red-strike">Rs. <strike>70,000</strike> <span style="color: black;">(Save &#8377; 5,010)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- WATCHES  -->
        <section id="watches">
            <div class="container text-center product-head">
                <h2 class="border-head">WATCHES</h2>
            </div>
            <div class="row text-center">
                <!-- watch 1  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/watch1.png" alt="watch">
                        <div class="caption">
                            <h3>Gionee STYLFIT GSW6</h3>
                            <p class="green">Price: Rs. 2,999.00</p>
                            <p class="red-strike">Rs. <strike>6,999</strike> <span style="color: black;">(Save &#8377; 4,000)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- watch 2  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/watch2.png" alt="watch">
                        <div class="caption">
                            <h3>Texton D116 TouchScreen</h3>
                            <p class="green">Price: Rs. 1,499.00</p>
                            <p class="red-strike">Rs. <strike>2,999</strike> <span style="color: black;">(Save &#8377; 1,500)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- watch 3  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/watch3.png" alt="watch">
                        <div class="caption">
                            <h3>Mabron Smart Watch</h3>
                            <p class="green">Price: Rs. 1,299.00</p>
                            <p class="red-strike">Rs. <strike>2,999</strike> <span style="color: black;">(Save &#8377; 1,700)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- watch 4  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/watch4.png" alt="watch">
                        <div class="caption">
                            <h3>Noise ColoFit Pro 3 - Jet Blue</h3>
                            <p class="green">Price: Rs. 4,499.00</p>
                            <p class="red-strike">Rs. <strike>5,999</strike> <span style="color: black;">(Save &#8377; 1,500)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <!-- watch 5  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/9.jpg" alt="watch">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p class="green">Price: Rs. 7,435.00</p>
                            <p class="red-strike">Rs. <strike>9,999</strike> <span style="color: black;">(Save &#8377; 2,564)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- watch 6  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/10.jpg" alt="watch">
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p class="green">Price: Rs. 7,996.00</p>
                            <p class="red-strike">Rs. <strike>9,995</strike> <span style="color: black;">(Save &#8377; 1,999)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(14)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- watch 7  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/11.jpg" alt="watch">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p class="green">Price: Rs. 1,890.00</p>
                            <p class="red-strike">Rs. <strike>2,999</strike> <span style="color: black;">(Save &#8377; 1,109)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(15)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- watch 8  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/12.jpg" alt="watch">
                        <div class="caption">
                            <h3>Axe Style</h3>
                            <p class="green">Price: Rs. 500.00</p>
                            <p class="red-strike">Rs. <strike>1,999</strike> <span style="color: black;">(Save &#8377; 1,499)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SHIRTS  -->
        <section id="shirts">
            <div class="container text-center product-head">
                <h2 class="border-head">SHIRTS</h2>
                <h2><span class="red-strike">Exciting Offers!</span></h1>
            </div>
            <div class="row text-center">
                <!-- Shirt 1  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt1.png" alt="shirt">
                        <div class="caption">
                            <h3>GRITSTONES</h3>
                            <h4 class="about-shirt">Men's Regular Fit Shirt</h4>
                            <p class="green">Price: Rs. 379.00</p>
                            <p class="red-strike">Rs. <strike>1,199</strike> <span style="color: black;">(Save &#8377; 820)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(17)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Shirt 2  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt2.png" alt="shirt">
                        <div class="caption">
                            <h3>Nir Fashion</h3>
                            <h4 class="about-shirt">Men's Red Chex Slim Fit</h4>
                            <p class="green">Price: Rs. 349.00</p>
                            <p class="red-strike">Rs. <strike>799</strike> <span style="color: black;">(Save &#8377; 450)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(18)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Shirt 3  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt3.png" alt="shirt">
                        <div class="caption">
                            <h3>GRITSTONES</h3>
                            <h4 class="about-shirt">Men's Regular Fit Shirt</h4>
                            <p class="green">Price: Rs. 355.00</p>
                            <p class="red-strike">Rs. <strike>999</strike> <span style="color: black;">(Save &#8377; 644)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(19)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Shirt 4  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt4.png" alt="shirt">
                        <div class="caption">
                            <h3>IndoPrimo</h3>
                            <h4 class="about-shirt">Men's Slim Fit Casual Shirt</h4>
                            <p class="green">Price: Rs. 699.00</p>
                            <p class="red-strike">Rs. <strike>1,999</strike> <span style="color: black;">(Save &#8377; 1,300)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(20)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <!-- Shirt 5  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt5.png" alt="shirt">
                        <div class="caption">
                            <h3>Dennis Lingo</h3>
                            <h4 class="about-shirt">Men's Solid Slim Fit Casual Shirt</h4>
                            <p class="green">Price: Rs. 549.00</p>
                            <p class="red-strike">Rs. <strike>1,849</strike> <span style="color: black;">(Save &#8377; 1,300)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(21)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Shirt 6  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt6.png" alt="shirt">
                        <div class="caption">
                            <h3>Tryme Fashion</h3>
                            <h4 class="about-shirt">Men's Regular Fit Casual Shirt</h4>
                            <p class="green">Price: Rs. 699.00</p>
                            <p class="red-strike">Rs. <strike>1,999</strike> <span style="color: black;">(Save &#8377; 1,300)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(22)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Shirt 7  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt7.png" alt="shirt">
                        <div class="caption">
                            <h3>feranoid</h3>
                            <h4 class="about-shirt">HANDBLOCK Printed Casual Shirt</h4>
                            <p class="green">Price: Rs. 639.00</p>
                            <p class="red-strike">Rs. <strike>1,899</strike> <span style="color: black;">(Save &#8377; 1,260)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(23)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- Shrit 8  -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="image/shirt8.png" alt="shirt">
                        <div class="caption">
                            <h3>U-TURN</h3>
                            <h4 class="about-shirt">Men's Cotton Solid Half Sleeve Shirt</h4>
                            <p class="green">Price: Rs. 418.00</p>
                            <p class="red-strike">Rs. <strike>1,399</strike> <span style="color: black;">(Save &#8377; 981)</span></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(24)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=24" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!-- MOBILES -->
    <section id="mobiles">
        <div class="container text-center">
            <h1><span class="red-strike">Exclusive Offers</span> on Mobiles!</h1>
            <p class="green">_____________________________</p>
        </div>
        <div class="container-fluid" id="content1">
            <!-- first row of mobile section -->
            <div class="row">
                <!-- 1st mobile  -->
                <div class="col-sm-4 show">
                    <div class="panel panel-default">
                        <div class="panel-heading about-offer">
                            <p class="mobile-offer">#1</p>
                            <p class="offers text-center"><span class="red-strike">Limited time offer!*</span> 20% off</p>
                        </div>
                        <div class="panel-body text-center">
                            <img src="image/mobile1.jpg" alt="Mobile" class="img-padding">
                            <p>Samsung Galaxy M12 | 6GB RAM | 128GB | Black</p>
                            <p class="green">Price: Rs. 13,499</p>
                            <p class="red-strike">Rs. <strike>18,000</strike></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(25)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- 2nd mobile  -->
                <div class="col-sm-4 show">
                    <div class="panel panel-default">
                        <div class="panel-heading about-offer">
                            <p class="mobile-offer">#2</p>
                            <p class="offers text-center"><span class="red-strike">Limited time offer!*</span> 40% off</p>
                        </div>
                        <div class="panel-body text-center">
                            <img src="image/mobile2.jpg" alt="Mobile" class="img-padding">
                            <p>Redmi K20 (Carbon Black, 6GB RAM, 128GB Storage)</p>
                            <p class="green">Price: Rs. 21,989</p>
                            <p class="red-strike">Rs. <strike>26,000</strike></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(26)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=26" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- 3rd mobile  -->
                <div class="col-sm-4 show">
                    <div class="panel panel-default">
                        <div class="panel-heading about-offer">
                            <p class="mobile-offer">#3</p>
                            <p class="offers text-center"><span class="red-strike">Limited time offer!*</span> 30% off</p>
                        </div>
                        <div class="panel-body text-center">
                            <img src="image/mobile3.jpg" alt="Mobile" class="img-padding">
                            <p>Samsung Galaxy M12 (Blue,4GB RAM, 64GB Storage)</p>
                            <p class="green">Price: Rs. 13,499</p>
                            <p class="red-strike">Rs. <strike>16,000</strike></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(27)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=27" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- second row of mobile section  -->
            <div class="row">
                <!-- 4th mobile  -->
                <div class="col-sm-4 show">
                    <div class="panel panel-default">
                        <div class="panel-heading about-offer">
                            <p class="mobile-offer">#4</p>
                            <p class="offers text-center"><span class="red-strike">Limited time offer!*</span> 25% off</p>
                        </div>
                        <div class="panel-body text-center">
                            <img src="image/mobile4.jpg" alt="Mobile" class="img-padding">
                            <p>Redmi Note 10 Pro (Glacial blue, 6GB RAM, 128GB Storage)</p>
                            <p class="green">Price: Rs. 17,999</p>
                            <p class="red-strike">Rs. <strike>25,000</strike></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(28)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- 5th mobile  -->
                <div class="col-sm-4 show">
                    <div class="panel panel-default">
                        <div class="panel-heading about-offer">
                            <p class="mobile-offer">#5</p>
                            <p class="offers text-center"><span class="red-strike">Limited time offer!*</span> 40% off</p>
                        </div>
                        <div class="panel-body text-center">
                            <img src="image/mobile5.jpg" alt="Mobile" class="img-padding">
                            <p>Realme 8 Pro (Infinite Blue, 8GB RAM, 128GB Storage)</p>
                            <p class="green">Price: Rs. 12,000</p>
                            <p class="red-strike">Rs. <strike>20,000</strike></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(29)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- 6th mobile  -->
                <div class="col-sm-4 show">
                    <div class="panel panel-default">
                        <div class="panel-heading about-offer">
                            <p class="mobile-offer">#6</p>
                            <p class="offers text-center"><span class="red-strike">Limited time offer!*</span> 20% off</p>
                        </div>
                        <div class="panel-body text-center">
                            <img src="image/mobile6.jpg" alt="Mobile" class="img-padding">
                            <p>Realme X7 (Space Silver, 6GB RAM, 128GB Storage)</p>
                            <p class="green">Price: Rs. 19,980</p>
                            <p class="red-strike">Rs. <strike>27,000</strike></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php   } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(30)) { //This is same as if(check_if_added_to_cart !=0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {  ?>
                                    <a href="cart-add.php?id=30" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container delivery">
        <h4>Delivery Charge Instructions:</h4>
        <ul class="delivery-instruction">
            <li>No delivery charge on purchasing Camera or Mobile or both(Camera & Mobile).</li>
            <li>Delivery charge will be applicable on purchasing Watch or Shirt.</li>
            <li>No delivery charge on purchasing both items Watch and Shirt.</li>
        </ul>
    </div>

    <!--Footer-->
    <?php
    require './includes/footer.php';
    ?>

</body>

</html>