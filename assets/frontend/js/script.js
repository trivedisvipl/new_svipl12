$(window).scroll(function (event) {
    if($(window).scrollTop() > 500) {
        $(".slideIn").addClass("animate__slideInDown");
    } else {
        $(".slideIn").removeClass("animate__slideInDown");
    }
});
$(window).scroll(function (event) {
    if($(window).scrollTop() > 500) {
        $(".main-header-nav").addClass("sub-header");
    } else {
        $(".main-header-nav").removeClass("sub-header");
    }
});

$(window).scroll(function (event) {
    if($(window).scrollTop() > 500) {
        $(".slideIn").addClass("animate__slideInDown");
    } else {
        $(".slideIn").removeClass("animate__slideInDown");
    }
});
$(window).scroll(function (event) {
    if($(window).scrollTop() > 500) {
        $(".mobile-menu").addClass("sub-header");
    } else {
        $(".mobile-menu").removeClass("sub-header");
    }
});


$('.hero-section-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    items:1,
});
$('.testimonials-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    items:1,
    dots : false,
    navText: ["<i class='bi bi-arrow-left-circle'></i>","<i class='bi bi-arrow-right-circle'></i>"],
});
$('.client-slider').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    dots:false,
    responsive : {
        0: {
            items:1,
        },
        576: {
            items:2,
        },
        768: {
            items:2,
        },
        991 : {
            items:3,
        },
    }
})

$('.blog-slider').slick({
    variableWidth: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: false,
    autoplaySpeed: 2300,
    speed: 6000,
    pauseOnHover: true,
    margin: 30,
    center: true,
    centerPadding : '300px',
    draggable : true,
    responsive: [
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,                
                centerPadding : '0px',
                speed: 3000,
                autoplaySpeed: 1.300,
            }
        }
    ]
});

jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 5000
    });
});

$('.tech-slider').slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    dots: false,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 4500,
    cssEase: 'linear',
    pauseOnHover: false,
    variableWidth: true,
    rtl: false
});

// Replace tech sliders with a CSS marquee for continuous, performant scrolling.
function initMarquees() {
    var speedPxPerSec = 75; // adjust speed (px per second)
    ['.tech-slider-reversed'].forEach(function(selector){
        var reverse = selector.indexOf('reversed') !== -1;
        $(selector).each(function(){
            var $container = $(this);
            if ($container.find('.marquee__inner').length) return; // already inited

            // take existing children (.slide-item) and wrap into marquee inner
            var $items = $container.children().detach();
            var $inner = $('<div class="marquee__inner"></div>');
            $inner.append($items).append($items.clone()); // duplicate for seamless loop
            $container.append($inner);
            if (reverse) $inner.addClass('marquee--reverse');

            // measure width after images load (small timeout to allow layout)
            setTimeout(function(){
                var total = 0;
                $inner.children().each(function(){ total += $(this).outerWidth(true); });
                // The duplicated content is twice the original; we translate by 50% of inner width.
                // Duration should be based on original content width (not duplicated twice)
                var originalWidth = total / 2 || total;
                // Use same duration calculation for both normal and reversed marquees
                var duration = Math.max(8, Math.round(originalWidth / speedPxPerSec));
                $inner[0].style.setProperty('--marquee-duration', duration + 's');
            }, 120);
        });
    });
}

// init marquees
$(document).ready(function(){ initMarquees(); });

AOS.init();


$(document).on('click', '.menu-btn', function(){
    $('.burger').addClass('burger-2');
});

$(document).on('click', '.removeBurger', function(){
    $('.burger').removeClass('burger-2');
});

$('#staticBackdrop').on('show.bs.offcanvas', function () {
  $("body").addClass("menu-open");
});

$('#staticBackdrop').on('hidden.bs.offcanvas', function () {
  $("body").removeClass("menu-open");
});



const dropdown = document.querySelector('.has-dropdown');

dropdown.addEventListener('click', function(e){
  if(window.innerWidth < 1024){
    this.classList.toggle('open');
  }
});