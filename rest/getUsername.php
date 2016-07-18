<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

$_GET['name'] ? $name = $_id['name'] : $name = $_POST['name'];

$query= $pdo->prepare("SELECT * From user where username=?");
$query->execute(array($name));
$row=$query->fetchall(PDO::FETCH_ASSOC);

echo json_encode($row);
Database::disconnect();
?>
