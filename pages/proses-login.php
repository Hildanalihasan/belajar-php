<?php

$valid_username = "username";
$valid_password = "password";


$username = $_POST['username'];
$password = $_POST['password'];


if ($username === $valid_username && $password === $valid_password) {
   
    session_start();
    $_SESSION['username'] = $username;
    header("Location: ../index.php");
    exit();
} else {
    
    header("Location: login-session.php");
    exit();
}
