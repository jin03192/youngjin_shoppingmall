<?php
require_once "../ModelSearch/DBManager_C.php";
class syohing extends DBManager_C{


  public function __construct(){
    parent::__construct();
  }

  public function syohingListSession($number, $ea){
  $sql = "SELECT * FROM girl_syohing WHERE number = $number";
  $stt = $this->dbh->prepare($sql, [
    PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
  ]);
  $stt->execute();

  return $row=$stt->fetch(PDO::FETCH_ASSOC);
  }


  public function syohingAllSession(){
    $sql = 'SELECT * FROM girl_syohing';
    $stt = $this->dbh->prepare($sql, [
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();
    $row = $stt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
  }

  public function updateEA($updateEA, $number){
    $sql = "UPDATE girl_syohing set ea = $updateEA where number = $number";
    $stt = $this->dbh->prepare($sql, [
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();
  }
}
?>
