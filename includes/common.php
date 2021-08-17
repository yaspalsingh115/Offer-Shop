<?php
    // database connection 
    $con = mysqli_connect("localhost", "root", "", "mobile_store") or die(mysqli_error($con));

    // if no session then start the session 
    if(!isset($_SESSION)){
        session_start();
    }
?>