<?php
  require_once "../ModelSearch/guestWrite.php";
  require_once "../ModelValueModify/addWritePage.php";

class C_GuestWrite{
  private $guestWriteAddObj;
  private $guestWriteObj;

  public function __construct(){
    $this->guestWriteAddObj = new addWritePage();
    $this->guestWriteObj = new guestWrite();
  }

  public function addGuestWrite($write_title, $write_content, $picture, $now_time, $nickname){
    $this->guestWriteAddObj->setWriteTitle($write_title);
    $this->guestWriteAddObj->setWriteContent($write_content);
    $this->guestWriteAddObj->setPicture($picture);
    $this->guestWriteAddObj->setTime($now_time);
    $this->guestWriteAddObj->setNickName($nickname);
    $this->guestWriteAddObj->addGuestWrite();
  }

  public function orderByNumberDesc(){
    $row = $this->guestWriteObj->guestWriteAllSession();
    $limit = count($row);
    for($ArrCount = 0; $ArrCount < $limit; $ArrCount++){
      echo "<tr>";
      echo "<td width='2%'>";
      echo $row[$ArrCount]['number'];
      echo "</td>";

      echo "<td width='8%'>";
      echo $row[$ArrCount]['nickname'];
      echo "</td>";

      echo "<td width='65%'>";
      echo "<a href='writeListDetails.php?number={$row[$ArrCount]['number']}'>";
      echo $row[$ArrCount]['title'];
      echo "</a>";
      echo "</td>";


      echo "<td width='8%'>";
      echo $row[$ArrCount]['now_time'];
      echo "</td>";

      echo "<td>";
      if($row[$ArrCount]['picture']){
      echo "<img src='../write/uploads/disc.png' width='20px' height='20px'>";
      }
      echo "</td>";
      echo "</tr>";
    }
  }

    public function GuestWriteSessionPrint($number){
      $row = $this->guestWriteObj->guestWriteSession($number);
      return array("title" => $row['title'],"content" => $row['content'],
      "picture" => $row['picture'], "number" => $row['number'],
      "now_time" => $row['now_time']);
    }


}
 ?>
