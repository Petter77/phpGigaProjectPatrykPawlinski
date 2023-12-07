<?php
require ('config.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$offset = $_POST['offset'];
$limit = 3;

$sql = "SELECT * FROM post LIMIT $offset, $limit";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();