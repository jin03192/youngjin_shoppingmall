<?php require_once "../ModelSearch/syohing.php";
class C_Syohing{
  private $syohingObj;
  private $memberHistoryAddObj;
  public function __construct(){
    $this->syohingObj = new syohing();
  }
  public function syohingList($number, $ea){
    $row = $this->syohingObj->syohingListSession($number, $ea);
    $nedan = $row['nedan'] * $ea;
    return array("name" => $row['name'], "picture" => $row['picture'],
                 "nedan" => $row['nedan'], "ea" => $row['ea'], "nedanAll" => $nedan);

  }
  public function syohingListPrint(){
    $row = $this->syohingObj->syohingAllSession();
    $limit = count($row);
    for($ArrCount = 0; $ArrCount < $limit; $ArrCount++){
    echo "<a href='../syohing/girlUndowDetails.php?number={$row[$ArrCount]['number']}'>";
    echo "<div id = 'girl_table'>";
    echo "<img src='../syohing/girl/img/{$row[$ArrCount]['picture']}'>"."<br/>";
    echo $row[$ArrCount]['name']."<br/>";
    echo $row[$ArrCount]['nedan']."원";
    echo "</div>";
    echo "</a>";
      }
  }

  public function syohingUpdate($allEA ,$ea ,$number){
    $updateEA = $allEA - $ea;
    $this->syohingObj->updateEA($updateEA, $number);
  }
}


 ?>
