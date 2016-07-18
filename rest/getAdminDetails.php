<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

<<<<<<< HEAD
$query= $pdo->prepare("SELECT * From user where userRole='admin' ORDER BY name");
=======
$query= $pdo->prepare("SELECT * From user where userRole='admin'");
>>>>>>> 371ae103b24de32e7eb977c7a5d30ad56d90157f
$query->execute(array($name));
$row=$query->fetchall(PDO::FETCH_ASSOC);

echo json_encode($row);
Database::disconnect();
