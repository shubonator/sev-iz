//Index-Slider
new Swiper('.index-slider-container', {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
        nextEl: '.index-slider-next',
        prevEl: '.index-slider-prev'
    },
    simulateTouch: false,
    breakpoints: {
        // when window width is >= 320px
        400: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    },
});
//Index Houses Slider
new Swiper('.index-houses-types-box', {
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
        nextEl: '.houses-next',
        prevEl: '.houses-prev'
    },
    breakpoints: {
        // when window width is >= 320px
        400: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    },
    simulateTouch: false,
    loop: true,
});

// Catalog scroll blur
$(window).on('scroll', function () {
    var pixs = $(document).scrollTop()
    pixs = pixs / 100;
    $(".catalog-bg-img, .services-pro-bg-img, .export-bg-img, .services-str-bg-img").css({ "-webkit-filter": "blur(" + pixs + "px)", "filter": "blur(" + pixs + "px)" });
});

//Project Slider
new Swiper('.project-gallery', {
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
        nextEl: '.project-slider-next',
        prevEl: '.project-slider-prev'
    },
    breakpoints: {
        // when window width is >= 320px
        400: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    },
    simulateTouch: false,
    loop: true,
});
//Plan Slider
new Swiper('.project-plan-gallery', {
    spaceBetween: 20,
    slidesPerView: 1,
    navigation: {
        nextEl: '.project-plan-slider-next',
        prevEl: '.project-plan-slider-prev'
    },
    breakpoints: {
        // when window width is >= 320px
        400: {
            slidesPerView: 1,
            spaceBetween: 0
        }
    },
    loop: true,
});
//Plan Active
$('.btn-plan, .close-btn-plan').click(function () {
    $('.project-plan-content, body').toggleClass("active");
});


//Services Price
$('.btn-price-project, .close-btn').click(function () {
    $('.btn-price-project-box, body').toggleClass("active");
});




//FAQ
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}



//Map
$(function () {
    $('.country').hover(function () {
        $('.point').addClass('hover');
    }, function () {
        $('.point').removeClass('hover');
    })
})