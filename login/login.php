<?php
include "../inc/session.php";
$target = isset($_GET["target"]) ? $_GET["target"] : ""; 

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
  <link rel="stylesheet" href="/under/css/common.css">
  <link rel="stylesheet" href="/under/css/login.css">

  <script src="/under/js/common.js" defer></script>
  <script src="/under/js/jquery-3.6.1.min.js"></script>
  
<body>
  <!--HEADER-->
  
<div class="wrap">
  <?php include "../inc/header.php";?>
  <!--CONTENT-->

  <main id="main" class="content">

    <section class="login">

      <h2>로그인</h2>

      <ul class="login-type flex_box">
        <li class="active"><a href="javascript:void(0)" class="mem_div">가입 회원</a></li>
        <li><a href="javascript:void(0)" class="mem_div">비회원</a></li>
      </ul>

      <div class="login-form">

        <div class="login-member">
          <form action="/under/login/login_ok.php" method="post" class="member-form flex_box">

            <div class="login_input_wrap mgbt20">
              <input type="text" name="id" required placeholder="아이디" titlle="아이디 입력" class="login_input">
            </div>
            <div class="login_input_wrap">
              <input type="password" name="pwd" required placeholder="비밀번호" titlle="비밀번호 입력" class="login_input">
            </div>
            <div class="err_msg">
              <p>아이디 또는 비밀번호가 일치하지 않습니다.</p>
            </div>
            <div class="login_button">
              <button type="submit">로그인</button>
            </div>
            <div class="util flex_box">
              <div class="check_box">
                <input type="checkbox" name="auto-login" id="auto-login" class="auto-login">
                <label for="auto-login">자동 로그인</label>
              </div>
              <ul class="util_list flex_box">
                <li class="util_item"><a href="#none">아이디 찾기</a></li>
                <li class="util_item"><a href="#none">비밀번호 찾기</a></li>
              </ul>
            </div>
          </form>
        </div>

        <div class="non-members">
          <form action="post" >
            <fieldset>
              <legend class="hide">비회원 주문</legend>
              <label for="nonmember_name">주문자명</label>
              <input type="text" name="nonmember_name" id="nonmember_name">
              <label for="order_num">주문번호</label>
              <input type="text" name="order_num" id="orde_num">
          </fieldset> 
          </form>
          
          <button type="button">주문 정보 조회</button>
          
        </div>

      </div>
      
      <div class="login_bottom">
        <span class="login_bottom_text">회원 가입시 적립금 2,000원 적립</span>
        <a href="/under/members/join.php">회원가입</a>
      </div>
      

    </section>
    
  </main>

  
  <!-- FOOTER -->
  <div class="footer_wrap">
    <footer id="footer" class="footer">

      <h2 class="logo_footer">사이트 이용안내</h2>
  
      <div class="policy_introduce">
  
        <div class="flex_box">
          <p class="name_company">법인명(상호): 언더70</p>
          <p class="ceo">대표자(성명): 한승열</p>
          <p class="number_biz">사업자 등록번호 안내 : [123-04-00567]</p>
          <p class="info_biz">통신판매업 신고 제2022-서울성북-00830호 [사업자정보확인]</p>
        </div>
        <div class="flex_box">
          <p class="cel_num">전화 : 010-3466-5376</p>
          <adress clas="adress">주소 : 02844 서울특별시 성북구 동선동3가 234 성지관 401호</adress>
        </div>
        <p class="info_admin">개인정보관리책임자 : 한승열(hsl0717@naver.com)</p>
        <p class="contact_email">Contact : hsl0717@naver.com for more information</p>
        
      </div>

      <p class="copy">Copyrights &copy; 2022 언더70. All rights reserved.</p>
  
    </footer>
    

  </div>
</div>
  <script>

  </script>
</body>
<script>
  $(function() {
    $('.login-type > li').on('click',function(e) {
      let idx = $(this).index();
      $(this).addClass('active');;
      $(this).siblings().removeClass('active');
      let $loginType = $('.login-form').children();
      $loginType.eq(idx).siblings().css({display: 'none'})
      $loginType.eq(idx).css({display: 'block'})
    });
  });

  let err_msg = document.querySelector(".err_msg > p")
  let pEl = document.createElement('p');
  
</script>
<?php
if($target == 0) {
  echo "
  <script>
    err_msg.style.display = 'block';
  </script>";
} else {
  echo "
  <script>
    err_msg.style.display = 'none';
  </script>";
  
}
?>
</html>