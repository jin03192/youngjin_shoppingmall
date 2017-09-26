<?php // 게시물을 DB에서 출력하기 위한 클래스
require_once "../ModelSearch/DBManager_C.php";
class guestWrite extends DBManager_C {

  public function __construct(){
    parent::__construct();
  }


  public function guestWriteSession($number){
    $sql="SELECT * FROM guest_write WHERE number='$number'";
    $stt=$this->dbh->prepare($sql,[
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();
    return $stt->fetch(PDO::FETCH_ASSOC);
  }


  public function guestWriteAllSession(){
    $stt=$this->dbh->prepare("SELECT * FROM guest_write order by number desc");
    $stt->execute();
    $row = $stt->fetchAll(PDO::FETCH_ASSOC);
    return $row;

  }
}
 ?>
