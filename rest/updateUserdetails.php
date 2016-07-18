<?php
error_reporting(0);
include('../config/connect.php');
$pdo = Database::connect();

$_GET['editname'] ? $editname = $_id['editname'] : $editname = $_POST['editname'];
$_GET['editusername'] ? $editusername = $_id['editusername'] : $editusername = $_POST['editusername'];
$_GET['editemail'] ? $editemail= $_id['editemail'] : $editemail = $_POST['editemail'];
$_GET['editapt'] ? $editapt = $_id['editapt'] : $editapt = $_POST['editapt'];
$_GET['editstreet'] ? $editstreet = $_id['editstreet'] : $editstreet = $_POST['editstreet'];
$_GET['editcity'] ? $editcity = $_id['editcity'] : $editcity = $_POST['editcity'];
$_GET['editprovince'] ? $editprovince = $_id['editprovince'] : $editprovince = $_POST['editprovince'];
$_GET['editpostal'] ? $editpostal= $_id['editpostal'] : $editpostal = $_POST['editpostal'];
$_GET['edittel'] ? $edittel = $_id['edittel'] : $edittel = $_POST['edittel'];


$query=$pdo->prepare("UPDATE user SET name='$editname',email='$editemail',apt='$editapt',street='$editstreet',city='$editcity',province='$editprovince',postal='$editpostal',phone='$edittel' WHERE username='$editusername'");
$query->execute();


$row=$query->fetchall(PDO::FETCH_ASSOC);
print_r($row);

echo json_encode($row);
Database::disconnect();
?>
