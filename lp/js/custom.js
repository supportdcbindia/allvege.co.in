jQuery(function () {
    "use strict";

    var wind = jQuery(window);

    /*----------------------------------------------------
      01. ScrollIt
    ----------------------------------------------------*/
    jQuery.scrollIt({
        upKey: 38,
        downKey: 40,
        easing: 'swing',
        scrollTime: 600,
        activeClass: 'active',
        onPageChange: null,
        topOffset: -70
    });

    /*----------------------------------------------------
      02. Preloader
    ----------------------------------------------------*/
    var CustomApp = {
        init: function () {
            this.handlePreloader();
        },
        handlePreloader: function () {
            // Kapanma koşulları: DOM hazır olunca, max 2 sn fallback
            jQuery(document).ready(function () {
                jQuery("#preloader").fadeOut(600);
                jQuery(".preloader-bg").delay(400).fadeOut(600);
            });

            // Ek güvenlik için max 2 saniye fallback
            setTimeout(function () {
                jQuery("#preloader").fadeOut(600);
                jQuery(".preloader-bg").delay(400).fadeOut(600);
            }, 2000);
        }
    };

    jQuery(document).ready(function () {
        CustomApp.init();
    });

    /*----------------------------------------------------
      03. Navbar scrolling background
    ----------------------------------------------------*/
    wind.on("scroll", function () {
        var bodyScroll = wind.scrollTop(),
            navbar = jQuery(".navbar"),
            logo = jQuery(".navbar .logo> img");
        if (bodyScroll > 100) {
            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/lp/logo/logo.webp');
        } else {
            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/lp/logo/logo.webp');
        }
    });

    /*----------------------------------------------------
      04. Close navbar-collapse when clicked
    ----------------------------------------------------*/
    jQuery(".navbar-nav .dropdown-item a").on('click', function () {
        jQuery(".navbar-collapse").removeClass("show");
    });

    /*----------------------------------------------------
      05. Close mobile menu "on click"
    ----------------------------------------------------*/
    var navMain = jQuery(".scroll-init");
    navMain.on("click", "a", null, function () {
        navMain.collapse('hide');
    });

    // Hide Mobile Menu after click
    jQuery(document).on('click', '.nav-link', function () {
        if (window.innerWidth <= 991) { // Bootstrap mobile & tablet
            jQuery('.navbar-collapse').collapse('hide');
        }
    });

    /*----------------------------------------------------
      06. Sections background image from data background
    ----------------------------------------------------*/
    jQuery(".bg-img, section").each(function () {
        if (jQuery(this).attr("data-background")) {
            jQuery(this).css("background-image", "url(" + jQuery(this).data("background") + ")");
        }
    });

    /*----------------------------------------------------
      07. Slider & Slider-Fade owlCarousel
    ----------------------------------------------------*/
    jQuery('.slider .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 5000,
        nav: true,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: { dots: false },
            600: { dots: false },
            1000: { dots: false }
        }
    });

    jQuery('.slider-fade .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        dots: true,
        margin: 0,
        autoplay: false,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        nav: true,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>']
    });

    // Slider Animation
    var owl = jQuery('.header .owl-carousel');
    owl.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2;
        jQuery('h6,h1,h2,h5,p,.button-1,.button-2,.button-3,.button-4').removeClass('animated fadeInUp');
        jQuery('.owl-item').not('.cloned').eq(item).find('h6,h1,h2,h5,p,.button-1,.button-2,.button-3,.button-4').addClass('animated fadeInUp');
    });

    /*----------------------------------------------------
      08-16. OwlCarousel (Team, Portfolio, Services, Blog, etc.)
    ----------------------------------------------------*/
    jQuery('.team .owl-carousel, .services .owl-carousel, .services2 .owl-carousel, .testimonials .owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        nav: false,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        }
    });

    jQuery('.blog .owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: true,
        dots: true,
        nav: false,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 4.5 }
        }
    });

    jQuery('.portfolio .owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        mouseDrag: true,
        autoplay: false,
        dots: true,
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 2 }
        }
    });

    jQuery(".portfolio-home-carousel").owlCarousel({
        loop: true,
        margin: 30,
        autoHeight: false,
        dots: false,
        nav: true,
        navText: ['<i class="ti-angle-left" aria-hidden="true"></i>', '<i class="ti-angle-right" aria-hidden="true"></i>'],
        responsive: {
            0: { items: 1 },
            600: { items: 1 },
            1000: { items: 1 }
        }
    });

    jQuery('.clients .owl-carousel').owlCarousel({
        loop: true,
        margin: 45,
        autoplay: true,
        autoplayTimeout: 3500,
        smartSpeed: 3500,
        dots: false,
        nav: false,
        responsive: {
            0: { items: 2 },
            600: { items: 3 },
            1000: { items: 5 }
        }
    });

    jQuery('.galleryscroll .owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        dots: false,
        nav: false,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 4 }
        }
    });

    /*----------------------------------------------------
      17. MagnificPopup
    ----------------------------------------------------*/
    jQuery(".img-zoom").magnificPopup({
        type: "image",
        closeOnContentClick: true,
        mainClass: "mfp-fade",
        gallery: { enabled: true }
    });
    jQuery('.magnific-youtube, .magnific-vimeo, .magnific-custom').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 300,
        preloader: false,
        fixedContentPos: false
    });

    /*----------------------------------------------------
      18. Accordion
    ----------------------------------------------------*/
    jQuery(".accordion-box").on("click", ".acc-btn", function () {
        var outerBox = jQuery(this).parents(".accordion-box");
        var target = jQuery(this).parents(".accordion");
        if (jQuery(this).next(".acc-content").is(":visible")) {
            jQuery(this).removeClass("active");
            jQuery(this).next(".acc-content").slideUp(300);
            jQuery(outerBox).children(".accordion").removeClass("active-block");
        } else {
            jQuery(outerBox).find(".accordion .acc-btn").removeClass("active");
            jQuery(this).addClass("active");
            jQuery(outerBox).children(".accordion").removeClass("active-block");
            jQuery(outerBox).find(".accordion").children(".acc-content").slideUp(300);
            target.addClass("active-block");
            jQuery(this).next(".acc-content").slideDown(300);
        }
    });

    /*----------------------------------------------------
      19. Isotope Masonry Gallery
    ----------------------------------------------------*/
    jQuery('.gallery-items').imagesLoaded(function () {
        jQuery('.gallery-filter li').on('click', function () {
            jQuery(".gallery-filter li").removeClass("active");
            jQuery(this).addClass("active");
            var selector = jQuery(this).attr('data-filter');
            jQuery(".gallery-items").isotope({
                filter: selector,
                animationOptions: { duration: 750, easing: 'linear', queue: false }
            });
            return false;
        });
        jQuery(".gallery-items").isotope({ itemSelector: '.single-item', layoutMode: 'masonry' });
    });

    /*----------------------------------------------------
      20. Animations on Scroll
    ----------------------------------------------------*/
    var contentWayPoint = function () {
        var i = 0;
        jQuery('.animate-box').waypoint(function (direction) {
            if (direction === 'down' && !jQuery(this.element).hasClass('animated')) {
                i++;
                jQuery(this.element).addClass('item-animate');
                setTimeout(function () {
                    jQuery('body .animate-box.item-animate').each(function (k) {
                        var el = jQuery(this);
                        setTimeout(function () {
                            var effect = el.data('animate-effect');
                            if (effect === 'fadeIn') { el.addClass('fadeIn animated'); }
                            else if (effect === 'fadeInLeft') { el.addClass('fadeInLeft animated'); }
                            else if (effect === 'fadeInRight') { el.addClass('fadeInRight animated'); }
                            else { el.addClass('fadeInUp animated'); }
                            el.removeClass('item-animate');
                        }, k * 200, 'easeInOutExpo');
                    });
                }, 100);
            }
        }, { offset: '85%' });
    };
    contentWayPoint();

    /*----------------------------------------------------
      21. YouTubePopUp
    ----------------------------------------------------*/
    jQuery("a.vid").YouTubePopUp();

    /*----------------------------------------------------
      22. Video Text Animation
    ----------------------------------------------------*/
    letterCarousel('.video-wrapper', '.video-text');
    function letterCarousel(parent_cls, child_cls) {
        var e = jQuery(parent_cls + ' ' + child_cls);
        jQuery(window).on("scroll", function () {
            if (jQuery(parent_cls).length) {
                var t = jQuery(document).scrollTop() + jQuery(window).height(),
                    n = jQuery(parent_cls).offset().top;
                if (n <= t) {
                    var i = jQuery(document).scrollTop() - n + jQuery(window).height();
                    var scroll = i - 150;
                    var img_scroll = scroll * 30 / 100;
                    e.css({ transform: "translateX(" + img_scroll + "px)" });
                }
            }
        });
    }

    /*----------------------------------------------------
      23. Scroll back to top
    ----------------------------------------------------*/
    var progressPath = document.querySelector('.progress-wrap path');
    var pathLength = progressPath.getTotalLength();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
    progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
    progressPath.style.strokeDashoffset = pathLength;
    progressPath.getBoundingClientRect();
    progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
    var updateProgress = function () {
        var scroll = jQuery(window).scrollTop();
        var height = jQuery(document).height() - jQuery(window).height();
        var progress = pathLength - (scroll * pathLength / height);
        progressPath.style.strokeDashoffset = progress;
    }
    updateProgress();
    jQuery(window).scroll(updateProgress);
    var offset = 150;
    var duration = 550;
    jQuery(window).on('scroll', function () {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.progress-wrap').addClass('active-progress');
        } else {
            jQuery('.progress-wrap').removeClass('active-progress');
        }
    });
    jQuery('.progress-wrap').on('click', function (event) {
        event.preventDefault();
        jQuery('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    });

});
