
<?php
class Database
{
//    private static $dbName = 'pizza' ;
//    private static $dbHost = 'localhost' ;
//    private static $dbUsername = 'root';
//    private static $dbUserPassword = '';

    
    
    private $url = parse_url(getenv("mysql://bca03c24119a3e:b1fb2043@us-cdbr-iron-east-04.cleardb.net/heroku_079ac9234a32ec1?reconnect=true"));
  private $dbHost = $this->url["us-cdbr-iron-east-04.cleardb.net"];
  private $dbUsername = $this->url["bca03c24119a3e"];
  private $dbUserPassword = $this->url["b1fb2043"];
  private $dbName = substr($this->url["heroku_079ac9234a32ec1"], 1);
  private static $cont  = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        One connection through whole application
       if ( null == self::$cont )
       {
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
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
