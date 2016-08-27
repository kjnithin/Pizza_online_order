<?php
$url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bca03c24119a3e"];
$password = $url["b1fb2043"];
$db = substr($url["heroku_079ac9234a32ec1"], 1);



$conn = new mysqli($server, $username, $password, $db);
echo "connected";

$sql=$conn->query("SELECT * From heroku_079ac9234a32ec1.user");

$row=mysqli_fetch_all($sql,MYSQLI_ASSOC);

echo $row;
echo $sql;
echo $conn;

?>
