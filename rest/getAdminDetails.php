<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();


$query= $pdo->prepare("SELECT * From user where userRole='admin' ORDER BY name");

$query= $pdo->prepare("SELECT * From user where userRole='admin'");

$query->execute(array($name));
$row=$query->fetchall(PDO::FETCH_ASSOC);

echo json_encode($row);
Database::disconnect();
