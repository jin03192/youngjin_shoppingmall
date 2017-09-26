<?php
require_once "../ModelSearch/DBManager_C.php";

class addWritePage extends DBManager_C{

  private $writeTitle;
  private $writeContent;
  private $picture;
  private $time;
  private $nickName;

  public function __construct(){
    parent::__construct();
  }

  public function setWriteTitle($writeTitle){
    $this->writeTitle=$writeTitle;
  }
  public function setWriteContent($writeContent){
    $this->writeContent=$writeContent;
  }
  public function setPicture($picture){
    $this->picture=$picture;
  }
  public function setTime($time){
    $this->time=$time;
  }
  public function setNickName($nickName){
    $this->nickName=$nickName;
  }

  public function getWriteTitle(){
    return $this->writeTitle;
  }
  public function getWriteContent(){
    return $this->writeContent;
  }
  public function getPicture(){
    return $this->picture;
  }
  public function getTime(){
    return $this->time;
  }
  public function getNickName(){
    return $this->nickName;
  }

  public function addGuestWrite(){
  $sql = "INSERT INTO guest_write(title, content, picture, now_time, nickname) values (";
  $sql .= "'{$this->getWriteTitle()}', '{$this->getWriteContent()}', '{$this->getPicture()}', '{$this->getTime()}', '{$this->getNickName()}');";
  $stt=$this->dbh->prepare($sql, [
    PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
  ]);
  $stt->execute();
  }
}

 ?>
