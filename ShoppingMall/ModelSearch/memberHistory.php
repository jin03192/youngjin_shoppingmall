<?php
require_once "../ModelSearch/DBManager_C.php";

class memberHistory extends DBManager_C{
  public function __construct(){
    parent::__construct();
  }


  public function historyAllSession($id){
    $sql = "SELECT * FROM member_history WHERE id = '$id' order by day";
    $stt = $this->dbh->prepare($sql,[
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();

    $row = $stt->fetchAll(PDO::FETCH_ASSOC);
    return $row;
  }

  
}
 ?>
