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

  <title>under70</title>

  <!-- RESET -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">

  <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
  <!-- FONTS & ICONS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- CSS -->
  <link rel="stylesheet" href="/under/css/common.css">
  <link rel="stylesheet" href="/under/css/myPage.css">

  <script src="../js/common.js" defer></script>
<body>
  <div class="wrap">
    <!--HEADER-->
    <?php include "../inc/header.php";?>
    <!-- <div class="shadow-effect"></div> -->
    
    <!--CONTENT-->
    <main id="main" class="content">
      <div class="snb fl">
        <h3 class="snb_tit">마이페이지</h3>
        <ul class="snb_list flex_box">
          <li><a href="#javascript:void(0)">홈</a></li>
          <li><a href="#javascript:void(0)">주문조회</a></li>
          <li><a href="#javascript:void(0)">취소/교환/반품</a></li>
          <li><a href="#javascript:void(0)">포인트</a></li>
          <li><a href="#javascript:void(0)">쿠폰</a></li>
          <li><a href="#javascript:void(0)">관심 상품</a></li>
          <li><a href="#javascript:void(0)">리뷰</a></li>
          <li><a href="#javascript:void(0)">상품 Q&A</a></li>
          <li><a href="/under/members/checkPwd.php?type=1">회원정보수정</a></li>
          <li><a href="/under/members/checkPwd.php?type=0">회원탈퇴</a></li>
        </ul>        
      </div>

      <section class="my_page fl">

        <div class="info_wrap">
          <h3 class="hide">마이페이지 본문 영역</h3>
          <div class="my-info fl">
            <h4>
              <strong><?php echo $s_name?></strong>님은<br>
              <i>일반</i>&nbsp;등급입니다.
            </h4>
          </div>
          <div class="my-point fr">
            <ul>
              <li class="fl">
                <strong>내 포인트</strong>
                <span><em>0</em>p</span>
                <small>적립 예정 포인트</small>
              </li>
              <li class="fl">
                <strong>쿠폰</strong>
                <span><em>2</em>장</span>
              </li>
            </ul>
          </div>
        </div>
        <h4 class="">최근 주문 현황</h4>
        <p class="total-order">
          <a href="#">전체주문조회
            <span class="material-symbols-outlined">
              chevron_right
            </span>
          </a>
        </p>
        <ul class="tab flex_box">
          <li><a href="#none">택배배송</a></li>
          <li><a href="#none">취소/교환/반품</a></li>
        </ul>
        <div id="tab_contents" class="tab_contents">
          <!-- 택배 주문 조회 -->
          <ul class="flex_box">
            <li>
              <a href="#none">
                <em class="count">0</em>
                <span>주문접수</span>
              </a>
            </li>
            <li>
              <a href="#none">
                <em class="count">0</em>
                <span>결제완료</span>
              </a>
            </li>
            <li>
              <a href="#none">
                <em class="count">0</em>
                <span>상품준비중</span>
              </a>
            </li>
            <li>
              <a href="#none">
                <em class="count">0</em>
                <span>배송중</span>
              </a>
            </li>
            <li>
              <a href="#none">
                <em class="count">0</em>
                <span>배송완료</span>
              </a>
            </li>
          </ul>
          <!-- 취소 / 교환 / 반품 -->
          <ul class="" style="display: none;">
            <li>
              <a href="#none">
                <em class="counter"></em>
                <span>취소</span>
              </a>
            </li>
            <li>
              <a href="#none">
                <em class="counter"></em>
                <span>교환</span>
              </a>
            </li>
            <li>
              <a href="#none">
                <em class="counter"></em>
                <span>반품</span>
              </a>
            </li>
          </ul>
          <div class="order_list">
            <div class="tab_item order">
              <p class="no-result">최근 3개월내 내역이 없습니다.</p>
            </div>
            <div class="tab_item rma" style="display: none;">
              <p class="no-result">최근 3개월내 내역이 없습니다.</p>
            </div>
          </div>
        </div>
      </section>

    </main>
      
    
    <!-- FOOTER -->
    <?php include "../inc/footer.php";?>
  </div>
</body>

</html>