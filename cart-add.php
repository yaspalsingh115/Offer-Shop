<?php
    require './includes/common.php';
    // get the item_id and add to cart
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $item_id = $_GET['id'];
        $user_id = $_SESSION['id'];
        $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        header('location: home.php');
    }
?>