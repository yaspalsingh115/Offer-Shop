<?php
        require './includes/common.php';

        // this page is only for logout users 
        // if session is created -> redirect user to home page 
        if(isset($_SESSION['email'])){
            header('location: home.php');
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

    <!-- sign up form  -->
    <div id="content" class="container signup">
        <div class="row" id="content-inner">
            <div class="col-md-6">
                <img class="img-responsive" src="image/signup.jpg" alt="">
            </div>
            <div class="col-md-offset-2 col-md-4">
                <h3>SIGN UP</h3>
                <form method="post" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="contact" placeholder="Contact" required pattern=".{10}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" required>
                    </div>
                            <?php
                                if(isset($_GET["error"])){
                                    echo '<div class="top-margin"> <b class="alert-danger error-padding">'. $_GET['error'].' </b>
                                    </div>
                                    <br>';
                                }
                            ?>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php 
            require './includes/footer.php';
    ?>

</body>

</html>