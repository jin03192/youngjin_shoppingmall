<!DOCTYPE html> <!--사용후기 게시판-->
<html>
  <head>
    <style>
      .guestTable{
        width:80%;
        margin:10%;
        border: 1px solid black;
      }

      .guestTable th{
        background-color: #330022;
        color:white;
        border:1px solid black;
      }
      .guestTable td{
        border:1px solid black;
      }
      .table0{
        background-color: #330022;
        color:white;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once "../lib/main.php";
          require_once "../Controller/C_GuestWrite.php";
     ?>
    <form action="../write/writePage.php" method="get">

    <table class="guestTable">
      <tr class='table0'>
        <th width="2%">No</th><th width="6%">NICKNAME</th><th width="65%">
          TITLE</th><th width="8%">TIME</th><th width="1%">FILE</th>
      </tr>
      <?php
        $obj = new C_GuestWrite();
        $obj->orderByNumberDesc();
       ?>
    </table>
    <?php if(isset($_SESSION['id'])){ ?> <!-- id가 있으면 글쓰기 버튼 생성 -->
      <input type="submit" name="name" value="글쓰기">
    <?php } ?>
    </form>
  </body>
</html>
