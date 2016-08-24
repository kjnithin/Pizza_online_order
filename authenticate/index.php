<?php
// error_reporting(0);
// session_start();
// include('config/connect.php');
$url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bca03c24119a3e"];
$password = $url["b1fb2043"];
$db = substr($url["heroku_079ac9234a32ec1"], 1);


$conn = new mysqli($server, $username, $password, $db);

$_GET['loginUser'] ? $loginUser = $_id['loginUser'] : $loginUser = $_POST['loginUser'];
$_GET['loginPassword'] ? $loginPassword = $_id['loginPassword'] : $loginPassword = $_POST['loginPassword'];
print_r("hi");

$sql=$conn->query("SELECT * From heroku_079ac9234a32ec1.user");

$row=mysqli_fetch_all($sql,MYSQLI_ASSOC);
print_r($row);
print_r ($conn);
// print_r($row[0]['userRole']);
// print_r($row[0]['password']);



//This is to verify the password that is hashed in the registration and the login password,
// If both matches it do the required operation
// if(password_verify($loginPassword,$row[0]['password'])){
// switch($row[0]['userRole']){
//    case "admin":
//      $row['template'] = 'admin.php';
//      break;
//    case "user":
//      $row['template'] = 'user.php';
//      break;
//     default:
//      $row['template'] = 'unauthorisedUser.php';
//      break;
//    }
// }
// else{
//   $row['template'] = 'unauthorisedUser.php';
// }
// session_destroy();
//
 // echo json_encode($row);

?>
