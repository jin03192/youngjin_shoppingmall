
<!DOCTYPE html>
<html>
  <head>
    <style>
      #membership_Form{
        border:1px solid black;
        width:700px;
        height:700px;
        margin-left:15%;
        padding-top:30px;
      }

      .phone{
        width:40px;
      }

      #email1{
        width:80px;
      }
      #email2{
        width:120px;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div id="header">
        <?php require_once "../lib/main.php"; ?>
    	</div>


    회원가입

  <pre>
    <form action="../login/membershipResult.php" method="post">
      <div id = "membership_Form">
        *ID              <input type="text" name="id"><br>
        *PASSWORD        <input type="password" name="password"><br>
        *PASSWORD        <input type="password" name="repassword"><br>
        *NAME            <input type="text" name="name"><br>
        PHONE           <input type="text" name="phone1" class="phone"> - <input type="text" name="phone2" class="phone"> - <input type="text" name="phone3" class="phone"><br>
        E-mail          <input type="text" name="email1" id="email1">@ <input type="text"name="email2" id="email2">

        BIRTHDAY

        <SELECT name="year">
            <?php
              for($i = 1910; $i<=2016; $i++){
                echo "<option>{$i}</option>";
              }
             ?>
        </SELECT>년   <SELECT name="month">
            <?php
              for($i = 1; $i<=12; $i++){
                echo "<option>{$i}</option>";
              }
             ?>
        </SELECT>월   <SELECT name="day">
            <?php
              for($i = 1; $i<=31; $i++){
                echo "<option>{$i}</option>";
              }
             ?>
        </SELECT>일    <br/>


        INFORMATION


        <textarea name="information" rows="10" cols="50"></textarea>


        <input type="submit" value="가입하기">
      </div>
    </form>
  </pre>
  </body>
</html>
