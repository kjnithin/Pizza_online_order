<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

$query=$pdo->prepare("SELECT * FROM province");
$query->execute();
$row=$query->fetchall(PDO::FETCH_ASSOC);

echo json_encode($row);
Database::disconnect();
?>
