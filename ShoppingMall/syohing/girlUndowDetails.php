<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once "../lib/main.php";
          require_once "../Controller/C_Syohing.php";
          require_once "../Controller/C_MemberHistory.php";

    $size=isset($_POST['size'])?$_POST['size']:"";
    $ea=isset($_POST['ea'])?$_POST['ea']:"";
    $number = $_GET['number'];
    $now_time=date("m/d");


    $syohingObj = new C_Syohing();
    $syohingList = $syohingObj->syohingList($number, $ea);

    ?>
    <form action="../syohing/girlUndowDetails.php?number=<?php echo $number ?>" method='post'>
    <?php

      echo "<img src='../syohing/girl/img/{$syohingList['picture']}' <br/><br/>";
      echo "제품명   : {$syohingList['name']} <br/>";
      echo "가격    : {$syohingList['nedan']} <br/>";
      echo "재고수량 : {$syohingList['ea']} <br/><br/><br/><br/>";
      echo "재고가 0인경우 물건을 구매할 수 없습니다.<br/>";
      if(isset($_POST['size']) && isset($_POST['ea'])){
        $obj = new C_MemberHistory();
        $nedan = $syohingList['nedan'] * $ea;
        $result = $obj->addMemberHistory($size, $ea, $nedan, $syohingList['picture'], $now_time);
        if($syohingList['ea'] > 0){
          $syohingObj->syohingUpdate($syohingList['ea'] ,$ea ,$number);
          echo ("
            <script>
              window.alert('구매가 완료되었습니다.');
              history.go(-1);
            </script>
          ");
        }else if($syohingList['ea'] == 0){
          echo ("
            <script>
              window.alert('재고가 없습니다..');
              history.go(-1);
            </script>
          ");
        }else{
          echo ("
            <script>
              window.alert('재고보다 적게 구매해주세요..');
              history.go(-1);
            </script>
          ");
        }
      }


    if(isset($_SESSION['id'])){
      echo "구매 : <input type='number' value=1 max={$syohingList['ea']} name='ea'> <br/><br/>";
      echo "SIZE <SELECT name='size'>
              <OPTION>215~225</OPTION>
              <OPTION>225~235</OPTION>
              <OPTION>235~245</OPTION>
              <OPTION>245~255</OPTION>
              <OPTION>255~265</OPTION>
              <OPTION>265~275</OPTION>
              <OPTION>275~285</OPTION>
            </SELECT><br><br><br><br>";



      echo "<input type='submit' value='구매'>";
    }

    ?>


    </form>
  </body>
</html>
