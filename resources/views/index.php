<?php
require_once "config.php";

if (isset($_POST["send"])) {
    $name = $_POST["name"];
    $password =password_hash($_POST["password"], PASSWORD_BCRYPT);
    $email = $_POST["email"];
    $phone = $_POST["phonenumber"];
if(empty($name) || empty($password) || empty($email) || empty($phone) ){
    echo "<script>alert('Please fill in all fields');</script>";
}
    else{
    $stmt = $dbc->prepare("SELECT * FROM user WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $name, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('Username or Email has already been taken');</script>";
    } else {
        $stmt = $dbc->prepare("INSERT INTO user (username, password, email, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $password, $email, $phone);
        if ($stmt->execute()) {
            header('Location: login.php');
        } else {
            header('Location: error.php');
            
          
        }
    }
}
}
$dbc->close();
?>

