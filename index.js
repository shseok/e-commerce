$(document).ready(function () {

    // 배너
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // 아이템
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: true, // 밑에 화살표
        dots: false,
        responsive: { // px 단위 아이템 개수
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});