<?php
        require './includes/common.php';

        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $hashed_password = md5($password);

        $select_query = "SELECT id, email, password FROM users WHERE email='$email'";
        $select_query_result = mysqli_query($con, $select_query);
        $row = mysqli_fetch_array($select_query_result);

        if(mysqli_num_rows($select_query_result)==0){
            // "$('#exampleModal').modal('show')";
            // header('location:index.php?error=User Account doesn\'t exist!');
            // '<script>console.log(alert("as")</script>';
            echo "User Account doesn't exist!";
        }
        else{
            if($row['password']!=$hashed_password){
                echo "Password entered is incorrect!";
            }
            else{
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $row['id'];

                // redirecting to home page 
                header('location: home.php');
            }
        }
?>