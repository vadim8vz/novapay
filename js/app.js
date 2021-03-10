$( document ).ready(function() {

    //sticky header
    if ( $(window).width() < 991 ) {
        var stickyOffset = 76;
    } else if ( $(window).width() < 767 )  {
        var stickyOffset = 56;
    } else {
        var stickyOffset = 80;
    }
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > stickyOffset) {
            $('header').addClass('sticky-menu');
        } else {
            $('header').removeClass('sticky-menu');
        }
    });

    //inner product page nav
    var lastId,
        anchorMenu = $(".section-page-nav"),
        anchorMenuHeight = anchorMenu.outerHeight()+45,
        menuItems = anchorMenu.find("a"),
        scrollItems = menuItems.map(function(){
          var item = $($(this).attr("href"));
          if (item.length) { return item; }
        });

    menuItems.click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top-anchorMenuHeight+1;
      $('html, body').stop().animate({ 
          scrollTop: offsetTop
      }, 300);
      e.preventDefault();
    });
    $(window).scroll(function(){
       var fromTop = $(this).scrollTop()+anchorMenuHeight;
       var cur = scrollItems.map(function(){
         if ($(this).offset().top < fromTop)
           return this;
       });
       cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";
       if (lastId !== id) {
           lastId = id;
           menuItems
             .parent().removeClass("active")
             .end().filter("[href='#"+id+"']").parent().addClass("active");
       }                   
    });

    $(document).on('click','.js-tabcollapse-panel-heading', function() {
        $('.collapse').collapse('hide');
        $(this).closest('.panel-default').find('.collapse').collapse('show');
        return false;
    });

    $(document).on('click','.map-info-footer', function() {
        $(this).toggleClass('active')
        $(this).closest('.graph').find('.hidden-block').slideToggle();
        return false;
    });

    //slider with-navigation
    $('.navigation-slider').not('.unslick').each(function() {
        var slickInduvidual = $(this);
        var slideCount = null;
        slickInduvidual.on('init', function(event, slick) {
            slideCount = slick.slideCount;
            setSlideCount();
            setCurrentSlideNumber(slick.currentSlide);
        });
        slickInduvidual.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            setCurrentSlideNumber(nextSlide);
        });
        slickInduvidual.slick({
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            fade: true,
            slidesToShow: +$(this).attr('data-items-xl'),
            slidesToScroll: +$(this).attr('data-items-xl'),
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: +$(this).attr('data-items-xl'),
                    slidesToScroll: +$(this).attr('data-items-xl'),
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: +$(this).attr('data-items-lg'),
                    slidesToScroll: +$(this).attr('data-items-lg'),
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: +$(this).attr('data-items-md'),
                    slidesToScroll: +$(this).attr('data-items-md'),
                    dots: true,
                    fade: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: +$(this).attr('data-items-sm'),
                    slidesToScroll: +$(this).attr('data-items-sm'),
                    dots: true,
                    fade: false,
                }
            }
            ]
        });

        function setSlideCount() {
            var $el = slickInduvidual.closest('.section').find('.to');
            $el.text((slideCount > 9) ? slideCount : +slideCount);
        }

        function setCurrentSlideNumber(currentSlide) {
            var $el = slickInduvidual.closest('.section').find('.from');
            $el.text((currentSlide > 8) ? currentSlide + 1 :  +(currentSlide + 1));
        }

        
        $('button.prev').click(function() {
            $(this).closest('.section').find(".navigation-slider").slick('slickPrev');
        });
        $('button.next').click(function() {
            $(this).closest('.section').find(".navigation-slider").slick('slickNext');
        });
        $('.section-arrows button').click(function() {
            if ( $(this).closest('.section').find(".navigation-slider").hasClass('nextAnimation') ) {
                $(this).closest('.section').find(".navigation-slider").removeClass('nextAnimation');
                $(this).closest('.section').find(".navigation-slider").addClass('prevAnimation');
                return false;
            } else if ( $(this).closest('.section').find(".navigation-slider").hasClass('prevAnimation') ) {
                $(this).closest('.section').find(".navigation-slider").removeClass('prevAnimation');
                $(this).closest('.section').find(".navigation-slider").addClass('nextAnimation');
                return false;
            }
        });
        $('.slick-slide').addClass('nextAnimation');
        $('.slick-current').removeClass('nextAnimation');
    });

    $('.navigation-slider').on('afterChange init', function(event, slick, direction){
        console.log('afterChange/init', event, slick, slick.$slides);
        slick.$slides.removeClass('prevAnimation').removeClass('nextAnimation');
        for (var i = 0; i < slick.$slides.length; i++)
        {
            var $slide = $(slick.$slides[i]);
            if ($slide.hasClass('slick-current')) {
                $slide.prev().addClass('prevAnimation');
                $slide.next().addClass('nextAnimation');
                break;
            }
        }
      }
    ).on('beforeChange', function(event, slick) {
        slick.$slides.removeClass('prevAnimation').removeClass('nextAnimation');
    });


    //reviews-slider
    $(".item-main").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 6000,
        draggable: false,
        arrows: true,
        dots: false,
        accessibility: false,
        prevArrow: '<button class="slick-prev slick-arrow"><img src="img/white-arrow-left.svg" alt=""></button>',
        nextArrow: '<button class="slick-next slick-arrow"><img src="img/white-arrow-right.svg" alt=""></button>',
        asNavFor: ".item-nav",
    });
    $(".item-nav").slick({
       slidesToScroll: 1,
       infinite:true,
       slidesToShow: 6,
       autoplay: true,
       autoplaySpeed: 6000,
       focusOnSelect: true,
       arrows: false,
       asNavFor: '.item-main',
        responsive: [
            {
                breakpoint: 1260,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow:4,
                    slidesToScroll: 1,
                },
            },
        ],
    });

    //to top arrow
    $(window).scroll(function() {
        if ($(this).scrollTop() > 10) {
            $('.js-top').css('opacity','.3');
        } else {
            $('.js-top').css('opacity','0');
        }
    });
    $('.js-top').click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);
        return false;
    });

    //default slider
    function initSlickSlider(slider) {
        slider.each( function() {
          $(this).slick({
            infinite: false,
            prevArrow: '<button class="slick-prev slick-arrow"><img src="img/white-arrow-left.svg" alt=""></button>',
            nextArrow: '<button class="slick-next slick-arrow"><img src="img/white-arrow-right.svg" alt=""></button>',
            dots: true,
            draggable: false,
            slidesToShow: +$(this).attr('data-items-xl'),
            slidesToScroll: +$(this).attr('data-scroll-xl'),
            responsive: [
              {
                breakpoint: 1441,
                settings: {
                  slidesToShow: +$(this).attr('data-items-xl'),
                  slidesToScroll: +$(this).attr('data-scroll-xl'),
                }
              },
              {
                breakpoint: 1231,
                settings: {
                  slidesToShow: +$(this).attr('data-items-lg'),
                  slidesToScroll: +$(this).attr('data-scroll-lg'),
                }
              },
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: +$(this).attr('data-items-md'),             
                  slidesToScroll: +$(this).attr('data-scroll-md'),
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: +$(this).attr('data-items-sm'),
                  slidesToScroll: +$(this).attr('data-scroll-sm'),
                }
              }
            ]
          });
        })
    }
    initSlickSlider($('.carousel'));

	//page navigation
    var css = 
        '<style>\n\
            .markup-nav { cursor: pointer; position: fixed; z-index: 999999; top: 60px; left: -220px; width: 215px; font:bold 12px/1.2 Helvetica, Arial; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.6); transition: left 200ms ease; box-sizing: border-box; }\n\
            .markup-nav__inner { background:#fff; padding: 5px 10px 5px 0; position: relative;opacity: 0; }\n\
            .markup-nav:before { content: ""; position: absolute; left: 100%; top: 0; width: 40px; height: 40px; background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAwFBMVEUAAAD///8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABiCivsAAAAP3RSTlMAAAIEEBEVFiYsLS4vMzg5Ojs8PT5BR0tUXV5gaG5vcHd4fby9v8DBwsTFycvMzc/g4+Tl5uvs7vP09fb5+v5kF+L8AAAAsklEQVR42m3QaReBQBTG8aks2VNIthARQostmvv9v5U7V5164f/qOb9zZuYUyzLi2KAhSTl5AF5B/cuhOYkAgpHqnTWiEwAH6gPgE+2h1JaozQtJVSIb59uu1lcpjjHSwH3gshi2xBG6QxYCliiCaiAKfvSUBVWIQqY54qApaIYj3mi41rhupqxYCY4pvdgD0UsA8AaRC6V2RD7k8fyDNN/tzO9436LlHLv/f06WHl31jL67eSl1BXfldgAAAABJRU5ErkJggg==) no-repeat 60% 50% white; box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.6); border-top-right-radius: 6px; border-bottom-right-radius: 6px; transition: all 0.3s ease;}\n\
            .markup-nav a { display: block; padding: 2px 10px; color: #000; /*text-shadow: 1px 1px 0 #283E68;*/text-decoration: none !important; border: none !important; }\n\
            .markup-nav a:hover { background: #edf1f5; color: #000 !important; }\n\
            .markup-nav.is-open { left: 0; }\n\
            .markup-nav.is-open .markup-nav__inner{ opacity: 1; }\n\
        </style>';

    var html =
    '<div class="markup-nav">\n\
        <div class="markup-nav__inner">\n\
            <a href="index.php">index.php</a>\n\
            <a href="remittance.php">remittance.php</a>\n\
            <a href="postpaid.php">postpaid.php</a>\n\
            <a href="cash_withdrawal.php">cash_withdrawal.php</a>\n\
            <a href="online_payment.php">online_payment.php</a>\n\
            <a href="ria_transfer.php">ria_transfer.php</a>\n\
            <a href="payment.php">payment.php</a>\n\
            <a href="addition.php">addition.php</a>\n\
            <a href="internet_inquiring.php">internet_inquiring.php</a>\n\
            <a href="register_payments.php">register_payments.php</a>\n\
            <a href="contacts.php">contacts.php</a>\n\
            <a href="documents.php">documents.php</a>\n\
            <a href="news.php">news.php</a>\n\
            <a href="vacancies.php">vacancies.php</a>\n\
            <a href="vacancy.php">vacancy.php</a>\n\
            <a href="corp_culture.php">corp_culture.php</a>\n\
            <a href="team.php">team.php</a>\n\
            <a href="team_single.php">team_single.php</a>\n\
            <a href="tariffs.php">tariffs.php</a>\n\
            <a href="today.php">today.php</a>\n\
            <a href="post.php">post.php</a>\n\
            <a href="error.php">error.php</a>\n\
            <a href="violation_message.php">violation_message.php</a>\n\
            <a href="questions_private.php">questions_private.php</a>\n\
            <a href="questions_private_validation.php">questions_private_validation.php</a>\n\
            <a href="questions.php">questions.php</a>\n\
            <a href="questions_fop.php">questions_fop.php</a>\n\
            <a href="verification.php">verification.php</a>\n\
            <a href="payment_secure.php">payment_secure.php</a>\n\
        </div>\n\
    </div>'

    $('body').prepend(css + html);

    $('.markup-nav').on('click', function() {
        $(this).toggleClass('is-open');
    });

    //search nav
    $('.right-nav__search').click( function() {
        $(this).toggleClass('opened');
        $(this).closest('.search-wrapper').toggleClass('w-search');
        $(this).closest('.right-nav').find('ul').toggleClass('search-open')
    });

    //menu
    $('.right-nav .hamburger').on('click', function() {
        $(this).toggleClass('is-active');
        $('.mob-nav').toggleClass('active');
        $('body').toggleClass('menu-opened');
    });
    $('.mob-nav .hamburger').on('click', function() {
        $('.mob-nav').toggleClass('active');
        $('.right-nav .hamburger').toggleClass('is-active');
        return false;
    });
    $(document).on('click','.w-submenu > a', function() {
        $('.w-submenu').removeClass('active');
        $('.submenu').slideUp();
        $(this).closest('.w-submenu').addClass('active');
        $(this).closest('.w-submenu').find('.submenu').slideToggle('medium');
        return false;
    });
    $(document).on('click','.menu-column > .title', function() {
        $(this).toggleClass('active');
        $('.menu-column ul').slideUp();
        $(this).closest('.menu-column').addClass('active');
        $(this).closest('.menu-column').find('ul').slideToggle('medium');
        return false;
    });
    var navContent = $('.desktop-nav').html();
    if ($(window).width() < 991) {   
        $('.mobile-nav').html(navContent);
    }
    $( window ).resize(function() {
        if ($(window).width() < 991) {
            var navContent = $('.desktop-nav').html();
            $('.mobile-nav').html(navContent);
        }
    });

    //list-how
    $('.how .title').on('click', function() {
        $(this).toggleClass('active');
        $(this).closest('.how').find('ul').slideToggle();
        return false;
    });

    //inner-search
    $('.js-inner-inputsearch').keyup( function() {
        $(this).closest('form').addClass('opened');
    });
    $('.inner-search .close-search').click( function() {
        $(this).closest('form').removeClass('opened');
    });

    //contacts worktime
    $('.work-time-envelope .title').on('click', function() {
        $(this).toggleClass('active');
        $(this).closest('.work-time-envelope').find('ul').slideToggle();
        return false;
    });

    //form-group-border 
    $('.vacancy-form .form-group-wrapper, .form-wrapper-default').click( function() {
        $('.vacancy-form .form-group-wrapper, .form-wrapper-default').removeClass('focused');
        $(this).addClass('focused');
    });
    $('.vacancy-form .form-group-wrapper').blur( function() {
        $('.vacancy-form .form-group-wrapper').removeClass('focused');
    });

    //file download
    $('.js-add-file').click( function() {
        $(this).addClass('choosed');
        $(this).prev('.form-group-wrapper').hide();
        $(this).find('.hidden-content').css('display','flex');
    });
    $('.file-control').change(function() {
        var file = $(this)[0].files[0].name;
        $(this).closest('label').find('p').text(file).append('<span class="remove-file"><img src="img/file-close.svg" alt=""></span>');
        $(this).closest('label').addClass('filed');
        return false;
    });
    $(document).on('click','.remove-file', function() {
        $('.js-add-file').removeClass('choosed');
        $(this).closest('label').removeClass('filed');
        $('.js-add-file').prev('.form-group-wrapper').show();
        $(this).closest('.hidden-content').css('display','none');
        return false;
    });

    //select
    $('.default-select').click( function() {
        $(this).toggleClass('opened');
        $(this).next('.nav-tabs').slideToggle();
    });

    //form-nav
    $('.form-nav .business').click( function() {
        $(this).closest('ul').removeClass('private');
        $(this).closest('ul').addClass('business');
        return false;
    });
    $('.form-nav .private').click( function() {
        $(this).closest('ul').removeClass('business');
        $(this).closest('ul').addClass('private');
        return false;
    });
    $('.form-nav .black-nav a').click( function() {
        $('.black-nav a').removeClass('active');
        $(this).addClass('active');
        return false;
    });

    //other person
    $('.js-other-person').click( function() {
        if ( $(this).find('input').prop('checked') ) {
            $('.hidden-col').show();
        } else {
            $('.hidden-col').hide();
        }
    });

    //rest-slider
    if ($(window).width() >= 991) {
        $('.rest-slider').slick('unslick');
    } else {
        if ( !$('.rest-slider').hasClass('slick-initialized') ) {
            $('.rest-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                draggable: false,
                arrows: true,
                dots: true,
                prevArrow: '<button class="slick-prev slick-arrow"><img src="img/white-arrow-left.svg" alt=""></button>',
                nextArrow: '<button class="slick-next slick-arrow"><img src="img/white-arrow-right.svg" alt=""></button>',
            });
        }
    }
    $( window ).resize(function() {
        if ($(window).width() >= 991) {
            $('.rest-slider').slick('unslick');
        } else {
            if ( !$('.rest-slider').hasClass('slick-initialized') ) {
                $('.rest-slider').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    fade: true,
                    draggable: false,
                    arrows: true,
                    dots: true,
                    prevArrow: '<button class="slick-prev slick-arrow"><img src="img/white-arrow-left.svg" alt=""></button>',
                    nextArrow: '<button class="slick-next slick-arrow"><img src="img/white-arrow-right.svg" alt=""></button>',
                });
            }
        }
    });

});

//autoresize textarea
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = (element.scrollHeight)+"px";
}