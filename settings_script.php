<?php
      require './includes/common.php';
      if(!isset($_SESSION['email'])){
          header ('location: index.php');
      }
      $old_pass = md5(mysqli_real_escape_string($con, $_POST['old_password']));
      $new_pass = md5(mysqli_real_escape_string($con, $_POST['new_password']));
      $retype_new_pass = md5(mysqli_real_escape_string($con, $_POST['retype_new_password']));

      $query1 = "SELECT email, password FROM users WHERE email ='" . $_SESSION['email'] . "'";
      $query1_result = mysqli_query($con, $query1) or die(mysqli_error($con));
      $row = mysqli_fetch_array($query1_result);
      $original_password = $row['password'];

      if($old_pass!=$original_password){
         header('location: settings.php?error=Wrong Old Password!');
      }
      else if(strlen($new_pass<6) or strlen($retype_new_pass)<6){
         header('location: settings.php?error=New Password should have at-least 6 characters!');
      }
      else if(strlen($new_pass)!=strlen($retype_new_pass) or $new_pass!=$retype_new_pass){
        header('location: settings.php?error=The two passwords don\'t match.');
      }
      else{
          if($old_pass==$original_password){
            $update_query = "UPDATE  users SET password = '" . $new_pass . "' WHERE email = '" . $_SESSION['email'] . "'";
            mysqli_query($con, $update_query) or die(mysqli_error($con));
              header('location: settings.php?updated=Password Updated Successfully.');
          }
      }
?>