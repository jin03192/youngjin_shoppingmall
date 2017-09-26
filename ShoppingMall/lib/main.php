<?php session_start() ?>
<!DOCTYPE html>
<html lang="ko-KR">
<head>
    <meta charset="utf-8"/>
    <title>스베누</title>
    <link type="text/css" rel="stylesheet" href="../css/master.css">


</head>
<body>
  <?php require_once "loginMenu.php" ?>
  <header>
<a href="../lib/tema.php">
    <img src='../img/logo.png' width='100%' height='200px'>
    </a>
  </header>

	<div id="topMenu" >
		<ul>
			<li class="topMenuLi">
                <a class="menuLink" href="#">회사 소개</a>
                <ul class="submenu">
                    <li><a href="../lib/jinyoung_introduce.php" class="submenuLink">회사장 소개</a></li>
                </ul>
            </li>
			<li>|</li>
            <li class="topMenuLi">
                <a class="menuLink" href="#">신발</a>
                <ul class="submenu">
                    <li><a href="../syohing/girlUndow.php" class="submenuLink">운동화</a></li>
                </ul>
            </li>
			<li>|</li>
            <li class="topMenuLi">
                <a class="menuLink" href="#">커뮤니티</a>
                <ul class="submenu">
                    <li><a href="../write/writeList.php" class="submenuLink">사용후기</a></li>
                </ul>
            </li>
		</ul>
	</div>



</body>
</html>
