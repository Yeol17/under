<?php 
include "../inc/session.php";
include "../inc/login_check.php";

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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
  <link rel="stylesheet" href="../css/leave.css">

  <script src="../js/common.js" defer></script>
  <script src="../js/leave.js" defer></script>

</head>
<body>
  <div class="wrap">
    <!--HEADER-->
    <?php
    include "../inc/header.php";
    ?>
    
    <!--CONTENT-->
    <main id="main" class="content">

      <section class="leave">

        <div class="leave-guid">

          <h2 class="tit">회원탈퇴</h2>
          
          <ul class="sec1">
            <li>
              <h3 class="sec1-tit">회원 탈퇴 유의사항</h3>
              <ul class="sec1-cont">
                <li class="sec1-li">탈퇴 시 보유하고 계신 온라인 전용쿠폰과 예치금은 즉시 자동 소멸 됩니다</li>
                <li class="sec1-li">기타 탈퇴와 관련된 모든 정책은 회원가입 시 동의하신 회원 약관 및 개인정보 제공, 활용 등의 내용에 따릅니다.</li>    
                <li class="sec1-li">회원 탈퇴 후, 재가입시에는 멤버십 고객 당 제공하는 신규가입 혜택이 제공되지 않습니다.</li>    
                <li class="sec1-li">회원 탈퇴 후, 재가입은 탈퇴 후 30일 이후에 가능합니다.</li>    
                <li class="sec1-li">SNS 간편회원 계정이 있는 경우 회원 탈퇴 시, SNS 간편회원 계정도 탈퇴 됩니다.</li>    
              </ul>
            </li>
          </ul>
        
          <ul class="sec2">
            <li>
              <h3 class="sec2-tit">회원 정보 보존 안내 사항</h3>
              <ul class="sec2-cont">
                <li>
                  <p class="mgbt10">전자상거래 이용내역(거래내역)이 있는 회원님은 전자상거래 등에서의 소비자보호에 관한 법률에 의거 교환/반품/환불 및 사후처리(A/S) 등을 위해 회원 정보가 5년간 별도 관리됩니다. 관련 법령에 그 근거가 없더라도, 회사의 중대한 손실을 예방하거나, 범죄 및 소송 등을 위해 보관해야 하는 경우, 회사 방침에 따라 회원 정보를 보관할 수 있습니다.</p>
                  <p class="mgbt10">단, 그 목적을 달성하기 위한 최소한의 기간 및 항목만 보관합니다.</p>
                </li>
                <li class="sec2-li">회원탈퇴 후, 부정방지를 위한 고객식별정보 보유 : 탈퇴 신청일로부터 1년 (탈퇴일자, 고객식별정보 값 보관)</li>
                <li class="sec2-li">이용자 정보에 관한 기록 : 부정이용 회원의 재발 방지를 위하여 1년간 보존 후, 파기합니다.</li>
                <li class="sec2-li">가입 탈퇴 후, 재가입 중지 기간 : 탈퇴 신청일로부터 30일</li>
                <li class="sec2-li">개인정보처리방침 및 서비스 이용약관에 따라 부정행위 및 서비스 이용에 반하는 행위를 한 회원의 경우, 5년간 정보를 보관합니다.</li>
              </ul>
            </li>
          </ul>

          <div class="form_wrapper">
            <form action="leave_ok.php" method="post" class="form-box">
              <input type="checkbox" class="chkbox">
              <label class="leaveAgree" for="leaveAgree"><i></i><span class="color-org">탈퇴 안내 사항</span>을 읽고 확인했으며, 내용에 동의합니다.</label>
            </form>
          </div>

          <div class="btn_wrapper">
            <button type="button" class="btn">취소</button>
            <button type="button" class="btn btn-leave">회원탈퇴</button>
          </div>
        </div>

      </section>

    </main>
        
      
    <!-- FOOTER -->
    <?php
    include "../inc/footer.php";
    ?>

  </div>
</body>
</html>