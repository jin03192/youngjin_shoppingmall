<?php
require_once "../ModelSearch/DBManager_C.php";

class members extends DBManager_C{
  public function __construct(){
    parent::__construct();
  }

  public function id_Check_Count($id){
    $sql="SELECT * FROM members WHERE id='$id'";
    $stt=$this->dbh->prepare($sql,[
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();
    $idCount = $stt->rowCount();

    return $idCount;

  }

  public function nickname_Check_Count($nickname){
    $sql="SELECT * FROM members WHERE name='$nickname'";
    $stt=$this->dbh->prepare($sql,[
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);

    $stt->execute();
    $idCount = $stt->rowCount();

    return $idCount;

  }

  public function IDPW_Check_Count($id, $password){
    $sql="SELECT * FROM members WHERE id='$id' AND password='$password'";
    $stt=$this->dbh->prepare($sql,[
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();

    $IDPWCount=$stt->rowCount();
    return $IDPWCount;
  }

  public function memberSession($id){
    $sql="SELECT * FROM members WHERE id='$id'";
    $stt=$this->dbh->prepare($sql,[
      PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
    ]);
    $stt->execute();
    return $stt->fetch(PDO::FETCH_ASSOC);
  }
}
 ?>
