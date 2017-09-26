<?php require_once '../lib/main.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  <style>
    .login{
      border:1px solid black;
      margin:100px;
    }



  </style>
  </head>
  <body>
    <?php require_once '../Controller/C_Membership.php';


        $id= isset($_POST['id'])?$_POST['id']:"";
        $password=isset($_POST['password'])?$_POST['password']:"";
        // 24,25번 라인은 로그인창에 id, password값이 없으면 공백을 나타나게 하기 위함
        // $sql='SELECT * FROM members WHERE id=:id AND password=:password';
        $obj = new C_Membership();
        $idCount = $obj->MemberIDCheckCount($id); // return값 rowCount
        $idPWCount = $obj->MemberIDPWCheckCount($id, $password); // 아이디와 비밀번호를 DB와 비교 하는 함수
        $login = $obj->memberSessionPrint($id);
        if(isset($_POST['id'])){
         if($idCount){

            if($idPWCount){
              $_SESSION['nickname']=$login['name']; // 게시판 작성, 위에 닉네임 보이게
              $_SESSION['id']=$login['id']; // 구매내역을 위하여 넣음
              echo  " <script>
                location.href = '../lib/tema.php';
               </script>";
             }
            else{
              echo "잘못된 비밀번호입니다.";
            }
         }else{
           echo "아이디가 없습니다.";
         }
       }


     ?>

    <pre>
      <form action="../login/loginPage.php" method="post">


      <div class="login">
        ID                     <input type="text" name = 'id'>

        PASSWORD   <input type="password" name="password">       <input type="submit" value="로그인">

      </div>
      </form>
    </pre>
  </body>
</html>
