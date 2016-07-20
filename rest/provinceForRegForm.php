<?php
error_reporting(0);
include('../config/connect.php');

$query=$conn->prepare("SELECT * FROM province");
$query->execute();
$row=mysqli_fetch_assoc($query);
print_r($row);
echo json_encode($row);
Database::disconnect();
?>
