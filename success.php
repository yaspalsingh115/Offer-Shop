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
    <title>Success</title>
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
            // check all items to confirmed
            $user_id = $_SESSION["id"];
            $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            
            while($row = mysqli_fetch_array($result)){
                $item_id = $row["item_id"];
                $query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
                
                $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            }
    ?>

    <!-- success message -->
    <div id="content1">
        <div class="container">
                <div class="alert alert-success text-center">
                    <h3>Thank you for ordering from <span class="orange">Offer-Shop</span>. The order shall be delivered to you shortly.</h3>
                    <hr>
                    <h3>Order some more electronics items <a href="home.php">here</a></h3>
                </div>
        </div>
    </div>

    <!--Footer-->
    <?php 
            require './includes/footer.php';
    ?>

</body>

</html>