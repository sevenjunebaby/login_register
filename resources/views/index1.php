<?php
require_once "config.php";

if (isset($_POST["send"])) {
    $username = mysqli_real_escape_string($dbc, $_POST['username']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);

    $query = "SELECT * FROM user WHERE username = ?";
    $stmt = $dbc->prepare($query);
    if ($stmt) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                header("Location: welcom.php");
                exit();
            } else {
                header('Location: login.php');
            }
            
        } 
        else {
            
            header('Location: login.php');
        }
        
    } else {
        header("Location: error.php");
    }

 


}
$dbc->close();
?>
