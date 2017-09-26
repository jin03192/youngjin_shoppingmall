<?php
require_once "../ModelSearch/DBManager_C.php";

class addMemberHistory extends DBManager_C {

  public function __construct(){
    parent::__construct();
  }
  private $size;
  private $ea;
  private $nedan;
  private $picture;
  private $now_time;

  function setSize($size){
      $this->size=$size;
  }
  function setEA($ea){
      $this->ea=$ea;
  }
  function setNedan($nedan){
      $this->nedan=$nedan;
  }
  function setPicture($picture){
      $this->picture=$picture;
  }
  function setNowTime($now_time){
      $this->now_time=$now_time;
  }

  function getSize(){
      return $this->size;
  }
  function getEA(){
      return $this->ea;
  }
  function getNedan(){
      return $this->nedan;
  }
  function getPicture(){
      return $this->picture;
  }
  function getNowTime(){
      return $this->now_time;
  }
  public function addMemberHistory(){
  $sql = "INSERT INTO member_history VALUES ('$_SESSION[id]','{$this->getPicture()}',
  {$this->getNedan()},{$this->getEA()},'{$this->getNowTime()}','{$this->getSize()}')";
  $stt = $this->dbh->prepare($sql, [
    PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL
  ]);
  $stt->execute();
  $rowCountResult=$stt->rowCount();

  return $rowCountResult;
  }
}
 ?>
