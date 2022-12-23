(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();

    AOS.init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Smooth scrolling on the navbar links
    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1000, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });


    // Smooth scrolling on the navbar links
    $(".kompetensi .dekstop a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1000, 'easeInOutExpo');
            
            if ($(this).parents('.kompetensi').length) {
                $('.kompetensi .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });

    // Smooth scrolling on the navbar links
    $(".kompetensi .mobile a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1000, 'easeInOutExpo');
            
            if ($(this).parents('.kompetensi').length) {
                $('.kompetensi .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 300, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    var cardSlider = new Swiper('.arrow-header-slider', {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        slidesPerView: 3,
        spaceBetween: 0,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            // when window is <= 991px
            991: {
                slidesPerView: 3,
                spaceBetween: 0,
            },
        }
    });


    var cardSlider = new Swiper('.kompetensi-slider', {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
          },
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
            // when window width is >= 480px
          
            // when window width is >= 640px
            600: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            767: {
                slidesPerView: 1,
                spaceBetween: 30
            },
            // when window is <= 991px
            991: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
        }
    });


    var cardSlider = new Swiper('.mitra-slider', {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
          },
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
          },
        slidesPerView: 6,
        spaceBetween: 80,
        breakpoints: {
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            600: {
                slidesPerView: 3,
                spaceBetween: 60
            },
            767: {
                slidesPerView: 4,
                spaceBetween: 60
            },
            // when window is <= 991px
            991: {
                slidesPerView: 6,
                spaceBetween: 60,
            },
        }
    });

new Swiper('.tentang-kami-slider', {
    speed: 400,
    loop: true,
    autoplay:{
        delay: 5000,
        disableOnInteraction: false
      },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
    slidesPerView: 1,
    spaceBetween: 20,
  });


  var cardSlider = new Swiper('.visi-slider', {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev'
    // },
    slidesPerView: 3,
    spaceBetween: 20,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        // when window is <= 991px
        991: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    }
});

  var cardSlider = new Swiper('.misi-slider', {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev'
    // },
    slidesPerView: 3,
    spaceBetween: 20,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        // when window is <= 991px
        991: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    }
});


  var cardSlider = new Swiper('.ekskul-slider', {
    autoplay: {
    	delay: 4000,
    	disableOnInteraction: false
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 4,
    spaceBetween: 30,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        767: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window is <= 991px
        991: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

var cardSlider = new Swiper('.prestasi-slider', {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 5,
    spaceBetween: 50,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        767: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window is <= 991px
        991: {
            slidesPerView: 4,
            spaceBetween: 20,
        },
        1199: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1399: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    }
});
var cardSlider = new Swiper('.gallery-slider', {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 3,
    slidesPerColumn: 2,
    slidesPerGroup: 1,
    spaceBetween: 30,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        767: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        // when window is <= 991px
        991: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});


var cardSlider = new Swiper('.kesan-pesan-slider', {
    autoplay: false,
    // {
    // 	delay: 4000,
    // 	disableOnInteraction: false
    // },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 6,
    spaceBetween: 30,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 1,
            spaceBetween: 0
        },
        767: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        // when window is <= 991px
        991: {
            slidesPerView: 1,
            spaceBetween: 30,
        },
        1199: {
            slidesPerView: 5,
            spaceBetween: 30,
        },
        1399: {
            slidesPerView: 6,
            spaceBetween: 30,
        },
    }
});


var cardSlider = new Swiper('.mitra-pendukung-slider', {
    autoplay:  {
        delay: 5000,
        disableOnInteraction: false
      },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 6,
    spaceBetween: 80,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 3,
            spaceBetween: 60
        },
        767: {
            slidesPerView: 4,
            spaceBetween: 60
        },
        // when window is <= 991px
        991: {
            slidesPerView: 5,
            spaceBetween: 60,
        },
    }
});

    $('.visi a').click(function(){
        var this_src = $(this).children('img').attr('src');
        $('#img-visi').attr('src',this_src);

        return false;
    });

    $('.misi a').click(function(){
        var this_src = $(this).children('img').attr('src');
        $('#img-misi').attr('src',this_src);

        return false;
    });
    
})(jQuery);


const portfolioLightbox = GLightbox({
    selector: '.gallery-lightbox'
  });
