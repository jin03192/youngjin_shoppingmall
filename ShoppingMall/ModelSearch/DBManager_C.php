<?php if(!isset($_SESSION))
    {
        session_start();
    }

class DBManager_C{

  private $dsn;
  private $usr;
  private $pass;

  public function __construct() {
    $this->dsn = 'mysql:host=localhost;port=3306;dbname=opentutorials';
    $this->usr = 'root';
    $this->pass = 'iammanager';

    try{
      $this->dbh=new PDO($this->dsn, $this->usr, $this->pass);
    }catch(PDOException $e){
      exit("DB 접속 불가: {$e->getMessage()}");
    }

  }


  public function __destruct(){
    $pdo=NULL;
  }
}
?>
