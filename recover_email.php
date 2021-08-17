<?php
    // including common.php 
    require './includes/common.php';
    include('app_logic.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Email Recovery</title>
    <!-- bootstrap minified css  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">

</head>

<body class="text-center bg-gray">

    <div class="container recover-style">
        <div class="col-sm-4 recover">
            <form method="post" action="recover_email.php">
                <h2 class="form-group">Reset Your Password</h2>
                <!-- form validation messages -->
		        <?php include('messages.php'); ?>
                <p class="form-group">Please enter your correct email id</p>
                <div class="form group">
                    <input type="email" class="form-control" name="email" id="email-recover" placeholder="name@example.com">
                </div>
                <button class="btn btn-primary btn-block" type="submit" name="reset-password" style="margin-top: 15px;">Send Mail</button>
            </form>
        </div>
    </div>

</body>

</html>