
<?php
$url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));

$server = $url["us-cdbr-iron-east-04.cleardb.net"];
$username = $url["bca03c24119a3e"];
$password = $url["b1fb2043"];
$db = substr($url["heroku_079ac9234a32ec1"], 1);


try {
    
$conn = new mysqli($server, $username, $password, $db);
echo "coneection success";
}
 
// show error
catch(Exception $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>




