
              $(function(){
                var $slide = $('.slide'),
                    $item = $slide.find('.item'),
                    $slide2 = $('.slide2');
                $slide.slick({
                  //기본
                  autoplay : false,
                  dots : true,
                  dotsClass : "slick-dots",
                  swipe : true,
                  draggable : true,
                  arrows : false,
                  slidesToShow : 1,
                  slidesToScroll: 1,
                  variableWidth: true,
                  infinite: true,
                  autoplaySpeed: 2000,
                  speed : 500,
                  /*centerMode : true,
                  asNavFor : $slide2,*/


                  //추가 기능
                  isRunOnLowIE : false,
                  pauseOnArrowClick : true,
                  pauseOnDirectionKeyPush : true,
                  pauseOnSwipe : true,
                  pauseOnDotsClick : true,
                });
                $('[data-slick-index="0"]').addClass('slick-now');
                $('[data-slick-index="-1"]').addClass('slick-isprev');
                $('[data-slick-index="1"]').addClass('slick-isnext');

                $slide.on('beforeChange', function(event, slide, currentSlide, nextSlide){
                  var count = slide.slideCount;
                  var selectors = [nextSlide, nextSlide - count, nextSlide + count].map(function (n) {
                        return '[data-slick-index="'.concat(n, '"]');
                      }).join(', '),
                      selectorsPrev = [nextSlide, nextSlide - count, nextSlide + count].map(function (n) {
                        return '[data-slick-index="'.concat(n - 1, '"]');
                      }).join(', '),
                      selectorsNext = [nextSlide, nextSlide - count, nextSlide + count].map(function (n) {
                        return '[data-slick-index="'.concat(n + 1, '"]');
                      }).join(', ');
                  $('.slick-slide').removeClass('slick-now').removeClass('slick-isprev').removeClass('slick-isnext');
                  $(selectors).addClass('slick-now');
                  $(selectorsPrev).addClass('slick-isprev');
                  $(selectorsNext).addClass('slick-isnext');
                });
              })