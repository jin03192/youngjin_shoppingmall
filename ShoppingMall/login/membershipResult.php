<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once "../lib/main.php";
      require_once "../Controller/C_Membership.php";
      $phone=$_POST['phone1'].'-'.$_POST['phone2'].'-'.$_POST['phone3'];
      $email=$_POST['email1'].'@'.$_POST['email2'];
      $birthday=$_POST['year'].'년'.$_POST['month'].'월'.$_POST['day'].'일';

        $obj = new C_Membership();
        $idCheck=$obj->MemberIDCheckCount($_POST['id']); // IDCheck하는 Controller 호출
        $nickCheck=$obj->MemberNickCheckCount($_POST['name']); // NickNameCheck하는 Controller 호출


        if($idCheck){
          echo ("
            <script>
              window.alert('해당 ID가 존재합니다.');
              history.go(-1);
            </script>
          ");
          exit;
        }else if($_POST['password'] != $_POST['repassword']){
          echo ("
            <script>
              window.alert('비밀번호가 일치하지 않습니다.');
              history.go(-1);
            </script>
          ");
          exit;
        }else if($nickCheck){
          echo ("
            <script>
              window.alert('해당 NickName이 존재합니다.');
              history.go(-1);
            </script>
          ");
          exit;

        }else{
          $result = $obj->addMember($_POST['id'], $_POST['password'],
                    $_POST['name'], $phone, $email, $birthday);
          if($result){
            echo ("
              <script>
                window.alert('회원가입에 성공했습니다. 로그인해주세요.');
              </script>
            ");
          }else{
            echo "회원가입에 있어서 오류가 발생했습니다.";
          }
        }
     ?>
  </body>
</html>
