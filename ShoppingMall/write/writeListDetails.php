<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #write_view{
        border:1px solid black;
        margin:50px;
      }
    </style>
  </head>
  <body>
    <?php
    require_once "../lib/main.php";
    require_once "../Controller/C_GuestWrite.php";

    $obj = new C_GuestWrite();
    $result = $obj->GuestWriteSessionPrint($_GET['number']);



    ?>

    <table id="write_view">

      <tr>
        <td width='800px'>제목 : <?php echo "{$result['title']}<div style='text-align:right'>{$result['now_time']}</div>" ?><hr></td>

      </tr>
      <tr><?php if($result['picture'] != NULL){ ?>
        <td height='100px'>DOWNLOAD : <a href="../write/Download.php?number=<?php echo $result['number']; ?>"><img src="../write/uploads/disc.png" width='20px' height='20px'></a><hr></td>
          <?php } ?>
      </tr>
      <tr>
        <td style='vertical-align:top' height='400px'> <?php echo $result['content']; ?></td>
      </tr>
      </table>
      <div>
        <a href="../write/writeList.php"><input type="button" name="name" value="뒤로가기"></a>
      </div>
  </body>
</html>
