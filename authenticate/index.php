<?php
error_reporting(0);
session_start();
include('../config/connect.php');

$_GET['loginUser'] ? $loginUser = $_id['loginUser'] : $loginUser = $_POST['loginUser'];
$_GET['loginPassword'] ? $loginPassword = $_id['loginPassword'] : $loginPassword = $_POST['loginPassword'];


// $query= mysqli_query($conn,);
$sql=$conn->query("SELECT * From heroku_079ac9234a32ec1.user where username='".$loginUser."'");

$row=mysqli_fetch_all($sql,MYSQLI_ASSOC);
echo $sql;
echo $rowS;
echo $row[0]['userRole'];
echo $row[0]['password'];



//This is to verify the password that is hashed in the registration and the login password,
// If both matches it do the required operation
if(password_verify($loginPassword,$row[0]['password'])){
switch($row[0]['userRole']){
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

?>
