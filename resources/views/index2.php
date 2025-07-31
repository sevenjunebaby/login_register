<?php

require_once "config.php";

if (isset($_POST["change"])) {
    $email = $_POST['email'];
    $newPassword =$_POST['newpassword'];
    $confirmPassword = $_POST['newpassword1'];
  
    if (empty($email) || empty($newPassword) || empty($confirmPassword)) {
      echo "<script>alert('Please fill in all fields.');</script>";
    } else if ($newPassword !== $confirmPassword) {
      echo "<script>alert('New passwords do not match.');</script>";
    }
  
    else {
    $newPasswordhached= password_hash( $newPassword, PASSWORD_DEFAULT);
    $confirmPasswordhached= password_hash($confirmPassword, PASSWORD_DEFAULT);
      $sql = "UPDATE user SET password = ? WHERE email = ?";
      $stmt = $dbc->prepare($sql);
      $stmt->bind_param('ss', $newPasswordhached, $email);
          
      if ($stmt->execute()) {
        header('Location: login.php');
      }
      else{
        header('Location: error.php');
      }
    }
  
   
    

}
$dbc->close();
?>  
