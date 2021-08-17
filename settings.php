<?php
    require './includes/common.php';
    if(!isset($_SESSION['email'])){
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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
    ?>

    <!-- Form to change password  -->
    <div id="content1" class="set">
        <div class="container content-mid content">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 f">
                    <h1>Change Password</h1>
                    <form method="POST" action="settings_script.php" class="top-margin">
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="old_password"
                                placeholder="Old Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="new_password"
                                placeholder="New Password" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="retype_new_password"
                                placeholder="Re-type New Password" required>
                        </div>
                        <?php
                                if(isset($_GET["error"])){
                                    echo '<div class="top-margin"> <b class="alert-danger error-padding">'. $_GET['error'].' </b>
                                    </div>
                                    <br>';
                                }
                                if(isset($_GET["updated"])){
                                    echo '<div class="top-margin"> <b class="alert-success error-padding">'. $_GET['updated'].' </b>
                                    </div>
                                    <br>';
                                }
                        ?>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <?php 
            require './includes/footer.php';
    ?>

</body>

</html>