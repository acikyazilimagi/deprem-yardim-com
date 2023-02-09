// SWIPER - CAROUSEL
import Swiper, * as Carousel from 'swiper';
window.Swiper = Swiper;
window.Carousel = Carousel;


// ONE CAROUSEL
// ------------------------------------------------------------------
if ($('.one-carousel').length) {
    var $swiperContainer = $('.one-carousel').closest('.carousel-field')

    function init(slider) {
        var el = slider.find('.one-carousel')[0],
            navNext = slider.find('.one-next')[0],
            navPrev = slider.find('.one-prev')[0],
            pag = slider.find('.one-pagination')[0]

        var $swiper = new Swiper(el, {
            slidesPerView: 1,
            speed: 1000,
            spaceBetween: 0,
            loop: true,
            modules: [Carousel.Navigation, Carousel.Pagination, Carousel.Autoplay, Carousel.EffectFade],
            effect: 'fade',
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: navNext,
                prevEl: navPrev
            },
            pagination: {
                el: pag,
                clickable: true,
            }
        });
    }

    if ($swiperContainer.length) {
        $swiperContainer.each(function (i, Slider) {
            init($(Slider));
        })
    }
}



// PRODUCT TEXT CAROUSEL
// ------------------------------------------------------------------
if ($('.marquee-carousel').length) {
    var $swiperContainer = $('.marquee-carousel').closest('.carousel-field')

    function init(slider) {
        var el = slider.find('.marquee-carousel')[0],
            navNext = slider.find('.marquee-next')[0],
            navPrev = slider.find('.marquee-prev')[0],
            pag = slider.find('.marquee-pagination')[0]

        var $swiper = new Swiper(el, {
            modules: [Carousel.Autoplay],
            speed: 3000,
            loop: true,
            allowTouchMove: false,
            slidesPerView: "auto",
            watchSlidesProgress: true,
            spaceBetween: 0,
            autoplay: {
                delay: 100,
                disableOnInteraction: false,
                pauseOnMouseEnter: false,
            },
        });
    }

    if ($swiperContainer.length) {
        $swiperContainer.each(function (i, Slider) {
            init($(Slider));
        })
    }
};
