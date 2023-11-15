<?php 
include "inc/session.php";
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
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/main.css">

  <!-- SlickSlider -->
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css"/> 
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css"/>
  
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="./slick-1.8.1/slick/slick.min.js"></script>
  <script src="js/common.js" defer></script>
  <script src="js/main.js" defer></script>
 
  
</head>
<body>
  <!--HEADER-->
  <div class="wrap">
    <?php include "inc/header.php";?>
    <!--CONTENT-->
    <main id="main" class="content">

      <section class="main_images">

        <h2 class="hide">주요소식</h2>

        <div class="mySlider">
          <div><a href="#none"><img src="images/mainSlide_01.jpg" alt="슬라이드 이미지1"></a></div>
          <div><a href="#none"><img src="images/mainSlide_02.jpg" alt="슬라이드 이미지2"></a></div>
          <div><a href="#none"><img src="images/mainSlide_03.jpg" alt="슬라이드 이미지3"></a></div>
        </div>

        <div class="main_navi"></div>

      </section>


      <section class="quick_services">

        <h2 class="hide">빠른서비스</h2>
        <ul class="quick_wrap">
          <li class="quick_cont1">
            <a href="/under/members/join.php">
              <p>JOIN US</p>
              <p>회원가입 시 적립금 2,000원을 드려요.</p>
            </a>
          </li>
          <li class="quick_cont2">
            <a href="#none">
              <p>REVIEW</p>
              <p>리뷰를 남겨주시면 적립금을 드려요.</p>
            </a>
          </li>
          <li class="quick_cont3">
            <a href="#none">
              <p>Q/A</p>
              <p>문의사항을 남겨주세요.</p>
            </a>
          </li>
        </ul>

      </section>


      <section class="new_product">

        <h2 class="tit">WHAT'S NEW</h2>
        <ul class="new">
          <li> <!-- 1 -->
            <a href="#none">
              <div class="img"><img src="images/new_01.jpg" alt=""></div>
              <div class="text">
                <p class="product">뉴 테이크 FULL KIT</p>
                <p class="price"><span>49,680</span><span>69,000</span></p>
                <p class="price_discount">28%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 2 -->
            <a href="#none">
              <div class="img"><img src="images/new_02.jpg" alt=""></div>
              <div class="text">
                <p class="product">미니 토스트 백</p>
                <p class="price"><span>80,655</span><span>84,900</span></p>
                <p class="price_discount">5%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 3 -->
            <a href="#none">
              <div class="img"><img src="images/new_03.jpg" alt=""></div>
              <div class="text">
                <p class="product">뉴 테이크 FULL KIT</p>
                <p class="price"><span>49,680</span><span>69,000</span></p>
                <p class="price_discount">28%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 4 -->
            <a href="#none">
              <div class="img"><img src="images/new_04.jpg" alt=""></div>
              <div class="text">
                <p class="product">블랙 미니 크로스 백</p>
                <p class="price"><span>61,600</span><span>77,000</span></p>
                <p class="price_discount">20%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 5 -->
            <a href="#none">
              <div class="img"><img src="images/new_05.jpg" alt=""></div>
              <div class="text">
                <p class="product">화이트 브라이들 백</p>
                <p class="price"><span>78,000</span>
                </p>
                <p class="price_discount"></p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 6 -->
            <a href="#none">
              <div class="img"><img src="images/new_06.jpg" alt=""></div>
              <div class="text">
                <p class="product">뉴 테이크 FULL KIT</p>
                <p class="price"><span>49,680</span><span>69,000</span></p>
                <p class="price_discount">28%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 7 -->
            <a href="#none">
              <div class="img"><img src="images/new_07.jpg" alt=""></div>
              <div class="text">
                <p class="product">미니 토스트 백</p>
                <p class="price"><span>80,655</span><span>84,900</span></p>
                <p class="price_discount">5%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 8 -->
            <a href="#none">
              <div class="img"><img src="images/new_08.jpg" alt=""></div>
              <div class="text">
                <p class="product">뉴 테이크 FULL KIT</p>
                <p class="price"><span>49,680</span><span>69,000</span></p>
                <p class="price_discount">28%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 9 -->
            <a href="#none">
              <div class="img"><img src="images/new_09.jpg" alt=""></div>
              <div class="text">
                <p class="product">블랙 미니 크로스 백</p>
                <p class="price"><span>61,600</span><span>77,000</span></p>
                <p class="price_discount">20%</p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 10 -->
            <a href="#none">
              <div class="img"><img src="images/new_10.jpg" alt=""></div>
              <div class="text">
                <p class="product">화이트 브라이들 백</p>
                <p class="price"><span>78,000</span>
                </p>
                <p class="price_discount"></p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 11 -->
            <a href="#none">
              <div class="img"><img src="images/new_11.jpg" alt=""></div>
              <div class="text">
                <p class="product">화이트 브라이들 백</p>
                <p class="price"><span>78,000</span>
                </p>
                <p class="price_discount"></p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 12 -->
            <a href="#none">
              <div class="img"><img src="images/new_12.jpg" alt=""></div>
              <div class="text">
                <p class="product">화이트 브라이들 백</p>
                <p class="price"><span>78,000</span>
                </p>
                <p class="price_discount"></p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>
          <li> <!-- 13 -->
            <a href="#none">
              <div class="img"><img src="images/new_13.jpg" alt=""></div>
              <div class="text">
                <p class="product">화이트 브라이들 백</p>
                <p class="price"><span>78,000</span>
                </p>
                <p class="price_discount"></p>
              </div>
            </a>
            <div class="icon_like"></div>
            <div class="icon_bag"></div>
          </li>

        </ul>

      </section>


      <div class="best_wrap">

        <section class="best">

          <h2 class="tit">WEEKLY BEST</h2>

          <ul class="container_best ">
            <li class="product1">
              <a href="#none">
                <div class="best_img"><img src="images/best_img1.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">카시오 시계 (A-158WA-1UWDF)</p>
                  <p class="line-through">20,000</p>
                  <div class="flex_box">
                    <p class="font_bold">15,000</p>
                    <p class="price_discount">25%</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="product2">
              <a href="#none">
                <div class="best_img"><img src="images/best_img2.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">빅 트위치 로고 티셔츠 화이트</p>
                  <p class="line-through">35,000</p>
                  <div class="flex_box">
                    <p class="font_bold">32,550</p>
                    <p class="price_discount">7%</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="product3">
              <a href="#none">
                <div class="best_img"><img src="images/best_img3.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">1952 bracelet - silver</p>
                  <p class="line-through">39,000</p>
                  <div class="flex_box">
                    <p class="font_bold">31,200</p>
                    <p class="price_discount">20%</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="product4">
              <a href="#none">
                <div class="best_img"><img src="images/best_img4.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">MLB 야구모자</p>
                  <p class="line-through">48,000</p>
                  <div class="flex_box">
                    <p class="font_bold">43,200</p>
                    <p class="price_discount">10%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="container_best">
            <li class="product5">
              <a href="#none">
                <div class="best_img"><img src="images/best_img4.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">카시오</p>
                  <p class="line-through">20,000</p>
                  <div class="flex_box">
                    <p class="font_bold">15,000</p>
                    <p class="price_discount">25%</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="product6">
              <a href="#none">
                <div class="best_img"><img src="images/best_img3.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">카시오</p>
                  <p class="line-through">20,000</p>
                  <div class="flex_box">
                    <p class="font_bold">15,000</p>
                    <p class="price_discount">25%</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="product7">
              <a href="#none">
                <div class="best_img"><img src="images/best_img2.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">카시오</p>
                  <p class="line-through">20,000</p>
                  <div class="flex_box">
                    <p class="font_bold">15,000</p>
                    <p class="price_discount">25%</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="product8">
              <a href="#none">
                <div class="best_img"><img src="images/best_img1.jpg" alt="카시오 시계"></div>
                <div class="product_info">
                  <p class="name">카시오</p>
                  <p class="line-through">20,000</p>
                  <div class="flex_box">
                    <p class="font_bold">15,000</p>
                    <p class="price_discount">25%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>

        </section>
      </div>


      <!-- LOOLBOOK -->
      <section class="lookbook">

        <h2 class="tit">LOOKBOOK</h2>

        <ul class="wrap_lookbook">
          <li class="slide">
            <a href="#none">룩북1<img src="images/lookbook_01.jpg"></a>
          </li>
          <li class="slide">
            <a href="#none">룩북2<img src="images/lookbook_02.jpg"></a>
          </li>
          <li class="slide">
            <a href="#none">룩북3<img src="images/lookbook_03.jpg"></a>
          </li>
          <li class="slide">
            <a href="#none">룩북4<img src="images/lookbook_04.jpg"></a>
          </li>
          <li class="slide">
            <a href="#none">룩북5<img src="images/lookbook_05.jpg"></a>
          </li>
          <li class="slide">
            <a href="#none">룩북6<img src="images/lookbook_06.jpg"></a>
          </li>
        </ul>

      </section>


      <!-- PRODUCT LIST -->
      <section class="product_list">

        <h2 class="tit">PRODUCT</h2>

        <ul class="list_name flex_box">
          <li class="all">
            <a href="#none">전체</span></a>
          </li>
          <li><a href="javascript:void(0)">아우터</a></li>
          <li><a href="javascript:void(0)">상의</a></li>
          <li><a href="javascript:void(0)">하의</a></li>
          <li><a href="javascript:void(0)">신발</a></li>
          <li><a href="javascript:void(0)">악세사리</a></li>
        </ul>

        <div class="list_wrap">

          <ul class="all_product flex_box">
            <li>
              <a href="javascript:void(0)">
                <div class="product1_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product2_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product3_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product4_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product5_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product6_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product7_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product8_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product9_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="all_product flex_box">
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"><img src="images/product_img11.jpg" alt=""></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product2_img"><img src="images/product_img12.jpg" alt=""></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product3_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product4_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product5_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product6_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product7_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product8_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product9_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="all_product flex_box">
            <li>
              <a href="javascript:void(0)">
                <div class="product1_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product2_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product3_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product4_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product5_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product6_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product7_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product8_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product9_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="all_product flex_box">
            <li>
              <a href="javascript:void(0)">
                <div class="product1_img"><img src="images/product_img13.jpg" alt=""></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product2_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product3_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product4_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product5_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product6_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product7_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product8_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product9_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="all_product flex_box">
            <li>
              <a href="javascript:void(0)">
                <div class="product1_img"><img src="images/product_img14.jpg" alt=""></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product2_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product3_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product4_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product5_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product6_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product7_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product8_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product9_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <ul class="all_product flex_box">
            <li>
              <a href="javascript:void(0)">
                <div class="product1_img"><img src="images/product_img15.jpg" alt=""></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product2_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product3_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product4_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product5_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product6_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product7_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product8_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product9_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <div class="product10_img"></div>
                <div class="product_info">
                  <p class="name">피그먼트 워싱 맨투맨</p>
                  <p class="line-through">63,000</p>
                  <div class="flex_box">
                    <p class="font_bold">55,440</p>
                    <p class="price_discount">12%</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="btn_more">+ 더보기</div>

      </section>

    </main>


    <!-- FOOTER -->
    <?php include "inc/footer.php"; ?>
    
    <!-- MODAL -->
    <div>
      <div class="popup">
        
      </div>
    </div>
    <!-- TO_TOP -->
    <div id="to-top" class="to_top">
      <span class="material-symbols-outlined">
        arrow_upward
        </span>
    </div>

  </div>
</body>
</html>