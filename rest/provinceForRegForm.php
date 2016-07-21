 <?php
error_reporting(0);
include('../config/connect.php');

$query=$conn->query("SELECT * FROM province");
// $query->execute();
$row=mysqli_fetch_array($query,MYSQLI_ASSOC);


echo json_encode($row);
?>
