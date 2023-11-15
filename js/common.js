let $headerWrap = document.querySelector('.header_wrap');
let $header = document.querySelector('.header');
let $headerBg = document.querySelector('.header_bg');
let $subWrap = document.querySelector('.sub-wrap');
let $subMenu = document.querySelector('.sub_menu');
let $menuDepsLi = document.querySelector('.main_menu>li:nth-child(4)');
    
  $menuDepsLi.addEventListener('mouseover', function(e) {
    $subMenu.classList.add('deps2');
    $subWrap.classList.add('deps2', 'border');
  });
  $menuDepsLi.addEventListener('mouseout', function(e) {
    $subMenu.classList.remove('deps2');
    $subWrap.classList.remove('deps2', 'border');
  });
  
 
    
    