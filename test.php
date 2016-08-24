<?php
$dsn = "pgsql:"
    . "host=ec2-54-225-79-232.compute-1.amazonaws.com;"
    . "dbname=d4cqvb648s8rkv;"
    . "user=jfluvyxgboikwn;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=F4WeyC19SW6W8Kau2fHGl0KuSO";

    try
    {
    	$db = new PDO($dsn);
    }
    catch(PDOException $pe)
    {
    	die('Connection error, because: ' .$pe->getMessage());
    };




?>
