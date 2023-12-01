<?php
require('config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$login = "SELECT COUNT(*) FROM users WHERE email='" . $email . "' AND password='" . $password . "';";
$query = mysqli_query($conn, $login);
$result = mysqli_fetch_array($query);
if ($result[0] == 0) {
    header('location:../login.php?loginFailed');
} else {
    session_start();
    $createSessionName = "SELECT username FROM users WHERE email='" . $email . "' AND password='" . $password . "';";
    $query = mysqli_query($conn, $createSessionName);
    $sessionName = mysqli_fetch_array($query);
    $_SESSION['newSession'] = $sessionName[0];
    header('location:../index.php');
}