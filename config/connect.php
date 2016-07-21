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


class Database
{
    // private static $dbName = 'crud_tutorial' ;
    // private static $dbHost = 'localhost' ;
    // private static $dbUsername = 'root';
    // private static $dbUserPassword = 'root';

    $url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));

    $server = $url["us-cdbr-iron-east-04.cleardb.net"];
    $username = $url["bca03c24119a3e"];
    $password = $url["b1fb2043"];
    $db = substr($url["heroku_079ac9234a32ec1"], 1);

    private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
       // One connection through whole application
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$server.";"."dbname=".self::$db, self::$username, self::$password);
        }
        catch(PDOException $e)
        {
          die($e->getMessage());
        }
       }
       return self::$cont;
    }

    public static function disconnect()
    {
        self::$cont = null;
    }
}

?>
