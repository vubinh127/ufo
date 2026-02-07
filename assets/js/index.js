$(document).ready(function() {
    $('.navbar-collapse').on('click', function(e) {
        if ($(e.target).hasClass('navbar-collapse')) {
            $('.navbar-toggler').click();
        }
    });

    // Đóng menu khi click vào close button area
    $('.navbar-collapse').on('click', function(e) {
        const offset = $(this).offset();
        const width = $(this).outerWidth();

        if (e.pageX >= offset.left + width - 52 &&
            e.pageX <= offset.left + width &&
            e.pageY >= offset.top &&
            e.pageY <= offset.top + 52) {
            $('.navbar-toggler').click();
        }
    });

    $('.navbar-nav .nav-link:not(.dropdown-toggle)').on('click', function() {
        if ($(window).width() < 1200) {
            $('.navbar-toggler').click();
        }
    });

    $('.navbar-collapse').on('show.bs.collapse', function() {
        $('body').css('overflow', 'hidden');
    });

    $('.navbar-collapse').on('hidden.bs.collapse', function() {
        $('body').css('overflow', '');
    });
});

var swiperBanner = new Swiper(".banner-swiper", {
    pagination: {
        el: ".swiper-pagination",
    },
});
