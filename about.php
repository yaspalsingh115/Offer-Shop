<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- font awesome stylehseet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
    ?>

    <!-- about details  -->
    <div class="container text-style" id="content">
        <!-- <div class="row"> -->
            <p class="text-center welcome" style="font-weight: lighter;">First of all, hi! Welcome and we are happy that you’ve shown interest in our site.</p>
            <div class="who">
                <img src="image/about.jpg" alt="" class="img-responsive" style="float: left;">
                <div>
                    <h3 class="orange text-center"><u>WHO WE ARE</u></h3>
                    <p style="font-weight: lighter;">India’s Ultimate Online Shopping Site Offer-Shop's vision is to create India’s most reliable and frictionless commerce
                        ecosystem that creates life-changing experiences for buyers and sellers. In its journey till now, Offer-shop has
                        partnered with several global marquee investors and individuals such as SoftBank, BlackRock, Temasek, Foxconn,
                        Alibaba, eBay Inc., Premji Invest, Intel Capital, Bessemer Venture Partners, Mr. Ratan Tata, among others. Online
                        Shopping – A Boon The trend of online shopping is becoming a household name and so is Offer-shop. <br>Offer-shop is the
                        preferred choice of hundreds of thousands of online shoppers given its mammoth assortment of 15 million+ products,
                        quick delivery even to the remotest corners of the country, and daily deals, discounts & offers to make products
                        available at slashed down prices to our valuable customers.
                    </p>
                </div>
            </div>

            <h3 class="orange text-center">OUR STORY</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 story">
                        <p>Offer-Shop is live from August, 2021.</p>
                        <p>It is basically designed to ease the shopping with genuine items.</p>
                    </div>
                    <div class="col-sm-6 story">
                        <p>Offer-Shop advertise and presents different category products of best quality.</p>
                        <p>Our motto is to be your first choice.</p>
                    </div>
                </div>
            </div>

            <div class="container help">
                <h3 class="orange text-center">YOU CAN HELP</h3>
                <div class="row">
                    <p>Various people endeavor to ensure quizermania remains significant, revived and intriguing.</p>
                    <p>In the event that you discover a blunder, or a wrecked connection. If it’s not too much trouble inform us regarding it.</p>
                    <p>Use the link “REPORT ERROR” in contact us page.</p>
                </div>

            </div>
        <!-- </div> -->
    </div>

    <!--Footer-->
    <?php
    require './includes/footer.php';
    ?>
</body>

</html>