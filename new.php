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
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/new.css">

  <!-- SlickSlider -->
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/> 
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
  
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="/slick-1.8.1/slick/slick.min.js"></script>
  <script src="js/common.js" defer></script>
  <script src="js/new.js" defer></script>
  
</head>
<body>
  <!--HEADER-->
  <div class="wrap">
    <div class="header_wrap">
      <div class="header_bg"></div>
    
      <header id="header" class="header">

        <div class="header-inner">

          <h1 class="logo"><a href="index.html">언더70</a></h1>
          
          <nav class="gnb">

            <h2 class="hide">주요메뉴</h2>
            <ul class="main_menu">
              <li><a href="index.html">HOME</a></li>
              <li><a href="#none">NEW</a></li>
              <li><a href="#none">BEST</a></li>
              <li>
                <a href="#none">PRODUCT</a>
                <div class="sub-wrap">
                  <ul class="sub_menu">
                    <li>
                      <h3>PRODUCT</h3>
                    </li>
                    <li class="flex_box">
                      <ul>
                        <li><a href="#" class="category mgbt10">아우터</a></li>
                        <li><a href="#" class="category">상의</a></li>
                        <li><a href="#">긴팔</a></li>
                        <li><a href="#">반팔</a></li>
                        <li><a href="#">스웻셔츠</a></li>
                        <li><a href="#">후드티</a></li>
                        <li><a href="#">셔츠</a></li>
                        <li><a href="#" class="mgbt10">니트</a></li>
                      </ul>
                      <ul>
                        <li><a href="#" class="category">신발</a></li>
                        <li><a href="#" class="category">하의</a></li>
                        <li><a href="#">청바지</a></li>
                        <li><a href="#">면바지</a></li>
                        <li><a href="#">슬랙스</a></li>
                        <li><a href="#">와이드핏</a></li>
                        <li><a href="#" class="mgbt10">밴딩팬츠</a></li>
                        <li><a href="#" class="category">악세사리</a></li>
                      </ul>
                    </li>
                    <li class="sub_menu_bg"></li>
                  </ul>
                </div>
              </li>
              <li><a href="#none">LOOKBOOK</a></li>
              <li><a href="#none">Q/A</a></li>
              <li><a href="#none">REVIEW</a></li>
            </ul>

          </nav>


          <div class="utill_menu">
            <h2 class="hide">유틸메뉴</h2>
            <ul>
              <li>
                <a href="#none">
                  <span class="material-symbols-outlined">search</span>
                </a>
              </li>
              <li><a href="login.html">로그인</a></li>
              <li><a href="join.html">회원가입</a></li>
              <li><a href="#none"><span class="like">좋아요</span></a></li>
              <li><a href="#none">장바구니</a></li>
            </ul>
          </div>
        </div>
      </header>
    
    </div>  
    <!--CONTENT-->
    <main id="main" class="content">

      <section class="product-list__contents">
        <div class="product-list__contents--inner">
          <div class="category-dept">
            <ul class="category-dept__list">
              <li class="category-dept__item category-dept__item--dept1">
                <a href="index.html" class="category-dept__item-title">HOME</a>
              </li>
              <li class="category-dept__item category-dept__item--dept2">
                <a href="new.html" class="category-dept__item-title">NEW</a>
              </li>
            </ul>
          </div>

          <p class="product-list__contents-title">신상품</p>
          
          <div class="product-category">
            <ul class="product-category__list">
              <li class="product-category__item"><a href="javascript:void(0)" class="product-category__item-title product-category__item--active">ALL</a></li>
              <li class="product-category__item"><a href="javascript:void(0)" class="product-category__item-title">아우터</a></li>
              <li class="product-category__item"><a href="javascript:void(0)" class="product-category__item-title">상의</a></li>
              <li class="product-category__item"><a href="javascript:void(0)" class="product-category__item-title">하의</a></li>
              <li class="product-category__item"><a href="javascript:void(0)" class="product-category__item-title">신발</a></li>
              <li class="product-category__item"><a href="javascript:void(0)" class="product-category__item-title">악세사리</a></li>
            </ul>
          </div>

          <div class="product-content">

            <div class="sort-box">
              <div class="total">
                <p>총 <span class="count">30</span>건</p>
              </div>
              <div class="sort-control">
                <a href="javascript:void(0)" class="sort-ctrl-btn ctrl-active">신상품순</a>
                <a href="javascript:void(0)" class="sort-ctrl-btn">인기상품순</a>
                <a href="javascript:void(0)" class="sort-ctrl-btn">낮은가격순</a>
                <a href="javascript:void(0)" class="sort-ctrl-btn">높은가격순</a>
              </div>
            </div>

            <div class="product-list">
              <ul class="product-list__wrapper flex_box">
                <li class="product-list__goods">
                  <div class="product-list__img-wrapper">
                    <div class="product-list__img-hover">
                      <button type="button" class="add-cart">장바구니</button>
                      <button type="button" class="add-like">좋아요</button>
                    </div>
                    <a href="#javascript:void(0)" class="product-list_link"><img src="./images/new_01.jpg" alt="워터 리펠런트 구스다운 점퍼 (인디핑크) 제품 이미지"></a>
                  </div>
                  <div class="product-list__goods-info">
                    <a href="#javascript:void(0)">워터 리펠런트 구스다운 점퍼 (인디핑크)</a>
                    <div class="price-wrapper">
                      <p>328,000</p>
                      <p><span>10%</span>295,200</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

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
            <p class="adress">주소 : 02844 서울특별시 성북구 동선동3가 234 성지관 401호</p>
          </div>
          <p class="info_admin">개인정보관리책임자 : 한승열(hsl0717@naver.com)</p>
          <p class="contact_email">Contact hsl0717@naver.com for more information</p>
          
        </div>

        <p class="copy">Copyrights &copy; 2022 언더70. All rights reserved.</p>
    
      </footer>
    </div>
    
    
    <!-- TO_TOP -->
    <!-- <div id="to-top" class="to_top">
      <span class="material-symbols-outlined">
        arrow_upward
        </span>
    </div> -->

  </div>
</body>
</html>