(function ($) {
    "use strict";
    $(document).ready(function () {

        /*
       Jquery Mobile Menu
       ============================*/
        $('#main-menu').meanmenu({
            meanMenuContainer: '.te-mobile-nav-menu',
            meanScreenWidth: "991",
            meanExpand: ['<i class="fal fa-plus"></i>'],
        });

        /*
       Jquery Header Search 
       ============================*/
       $('.te-search-btn').on('click', function (e) {
        e.preventDefault();
        $('body').css('overflow', 'hidden');

        $('.te-search-form-wrapper').addClass('te-active');
        });
        $('.te-search-close').on('click', function (e) {
            e.preventDefault();
            $('body').css('overflow', 'auto');
            $('.te-search-form-wrapper').removeClass('te-active');
        });

        window.onclick = function(e){
            if( e.target.matches(".te-search-form-wrapper") ){
                $('.te-search-form-wrapper').removeClass('te-active');
            }
        }
        /*
       Jquery sidebar Toggle
       ============================*/
        $(".te-mobile-menu-toggle-btn").on("click", function () {
            $(".te-menu-sidebar-area").addClass("active");
            $(".te-body-overlay").addClass("active");
        });
        $(".te-menu-sidebar-close-btn").on("click", function () {
            $(".te-menu-sidebar-area").removeClass("active");
            $(".te-body-overlay").removeClass("active");
        });

        /*
       Jquery Body Overlay
       ============================*/
        $(".te-body-overlay").on("click", function () {
            $(".te-menu-sidebar-area").removeClass("active");
            $(".te-body-overlay").removeClass("active");
        });
        /*
        Stikey Js
        ============================*/

        const body = document.body;
        const html = document.documentElement;
        const height = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        if (100 < $(window).scrollTop()) {
            $(".te-header-menu-area.te-sticky-header").addClass("te-sticky_menu");
        }
        if( height  > 1400 ) {
            const nav = $(".te-header-menu-area.te-sticky-header");
            let scrolled = false;
            $(window).on("scroll", function () {
                if (100 < $(window).scrollTop() && !scrolled) {
                    nav
                        .addClass("te-sticky_menu animated fadeIn")
                        .animate({"margin-top": "0px"});
                    scrolled = true;
                }
                if (100 > $(window).scrollTop() && scrolled) {
                    nav.removeClass("te-sticky_menu animated fadeIn").css("margin-top", "0px");
                    scrolled = false;
                }
            });
        }

        /*
        Jquery Empty Post Content Hide
        ============================*/
        $('.blog-area .te-post-content p').filter(function() {
            return /\u00A0/.test($(this).text());
        }).hide();


        /*
        Skill Progress Bar Js
        ============================*/
        $('.skill-progressbar').one('inview', function(event, isInView) {
            if (isInView) {
                $('.progress-inner').each(function() {
                    $(this).find('.progress-content').animate({
                        width:$(this).attr('data-percentage')
                    },2000);

                    $(this).find('.progress-number-count').animate(
                        {left:$(this).attr('data-percentage')},
                        {
                            duration: 2000,
                            step: function(now) {
                                let data = Math.round(now);
                                $(this).find('.progress-percent').html(data + '%');
                            }
                        });
                });

            }
        });

        /*
       Slider
       ============================*/
        $(".te-slider-wrapper").slick({
            slidesToShow: 1,
            infinite: true,
            autoplay: false,
            draggable: true,
            arrows: false,
            slidesToScroll: 1,
            loop: true,
            dots: true,
            speed: 1500,
            prevArrow:
                "<button type='button' class='slider-arrow-btn prev-btn'><i class='fa-solid fa-angle-left'></i></button>",
            nextArrow:
                "<button type='button' class='slider-arrow-btn next-btn'><i class='fa-solid fa-angle-right'></i></button>",
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        autoplay: true,
                    },
                },
            ],
        });

        /*
       Latest Service Slider
       ============================*/
        $(".latest-service-slider").slick({
            slidesToShow: 3,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: false,
            slidesToScroll: 1,
            loop: true,
            dots: true,
            speed: 1500,
            prevArrow:
                "<button type='button' class='slider-arrow-btn prev-btn'><i class='fa-solid fa-angle-left'></i></button>",
            nextArrow:
                "<button type='button' class='slider-arrow-btn next-btn'><i class='fa-solid fa-angle-right'></i></button>",
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });

        /*
       Info Card Slider
       ============================*/
        $("#info_card_slider_wrapper").slick({
            slidesToShow: 3,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: true,
            slidesToScroll: 1,
            loop: true,
            dots: false,
            speed: 1500,
            prevArrow:
                "<button type='button' class='te-info-card-arrow-btn prev-btn'><i class='fa-solid fa-angle-left'></i></button>",
            nextArrow:
                "<button type='button' class='te-info-card-arrow-btn next-btn'><i class='fa-solid fa-angle-right'></i></button>",
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });

        /*
       Team Slider
       ============================*/
        $(".te-team-member-slider").slick({
            slidesToShow: 4,
            infinite: true,
            autoplay: false,
            draggable: true,
            arrows: false,
            slidesToScroll: 1,
            loop: true,
            dots: true,
            variableWidth: true,
            speed: 1500,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });

        $('#team_slider_prev').on('click', function(e) {
            e.preventDefault();
            $('.slick-prev').trigger('click');
        });
        $('#team_slider_next').on('click', function(e) {
            e.preventDefault();
            $('.slick-next').trigger('click');
        });
        /*
       Testimonial Slider
       ============================*/
        $("#home3_testimonial").slick({
            slidesToShow: 2,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: true,
            slidesToScroll: 1,
            loop: true,
            dots: true,
            speed: 1500,
            prevArrow:
                "<button type='button' class='testimonial-arrow-btn prev-btn'><i class='fa-solid fa-angle-left'></i></button>",
            nextArrow:
                "<button type='button' class='testimonial-arrow-btn next-btn'><i class='fa-solid fa-angle-right'></i></button>",
            responsive: [
                {
                    breakpoint: 1023,
                    settings: {
                        autoplay: true,
                        slidesToShow: 1,
                    },
                }
            ],
        });


        /*
       Testimonial Slider
       ============================*/
        $("#testimonial_one").slick({
            slidesToShow: 2,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: true,
            slidesToScroll: 1,
            loop: true,
            dots: true,
            speed: 1500,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        autoplay: true,
                        slidesToShow: 1,
                    },
                }
            ],
        });

        $('#testimonial_slider_prev').on('click', function(e) {
            e.preventDefault();
            $('.slick-prev').trigger('click');
        });
        $('#testimonial_slider_next').on('click', function(e) {
            e.preventDefault();
            $('.slick-next').trigger('click');
        });

        /*
       Testimonial Slider Two
       ============================*/
       $("#testimonial_two").slick({
        slidesToShow: 1,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: true,
        slidesToScroll: 2,
        loop: true,
        dots: false,
        speed: 1500,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    autoplay: true,
                    slidesToShow: 1,
                },
            }
        ],
    });

       /*
       Testimonial Slider Two
       ============================*/
       $("#portfolio_slider_two").slick({
        slidesToShow: 2,
        infinite: true,
        autoplay: false,
        draggable: true,
        arrows: false,
        slidesToScroll: 2,
        loop: true,
        dots: false,
        speed: 1500,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    autoplay: true,
                    slidesToShow: 1,
                },
            }
        ],
    });
        /*
       Related Portfolio Slider
       ============================*/
        $("#related_portfolio").slick({
            slidesToShow: 3,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: true,
            slidesToScroll: 1,
            loop: true,
            dots: false,
            speed: 1500,
            prevArrow:
                "<button type='button' class='portfolio-arrow-btn prev-btn'><i class='fa-solid fa-angle-left'></i></button>",
            nextArrow:
                "<button type='button' class='portfolio-arrow-btn next-btn'><i class='fa-solid fa-angle-right'></i></button>",
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 460,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        });


        /*
       Post Gallery Slider
       ============================*/
        $(".post-gallery").slick({
            slidesToShow: 1,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: true,
            slidesToScroll: 1,
            loop: true,
            dots: false,
            speed: 300,
            prevArrow:
                "<button type='button' class='post-gallery-btn prev-btn'><i class='fa fa-arrow-left'></i></button>",
            nextArrow:
                "<button type='button' class='post-gallery-btn next-btn'><i class='fa fa-arrow-right'></i></button>",
        });

        /*
       Client Logo Slider
       ============================*/
        $(".client-logo-slider-wrapper").slick({
            slidesToShow: 5,
            infinite: true,
            autoplay: true,
            draggable: true,
            arrows: false,
            slidesToScroll: 1,
            loop: true,
            dots: false,
            speed: 1500,
            rtl: false,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 460,
                    settings: {
                        slidesToShow: 2,
                    },
                },
            ],
        });

        /*
        Counter Js
        ============================*/
        $(".counter").counterUp({
            delay: 10,
            time: 1000,
        });

        /*
       Magnific Popup
       ============================*/
        $(".video-play").magnificPopup({
            disableOn: 700,
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
        });

        /*
        Jquery Wow Js
        ============================*/
        new WOW().init();

        /*
       Jquery Nice Select Js
       ============================*/
        $('select.select_option, select.wpcf7-select').niceSelect();

        /*
       Jquery Tilt Js
       ============================*/
        $('.tilt-animate').tilt({
            maxTilt: 12,
            perspective: 1500,
        })


        /*
		Portfolio Isotope Js
		============================*/	 
		$('.te-portfolio-filter').on( 'click', 'li', function() {
            $("li").removeClass("active");
            $(this).addClass("active");			
              var filterValue = $(this).attr('data-filter');
              $grid.isotope({ filter: filterValue });
            });				
            var $grid = $('.te-portfolio-isotope-wrapper').isotope({
              itemSelector: '.te-single-isotop',
              percentPosition: true,
              masonry: {
                columnWidth: '.te-single-isotop'
              }
            });
            $grid.imagesLoaded().progress( function() {
                $grid.isotope('layout');
            });
        /*
        Preeloader
        ============================*/
        $(window).on("load", function () {
            $("#preloader").fadeOut();
            $("#preloader-status").delay(200).fadeOut("slow");
            $("body").delay(200).css({"overflow-x": "hidden"});
        });

    });
})(jQuery);
