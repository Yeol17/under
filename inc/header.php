<div class="header_wrap">
      <div class="header_bg"></div>
    
      <header id="header" class="header">

        <div class="header-inner">

          <h1 class="logo"><a href="/under/index.php">언더70</a></h1>
          
          <nav class="gnb">

            <h2 class="hide">주요메뉴</h2>
            <ul class="main_menu">
              <li><a href="/under/index.php">HOME</a></li>
              <li><a href="new.html">NEW</a></li>
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
              <?php if (!$s_idx) {?>
                <li><a href="/under/login/login.php">로그인</a></li>
                <li><a href="/under/members/join.php">회원가입</a></li>
                <?php } else {?>
                  <li><a href="/under/login/logout.php">로그아웃</a></li>
                  <li><a href="/under/members/myPage.php">마이페이지</a></li>
              <?php } ?>
              <li><a href="#none"><span class="like">좋아요</span></a></li>
              <li><a href="#none">장바구니</a></li>
            </ul>
          </div>
        </div>
      </header>
    
    </div>
