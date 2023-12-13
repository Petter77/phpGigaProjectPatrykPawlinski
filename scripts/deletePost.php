<?php
require ('config.php');
$postID = $_GET['remove'];
$remove = "UPDATE post SET removed = 1 WHERE id = $postID";
$query = mysqli_query($conn,$remove);
header('location:../index.php');