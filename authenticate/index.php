<?php
error_reporting(0);
session_start();
include('../config/connect.php');

$_GET['loginUser'] ? $loginUser = $_id['loginUser'] : $loginUser = $_POST['loginUser'];
$_GET['loginPassword'] ? $loginPassword = $_id['loginPassword'] : $loginPassword = $_POST['loginPassword'];

$query= $pdo->prepare("SELECT * From user where username=?");
$query->execute(array($loginUser));
$row=$query->fetch(PDO::FETCH_ASSOC);

//This is to verify the password that is hashed in the registration and the login password, If both matches it do the required operation
if(password_verify($loginPassword,$row['password'])){
switch($row['userRole']){
   case "admin":
     $row['template'] = 'admin.php';
     break;
   case "user":
     $row['template'] = 'user.php';
     break;
    default:
     $row['template'] = 'unauthorisedUser.php';
     break;
   }
}
else{
  $row['template'] = 'unauthorisedUser.php';
}
session_destroy();

echo json_encode($row);
Database::disconnect();
?>
