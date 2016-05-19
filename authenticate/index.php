<?php
error_reporting(0);
session_start();
include('../config/connect.php');

$_GET['loginUser'] ? $loginUser = $_id['loginUser'] : $loginUser = $_POST['loginUser'];
$_GET['loginPassword'] ? $loginPassword = $_id['loginPassword'] : $loginPassword = $_POST['loginPassword'];

$query= "SELECT * From user where username='".$loginUser."' and password='".$loginPassword."'";
$result=mysql_query($query);
$row = mysql_fetch_array($result);

// echo $row['userRole'];
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
session_destroy();
 // Result

 echo json_encode($row);


?>
