<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

    <!-- contact details  -->
    <div class="container text-style" id="content">
        <!-- first row  -->
        <div class="row">
            <div class="col-sm-9">
                <h3 class="orange">LIVE SUPPORT</h3>
                <h5>24 hours | 7 days a week | 365 days a year Live Technical Support</h5>
                <p style="font-weight: lighter;">It is a long established fact that a reader will be distracted by the readable content of a page when
                    looking at its layout. The point of using</p>
                <p style="font-weight: lighter;">Contact Offer-Shop for any kind of suggestions or regarding any issue.</p>

                <p style="font-weight: lighter;">You can also share your experience regarding the shopping or items present in our Website.</p>
            </div>
            <div class="col-sm-3">
                <img class="img-responsive" src="image/call1.jpg" alt="contact image">
            </div>
        </div>

        <!-- second row  -->
        <div class="row">
            <div class="col-sm-8">
                <h3 class="contact orange">CONTACT US</h3>
                <form action="">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label><br>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h3 class="orange">Company Information :</h3>
                <p>500 Lorem Ipsum Dolor Sit,</p>
                <p>22-56-2-9 Sit Amet, Lorem,</p>
                <p>INDIA</p>
                <p>Phone:(00) 222 666 444</p>
                <p>Fax: (000) 000 00 00 0</p>
                <p>Email: info@offershop.com</p>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php
    require './includes/footer.php';
    ?>
</body>

</html>