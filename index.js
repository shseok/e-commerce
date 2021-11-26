$(document).ready(function () {

    // 배너
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    });

    // 상위 아이템
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

    // isotope filer
    let $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    $(".button-group").on("click", "button", function () {
        let filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    })

    // 새로운 아이템
    $("#new-items .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,// 밑에 점
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

    // 블로그 owl
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }
    })

    // 제품 수량
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $input = $(".qty .qty_input");
    // 클릭
    $qty_up.click(function (e) {
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval;
            });
        }
    });

    $qty_down.click(function (e) {
        if ($input.val() <= 10 && $input.val() > 1) {
            $input.val(function (i, oldval) {
                return --oldval;
            });
        }
    });
});