<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원 가입 완료</title>
</head>
<body>
  <p>회원가입 완료!</p>
  <a href="/under/">홈으로</a>
  <a href="/under/login/login.php">로그인하기</a>
<?php
// 뒤로가기 방지
echo "
  <script>
  history.pushState(null, null, '/under/members/reg_ok.php'); 
  window.onpopstate = function(event) { 
    history.go(1); 
  };
  </script>
  ";
  ?>
</body>
</html>