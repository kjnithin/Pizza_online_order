<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

$_GET['name'] ? $name = $_id['name'] : $name = $_POST['name'];

$query=$pdo->prepare("DELETE FROM user WHERE name=?");
$query->execute(array($name));
$row=$query->rowCount();

echo json_encode($row);
Database::disconnect();

?>
