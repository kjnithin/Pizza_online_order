<?php
// $url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));
//
// $server = $url["us-cdbr-iron-east-04.cleardb.net"];
// $username = $url["bca03c24119a3e"];
// $password = $url["b1fb2043"];
// $db = substr($url["heroku_079ac9234a32ec1"], 1);
//
//
// $server = 'localhost' ;
// $username = 'root';
// $password = '';
// $db = 'pizza';
//
// $conn = new mysqli($server, $username, $password, $db);


$url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bca03c24119a3e"];
$password = $url["b1fb2043"];
$db = substr($url["heroku_079ac9234a32ec1"], 1);


try
{
 $DB_con = new PDO("mysql:host=$server;dbname=$db",$username,$password);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 echo "success";
}
catch(PDOException $e)
{
 echo $e->getMessage();
}




?>
