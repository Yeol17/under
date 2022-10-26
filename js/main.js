$(document).ready(function(){

  $('.mySlider').slick({
    slide: 'div',
    infinite : true,
    autoplay :true,
    autoplaySpeed  : 2000,
    pauseOnHover : true,
    speed: 500,
    dots: true,
    appendDots: $('.main_navi'),
  });
  let $new = $('.new');
  $new.slick({
    slide: 'li',
    // autoplay: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    speed: 500,
  }); 
    $('.new').on('beforeChange', function(event, slick, currentSlide, nextSlide){
      
    });

  $('.best').slick({ 
    slide: '.container_best',
    infinite : true,
    slidesToShow: 1,
    // // autoplay :true,
    autoplaySpeed  : 2000,
    pauseOnHover : true,
    speed: 500,
    dots: true,
    appendDots: $('.best')
  });
  
  $('.wrap_lookbook').slick({ 
    slide: '.slide',
    centerMode: true,
    centerPadding: '0px',
    slidesToShow: 3,
    slidesToScroll: 1,
    appendDots: $('.wrap_lookbook'),
  });

  $('.list_name>li').click(function() {
    $(this).addClass('all');
    $(this).siblings().removeClass('all');
    let idx = $(this).index();
    let listItem = $('.list_wrap>ul').eq(idx);
    console.log(listItem);
    $(listItem).css('visibility', 'visible');
    $(listItem).siblings().css('visibility', 'hidden');
  });
  
});