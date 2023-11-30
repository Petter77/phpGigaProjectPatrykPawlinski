<?php
require('config.php');

$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['name'];
$lastName = $_POST['lastName'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];
$date = $year . '-' . $month . '-' . $day;
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$register = 'INSERT INTO users VALUES (default, "' . $email . '","' . $name . '","' . $username . '","' . $lastName . '","' . $date . '","' . $password . '")';
$query = mysqli_query($conn, $register);

header('location:login.php?registerSuccess');