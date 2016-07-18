<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

$_GET['name'] ? $name= $_id['name'] : $name = $_POST['name'];
$_GET['username'] ? $username = $_id['username'] : $username = $_POST['username'];
$_GET['email'] ? $email= $_id['email'] : $email = $_POST['email'];
$_GET['password'] ? $password = $_id['password'] : $password = $_POST['password'];
$_GET['apt'] ? $apt = $_id['apt'] : $apt = $_POST['apt'];
$_GET['street'] ? $street = $_id['street'] : $street = $_POST['street'];
$_GET['city'] ? $city = $_id['city'] : $city = $_POST['city'];
$_GET['province'] ? $province = $_id['province'] : $province = $_POST['province'];
$_GET['postal'] ? $postal= $_id['postal'] : $postal = $_POST['postal'];
$_GET['tel'] ? $tel = $_id['tel'] : $tel = $_POST['tel'];

//This is to hash the password for security
$hash=password_hash($password, PASSWORD_DEFAULT);
$query=$pdo->prepare("INSERT INTO user(name,username,email,password,apt,street,city,province,postal,phone,userRole)
              VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$query->execute(array($name,$username,$email,$hash,$apt,$street,$city,$province,$postal,$tel,'admin'));
$row=$query->fetch(PDO::FETCH_ASSOC);
print_r($row);

echo json_encode($row);
Database::disconnect();
