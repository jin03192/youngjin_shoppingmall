<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .writeTable{
      border:1px solid black;
      margin:30px;
      padding:10px;
    }
    .write_title{
      width:650px;
    }
    </style>
  </head>
  <body>
    <?php
      require_once '../lib/main.php';
      require_once '../Controller/C_GuestWrite.php';


      $write_title= isset($_POST['write_title'])?$_POST['write_title']:"";
      $write_content=isset($_POST['write_content'])?$_POST['write_content']:"";
      $picture=isset($_FILES['picture']['name'])?$_FILES['picture']['name']:"";
      $now_time=date("m/d g:i");
      $nickname=$_SESSION['nickname'];


      if($write_title != NULL && $write_content != NULL){
        $obj = new C_GuestWrite();
        $obj->addGuestWrite($write_title, $write_content,
        $picture, $now_time, $nickname);
      }

      $uploaddir = 'uploads/';
      if($picture){
        $uploadfile = $uploaddir . basename($_FILES['picture']['name']);


        if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
          echo "<script>
            location.href = '../write/writeList.php';
           </script>";
        } else {
          echo "파일 형식이 올바르지 않거나 오류가 있습니다.";
        }
      }
      else if($write_title != NULL && $write_content != NULL){
        echo "<script>
          location.href = '../write/writeList.php';
         </script>";

      }


    ?>
    <form enctype="multipart/form-data" action="../write/writePage.php" method="post" >
      <div class="writeTable">
        제목 <input type="text" name="write_title" class="write_title"><br/><br/>
        내용 <textarea name="write_content" rows="20" cols="60"></textarea>
        <br>
        파일첨부 <input type="file" name="picture" value="">
        <br/><br/><br/>
        <input type="submit" name="name" value="글쓰기">
      </div>
    </form>
  </body>
</html>
