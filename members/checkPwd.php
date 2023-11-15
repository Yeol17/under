<?php
include "../inc/session.php";
include "../inc/login_check.php";

$type = $_GET["type"];

$href = "";
if ($type == 1) { // 회원 정보 수정
  $href = "member_info.php";
} 
else if ($type == 0) { //탈퇴
  $href = "leave.php";
} 

?>
<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>under70</title>

  <!-- RESET -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">

  <!-- FONTS & ICONS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- CSS -->
  <link rel="stylesheet" href="../css/common.css">
  <link rel="stylesheet" href="../css/checkPassword.css">

  <script src="../js/common.js" defer></script>
  <script src="../js/checkPwd.js" defer></script>

<body>
  <div class="wrap">
    <!--HEADER-->
    <?php
    include "../inc/header.php";
    ?>
    

    <!-- <div class="shadow-effect"></div> -->
    
    <!--CONTENT-->
    <main id="main" class="content">

      <section class="modify_check">

        <h2>
          안전한 회원정보 변경을 위해
          <br>
          비밀번호를 다시 한번 입력해주세요.
        </h2>
        <form action="<?php echo $href ?>" method="post" class="form_check_pw" name="form">
          <label for="password">
            <label for="pw-input">비밀번호</label>
            <div class="pw_wrap">  
              <span class="placeholder">••••••••</span>
              <input type="password" name="pw-input" id="pw-input" class="password_input" maxlength="15">
            </div>
          </label>
        </form>
        <div class="err"></div>
        <button type="button" class="password_btn">확인</button>
        
      </section>

    </main>
      
    
    <!-- FOOTER -->
    <?php
    include "../inc/footer.php";
    ?>

  </div>


</body>

</html>