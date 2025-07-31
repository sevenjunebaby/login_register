<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'DB');
$dbc = @mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!isset($dbc)) {
    header('Location: error.php');
  }
?>
