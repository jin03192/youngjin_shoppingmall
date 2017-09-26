<!DOCTYPE html>
<html>
  <head>
    <link type="text/css" rel="stylesheet" href="../css/master.css">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

<?
  if(!isset($_SESSION['nickname']))
{
?>
<div class='loginT'>
  <ul>
    <li><a href="../login/membership.php" class="loginlink">회원가입 </a></li>
    <li><a href="../login/loginPage.php" class="loginlink">로그인</a></li>
  </ul>
</div>
<?
}


else
{
?>
<div class='loginT'>
  <ul>
    <li><a href="../login/logout.php" class="loginlink"> 로그아웃</a></li>
    <li><a href="../lib/memberHistory.php" class="loginlink"> 구매내역 </a></li>
    <li><?=$_SESSION['nickname']?>님 어서오세요.  </li>
  </ul>
</div>
<?
}
?>
 </div>
