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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- CSS -->
  <link rel="stylesheet" href="/under/css/common.css">
  <link rel="stylesheet" href="/under/css/join.css">

  <script src="/under/js/common.js" defer></script>
  <script src="/under/js/join.js" defer></script>
  
  <!-- POST CODE -->
  <link rel="stylesheet" href="/under/css/psCode.css">
  <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js" defer></script>
  <script src="/under/js/psCode.js" defer></script>

<body>
  <div class="wrap">
    <!--HEADER-->
    <div class="header_wrap">
      <div class="header_bg"></div>
    
      <header id="header" class="header">

        <div class="header-inner">

          <h1 class="logo"><a href="/under/index.php">언더70</a></h1>
          
          <nav class="gnb">

            <h2 class="hide">주요메뉴</h2>
            <ul class="main_menu">
              <li><a href="/under/index.php">HOME</a></li>
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
              <li><a href="/under/login/login.php">로그인</a></li>
              <li><a href="/under/members/join.php">회원가입</a></li>
              <li><a href="#none"><span class="like">좋아요</span></a></li>
              <li><a href="#none">장바구니</a></li>
            </ul>
          </div>
        </div>
      </header>
    
    </div>
    <!-- <div class="shadow-effect"></div> -->
    
    <!--CONTENT-->
    <main id="main" class="content">

      <section class="join">

        <h2 class="join_logo">회원 가입</h2> 
        <form action="/under/members/insert.php" method="post"  autocomplete="off">

          <div class="membership_join_id">
            <label for="u_id">
              <p class="necessary">아이디</p>
            </label>
              <div class="input-wrap">
                <input type="text" id="u_id" name="u_id" placeholder="영문, 숫자 5-11 자" maxlength="11">
                <span class="material-symbols-outlined clear-btn id-clear">cancel</span>
                <div class="err-id err"></div>
              </div>
          </div>
          <div class="membership_join_pw">
            <div for="user-pw">
              <label for="pwd" class="necessary">비밀번호</label>
            </div>
            <div class="input-wrap">
              <span class="material-symbols-outlined pw-visible_off">visibility_off</span>
              <span class="material-symbols-outlined pw-visible">visibility</span>
              <input type="password" name="pwd" maxlength="30" placeholder="숫자, 영문, 특수문자 조합 최소8자" id="pwd">
              <span class="material-symbols-outlined clear-btn pw-clear">cancel</span>
              <div class="err-pw err"></div>
            </div>
            <div class="input-wrap">
              <span class="material-symbols-outlined check-visible_off">visibility_off</span>
              <span class="material-symbols-outlined check-visible">visibility</span>
              <input type="password" maxlength="30" id="pw-check" placeholder="비밀번호 재입력" >
              <span class="material-symbols-outlined clear-btn check-clear">cancel</span>
              <div class="pw-check-msg"></div>
            </div>
          </div>
          <div class="membership_join_name">
            <label for="u_name">
              <label for="u_name" class="necessary">이름</label>
            </label>
            <div class="input-wrap">
              <input type="text" name="u_name" class="u_name" id="u_name">
              <span class="material-symbols-outlined clear-btn">cancel</span>
            </div>
            <div class="err-name err"></div>
          </div>
          <div class="membership_join_birth">
            <div class="birth-title">
              <label for="birth" class="necessary">생년월일</label>
            </div>
            <div class="birth-wrap">
              <div class="birth-yy">
                <input type="text" name="yy" placeholder="년(4자)" name="year" class="year" id="birth" maxlength="4">
              </div>
              <div class="birth-mm">
                <select id="month" name="mm" class="month">
                  <option value="">월</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
              <div class="birth-dd">
                <input type="text" placeholder="일" name="dd" id="dd">
              </div>
            </div>
          </div>
          <div class="membership_join_gender">
            <label for="gender" class="necessary">성별</label>
            <div class="gen-choice">
              <select name="gender" id="gender" class="gender">
                <option value="">성별</option>
                <option value="m">남자</option>
                <option value="f">여자</option>
                <option value="n">선택안함</option>
              </select>
            </div>
          </div>
          <div class="membership_join_mail">
            <div class="user-email">
              <label for="email_id" class="necessary">이메일</label>
            </div>
            <div class="input-wrap email">
              <div class="id">
                <input type="text" id="email_id" class="email_id" name="email_id">
                <span class="material-symbols-outlined clear-btn email-clear">cancel</span>
              </div>
              <div class="dns">
                <select name="email_dns" id="email_dns" class="email_dns">
                  <option value="">직접입력</option>
                  <option value="@naver.com">naver.com</option>
                  <option value="@hanmail.com">hanmail.com</option>
                  <option value="@google.com">google.com</option>
                  <option value="@nate.com">nate.com</option>
                </select>
              </div>  
            </div>
            <div class="err-email"></div>

          </div>  
          <div class="membership_join_mobile">
            <label for="mobile" class="mobile">
              <p class="necessary">전화번호</p>
            </label>
            <div class="input-wrap">
              <input type="text" name="mobile" class="mobile" id="mobile">
            </div>
          </div>
          <div class="membership_join_addr">
            <label for="ps_code" class="ps-code">
              <p class="necessary">주소</p>
            </label>
            <div class="input-wrap mgbt10">
              <input type="text" name="ps_code" class="ps_code" id="ps_code" readonly>
              <button type="button" class="btn change-post-code">검색</button>
            </div>
            <div class="addr1 mgbt10">
              <input type="text" name="addr_b" class="addr_b" readonly>
            </div>
            <div class="addr2">
              <input type="text" name="addr_d" class="addr_d">
            </div>
          </div>
          <div class="membership_policy_agreement flex_box">
              <div class="policy_all_agreement flex_box">
                <input type="checkbox" name="" id="policy_all">
                <label for="policy_all">
                  약관 전체 동의하기
                </label>
              </div>
              <div class="privacy_agreement flex_box">
                <input type="checkbox" name="" id="privacy">
                <label for="privacy">
                  [필수] 개인정보 수집 및 이용 동의
                </label>
                <button class="join_checkbox_link" type="button">자세히</button>
              </div>
              <div class="site_use_agreement flex_box">
                <input type="checkbox" name="" id="site_use">
                <label for="site_use">
                  [필수] 언더70 이용약관
                </label>
                <button class="join_checkbox_link" type="button">자세히</button>
              </div>
              <div class="join_age_agreement flex_box">
                <input type="checkbox" name="" id="join_age">
                <label for="join_age">
                  [필수] 만 14세 미만 가입제한
                </label>
              </div>
              <div class="marketing_agreement flex_box">
                <input type="checkbox" name="marketing_agree" id="marketing" >
                <label for="marketing">
                  [선택] 마케팅 활용 및 광고성 정보 수신 동의
                </label>
                <button class="join_checkbox_link" type="button">자세히</button>
              </div>
          </div>
          <button type="click"  class="joinus" disabled>가입하기</button>
        </form>

        
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
  <div class="postal-wrapper" onclick="closeDaumPostcode()";>
    <div class="postal">
    </div>
  </div>
    
</body>

</html>