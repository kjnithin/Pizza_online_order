<?php
$url = parse_url(getenv("mysql://bdb9b3dfe7153b:1a88294e@us-cdbr-iron-east-04.cleardb.net/heroku_74aa15878855225?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["cdb9b3dfe7153a"];
$password = $url["1a88294f"];
$db = substr($url["heroku_74aa15878855225"], 1);


try{
$conn = new mysqli($server,$username,$passwod,$db);
echo "connected";
var_dump($conn->client_info);
var_dump($conn->client_version);
var_dump($conn->info);
}
catch(Exception $e){
  echo $e;
}
// $query="SELECT * From heroku_74aa15878855225.user";
//
// $sql=$conn->query($query);
// var_dump($conn);

// var_dump($conn->client_info);
// var_dump($conn->client_version);
// var_dump($conn->info);
// $row=mysqli_fetch_all($sql,MYSQLI_ASSOC);
//
// echo $row;
// echo $sql;
//

?>
