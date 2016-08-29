<?php
$url = parse_url(getenv("mysql://bdb9b3dfe7153b:1a88294e@us-cdbr-iron-east-04.cleardb.net/heroku_74aa15878855225?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bdb9b3dfe7153b"];
$password = $url["1a88294e"];
$db = substr($url["heroku_74aa15878855225"], 1);



$conn = new mysqli($server, $username, $password, $db);
echo "connected";

$query="SELECT * From heroku_74aa15878855225.user";
echo $query;
$sql=$conn->query($query);
print_r ($conn);
$row=mysqli_fetch_all($sql,MYSQLI_ASSOC);

echo $row;
echo $sql;


?>
