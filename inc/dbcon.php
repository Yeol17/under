<?php
<<<<<<< HEAD
  $dbcon = mysqli_connect("localhost", "root","", "under") or
=======
  $dbcon = mysqli_connect("localhost", "root","", "front") or
>>>>>>> d7601436c5cd5eeaee193b4c8ec111731a8d9983
    die("DB 접속 실패 시 출력될 메세지");
  mysqli_set_charset($dbcon, "utf8");
?>