$(document).ready(function () {
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    $(".hire_slider").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        dots: false,
        loop: true,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 1
            },
            600: {
                items: 2
            },
            1024: {
                items: 3
            }
        }
    });

    $(".go-top-btn").on('click', function (e) {
        e.preventDefault();
        var target = $(".get_quote");

        $('html, body').animate({
            scrollTop: ($(target).offset().top - 50),
        }, 200);
    });

});