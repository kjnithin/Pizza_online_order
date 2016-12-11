<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

$_GET['regname'] ? $regname = $_id['regname'] : $regname = $_POST['regname'];
$_GET['regusername'] ? $regusername = $_id['regusername'] : $regusername = $_POST['regusername'];
$_GET['regemail'] ? $regemail= $_id['regemail'] : $regemail = $_POST['regemail'];
$_GET['regpassword'] ? $regpassword = $_id['regpassword'] : $regpassword = $_POST['regpassword'];
$_GET['regapt'] ? $regapt = $_id['regapt'] : $regapt = $_POST['regapt'];
$_GET['regstreet'] ? $regstreet = $_id['regstreet'] : $regstreet = $_POST['regstreet'];
$_GET['regcity'] ? $regcity = $_id['regcity'] : $regcity = $_POST['regcity'];
$_GET['regprovince'] ? $regprovince = $_id['regprovince'] : $regprovince = $_POST['regprovince'];
$_GET['regpostal'] ? $regpostal= $_id['regpostal'] : $regpostal = $_POST['regpostal'];
$_GET['regtel'] ? $regtel = $_id['regtel'] : $regtel = $_POST['regtel'];

//This is to hash the password for security
$hash=password_hash($regpassword,PASSWORD_DEFAULT);
$query=$pdo->prepare("INSERT INTO user(name,username,email,password,apt,street,city,province,postal,phone,userRole)
              VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$query->execute(array($regname,$regusername,$regemail,$hash,$regapt,$regstreet,$regcity,$regprovince,$regpostal,$regtel,'user'));
$row=$query->fetch(PDO::FETCH_ASSOC);

echo json_encode($row);
Database::disconnect();
?>
