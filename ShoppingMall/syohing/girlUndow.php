<!DOCTYPE html>
<html>
  <head>
    <style>
      #girl_table{
        border:1px solid black;
        margin:1%;
        width:15%;
        height:30%;
        float:left;
      }

      #girl_table img{
        width:100px;
        height:100px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php require_once "../lib/main.php";
    require_once "../Controller/C_Syohing.php";
    $obj = new C_Syohing();
    $obj->syohingListPrint();
     ?>

  </body>
</html>
