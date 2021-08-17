<?php
// including common.php 
require './includes/common.php';

// index page is only for logout users
// if session is created(login user) redirect user to home page 
if (isset($_SESSION['email'])) {
    header('location: home.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offer-Shop</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
    <!-- font awesome stylehseet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Header -->
    <?php
    require './includes/header.php';
    ?>

    <!-- intro background banner_image -->

    <div id="banner_image">
        <div class="container">
            <div id="banner_content">
                <h1>We offer more than expected!</h1>
                <p>Get new offers every hour!</p>
                <a href="#products" class="btn btn-success btn-lg active">Order Today!</a>
            </div>
        </div>
    </div>

    <!-- Products list  -->
    <section id="products">
        <div class="container text-center text-padding">
            <h1 class="large-head">OUR <span class="text-color">PRODUCTS</span></h1>
        </div>
        <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/index-watch.png" alt="">
                        <div class="caption">
                            <h3><u><a href="" data-toggle="modal" data-target="#exampleModal" class="orange org">WATCHES</a></u></h3>
                            <p>Both for men and women. All brands available with exclusive offers!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/index-camera.png" alt="">
                        <div class="caption">
                            <h3><u><a href="" data-toggle="modal" data-target="#exampleModal" class="orange org">CAMERAS</a></u></h3>
                            <p>High quality cameras. Limited time to grab the offer!</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/index-shirts.png" alt="">
                        <div class="caption">
                            <h3><u><a href="" data-toggle="modal" data-target="#exampleModal" class="orange org">SHIRTS</a></u></h3>
                            <p>Choose your size and order today. Avail the available offers!</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile  -->
            <div class="row text-center" id="item_list">
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/index-redmi-mobile.png" alt="redmi mobile offer">
                        <div class="caption">
                            <h3><u><a href="" data-toggle="modal" data-target="#exampleModal" class="orange org">Redmi note</a></u></h3>
                            <p>All time Exclusive offers! + 2 Years Warranty! Free Delivery.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/index-samsung-mobile.png" alt="samsung galaxy mobile offer">
                        <div class="caption">
                            <h3><u><a href="" data-toggle="modal" data-target="#exampleModal" class="orange org">Samsung Galaxy</a></u></h3>
                            <p>Get a good discount on Samsung Galaxy. Order today for the best deals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="thumbnail">
                        <img src="image/index-realme-mobile.png" alt="realme mobile offer">
                        <div class="caption">
                            <h3><u><a href="" data-toggle="modal" data-target="#exampleModal" class="orange org">Realme</a></u></h3>
                            <p>Don't wait! Order Realme at affordable Price + Free Devlivery!</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>


    <!-- items -->
    <div class="container-fluid" id="content">
        <!-- first row of mobile section -->
        <div class="row">
            <!-- 1st mobile  -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 1
                    </div>
                    <div class="panel-body text-center">
                        <img src="image/mobile1.jpg" alt="firstMobile" class="img-padding">
                        <p>Samsung Galaxy M12 | 6GB RAM | 128GB | Black</p>
                        <p class="green">Price: Rs. 13,499</p>
                        <p><a href="" data-toggle="modal" data-target="#exampleModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <!-- 2nd mobile  -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 2
                    </div>
                    <div class="panel-body text-center">
                        <img src="image/mobile2.jpg" alt="firstMobile" class="img-padding">
                        <p>Redmi K20 (Carbon Black, 6GB RAM, 128GB Storage)</p>
                        <p class="green">Price: Rs. 21,989</p>
                        <p><a href="" data-toggle="modal" data-target="#exampleModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <!-- 3rd mobile  -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 3
                    </div>
                    <div class="panel-body text-center">
                        <img src="image/mobile3.jpg" alt="firstMobile" class="img-padding">
                        <p>Samsung Galaxy M12 (Blue,4GB RAM, 64GB Storage)</p>
                        <p class="green">Price: Rs. 13,499</p>
                        <p><a href="" data-toggle="modal" data-target="#exampleModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- second row of mobile section  -->
        <div class="row">
            <!-- 1st mobile  -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 4
                    </div>
                    <div class="panel-body text-center">
                        <img src="image/mobile4.jpg" alt="firstMobile" class="img-padding">
                        <p>Redmi Note 10 Pro (Glacial blue, 6GB RAM, 128GB Storage)</p>
                        <p class="green">Price: Rs. 17,999</p>
                        <p><a href="" data-toggle="modal" data-target="#exampleModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <!-- 2nd mobile  -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 5
                    </div>
                    <div class="panel-body text-center">
                        <img src="image/mobile5.jpg" alt="firstMobile" class="img-padding">
                        <p>Realme 8 Pro (Infinite Blue, 8GB RAM, 128GB Storage)</p>
                        <p class="green">Price: Rs. 12,000</p>
                        <p><a href="" data-toggle="modal" data-target="#exampleModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
            <!-- 3rd mobile  -->
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mobile 6
                    </div>
                    <div class="panel-body text-center">
                        <img src="image/mobile6.jpg" alt="firstMobile" class="img-padding">
                        <p>realme X7 (Space Silver, 6GB RAM, 128GB Storage)</p>
                        <p class="green">Price: Rs. 19,980</p>
                        <p><a href="" data-toggle="modal" data-target="#exampleModal" role="button" class="btn btn-primary btn-block">Order Now!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter  -->
    <section id="newsletter">
        <h1 class="text-center">Newsletter Signup</h1>
        <p class="text-center">Be the first to get Offers Update on your mail!</p>
        <form action="">
            <div class="form-group1 input-group text-center">
                <input type="email" class="form-control form-group" placeholder="abc@example.com">
                <button type="button" class="btn btn-warning btn-lg bt">SIGN UP</button>
            </div>
        </form>
    </section>

    <!-- brief intro  -->
    <div class="container text-center about-pay">
        <div class="row">
            <div class="col-sm-4 main-info">
            <i class="fas fa-money-check-alt fa-7x i1"></i>
                <h4>100% SECURE PAYMENTS</h4>
                <p class="gray">Moving your card details to a much more secured place</p>
            </div>
            <div class="col-sm-4 main-info">
            <i class="fas fa-heart fa-7x i2"></i>
                <h4>TRUSTPAY</h4>
                <p class="gray">100% Payment Protection. Easy Return Policy</p>
            </div>
            <div class="col-sm-4 main-info">
            <i class="fas fa-question-circle fa-7x i3"></i>
                <h4>HELP CENTER</h4>
                <p class="gray">Got a question? Look no further. Browse our FAQs or submit your query here.</p>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
    require './includes/footer.php';
    ?>
</body>

</html>