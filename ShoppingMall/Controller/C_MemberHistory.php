<?php
require_once "../ModelValueModify/addMemberHistory.php";
require_once "../ModelSearch/memberHistory.php";

class C_MemberHistory{
  private $memberHistoryObj;
  private $memeberHistoryAddObj;
  public function __construct(){
    $this->memberHistoryObj = new MemberHistory();
    $this->memberHistoryAddObj = new addMemberHistory();
  }

  public function addMemberHistory($size, $ea, $nedan, $picture, $now_time)
  {
    $this->memberHistoryAddObj->setSize($size);
    $this->memberHistoryAddObj->setEA($ea);
    $this->memberHistoryAddObj->setnedan($nedan);
    $this->memberHistoryAddObj->setPicture($picture);
    $this->memberHistoryAddObj->setNowTime($now_time);
    return $this->memberHistoryAddObj->addMemberHistory();
  }

  public function historyList($id){
    $row = $this->memberHistoryObj->historyAllSession($id);
    $limit = count($row);
    for($ArrCount = 0; $ArrCount < $limit; $ArrCount++){
       echo "<tr>";
       echo "<td>";
       echo "{$row[$ArrCount]['day']}";
       echo "</td>";
       echo "<td>";
       echo "<img src='../syohing/girl/img/{$row[$ArrCount]["picture"]}'>";
       echo "</td>";
       echo "<td>";
       echo "{$row[$ArrCount]['size']}";
       echo "</td>";
       echo "<td>";
       echo "{$row[$ArrCount]['ea']}";
       echo "</td>";
       echo "<td>";
       echo "{$row[$ArrCount]['money']}";
       echo "</td>";
       echo "</tr>";
    }
  }

}
 ?>
