<?php
$url = parse_url(getenv("mysql://bb990ebeb6a6a4:ee30c18e@us-cdbr-iron-east-04.cleardb.net/heroku_d45e15ad9c68982?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bb990ebeb6a6a4"];
$password = $url["ee30c18e"];
$db = substr($url["heroku_d45e15ad9c68982"], 1);



$conn = new mysqli($server, $username, $password, $db);
echo "connected";

// $query="SELECT * From heroku_079ac9234a32ec1.user";
// echo $query;
// $sql=$conn->query($query);
// echo $conn;
// $row=mysqli_fetch_all($sql,MYSQLI_ASSOC);
//
// echo $row;
// echo $sql;
// echo $conn;

?>
