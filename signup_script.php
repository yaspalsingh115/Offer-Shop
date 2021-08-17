<?php
     require './includes/common.php';
     // get details
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $contact = $_POST["contact"];
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);

    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email, $email)){
        echo "Incorrect email";
    }
    else{
        $query1 = "SELECT id FROM users WHERE email = '$email'";

        // check if already registered user
        $result = mysqli_query($con, $query1);

        if(mysqli_num_rows($result) > 0){
            // email already exists
            header('location:signup.php?error=Email id already exists. Try another!');
        }
        else{
            if(strlen($password)<6){
                header('location: signup.php?error=Password should have at-least 6 characters!');
            }
            else if(strlen($contact)!=10){
                header('location: signup.php?error=Invalid Contact number!');
            }
            else{
                // hash password
                $hashed_password = md5($password);

                $query2 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$hashed_password', '$contact', '$city', '$address')";

                // perform query operation
                $result = mysqli_query($con, $query2);
                $_SESSION["email"] = $email;
                // $_SESSION["address"] = $address;
                $_SESSION["id"] = mysqli_insert_id($con);

                // redirect to products page
                header("location: home.php");
            }
        }
    }
?>