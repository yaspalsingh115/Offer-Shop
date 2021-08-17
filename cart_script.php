<?php
     require './includes/common.php';
     if(!isset($_SESSION['email'])){
         header ('location: index.php');
     }
     $address = $_POST('addAddress');
     $query1 = "SELECT address FROM users WHERE email ='" . $_SESSION['email'] . "'";
     $query1_result = mysqli_query($con, $query1) or die(mysqli_error($con));
     $row = mysqli_fetch_array($query1_result);
     $add_address = $row['address'];

?>