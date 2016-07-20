<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();
 print_r($pdo);
$query=$pdo->prepare("SELECT * FROM province");
$query->execute();
$row=$query->fetchall(PDO::FETCH_ASSOC);
print_r($row);
echo json_encode($row);
Database::disconnect();
?>
