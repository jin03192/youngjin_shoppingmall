<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once "../lib/main.php";
          require_once "../Controller/C_MemberHistory.php";

          $obj = new C_MemberHistory();

          ?>
           <table>
             <tr>
               <th>날짜</th>
               <th>사진</th>
               <th>신발사이즈</th>
               <th>수량</th>
               <th>합계</th>
             </tr>
             <?php
            $obj->historyList($_SESSION['id']);

            ?>
           </table>
  </body>
</html>
