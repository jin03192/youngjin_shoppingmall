<?php

require_once "../Controller/C_GuestWrite.php";

$obj = new C_GuestWrite();
$writeRow = $obj->GuestWriteSessionPrint($_GET['number']);

$filepath = "../write/uploads/{$writeRow['picture']}";
$filesize = filesize($filepath);
$filename = $writeRow['picture'];


header("Content-Type: application/octet-stream"); // 송신할 파일의 타입
header("Content-Disposition: attachment; filename=\"$filename\""); // 송신할 첨부파일의 이름
header('Content-Transfer-Encoding: binary'); // 전송방식을 2진법으로 인코딩
header("Content-Length: {$filesize}");  // 송신할 파일의 사이즈 지정

ob_clean(); // 버퍼의 모든 내용을 버린다.
flush(); // 출력 버퍼를 비운다.
readfile($filepath); // 해당 경로의 파일을 실행


 ?>
