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
  
  let scrollY = '';
    let toTop = document.getElementById('to-top');
    
    window.addEventListener('scroll', function() {
      scrollY = window.pageYOffset;
      if (scrollY < 300) {
        toTop.style.opacity = 0;
      } else {
        toTop.style.opacity = 1;
      }
      
      if(scrollY >= 300) {
        $header.style.height = '75px';
        $headerWrap.style.top = 0;
        $headerBg.style.transform = 'scaleX(1)';
        // $header.classList.add('fixed')
        // $subWrap.style.top = '77px';
        return;
      }
      if (scrollY === 0) {
        $headerBg.style.transform = 'scaleX(.7)';
        $headerWrap.style.top = '10px';
        $header.style.height = '90px';
        
      }

    });
    toTop.addEventListener('click', function() {
      window.scrollTo({
        top: 1,
        left: 0,
        behavior: "smooth"
      });
    });
    
    