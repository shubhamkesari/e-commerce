$('.popular_categories_slick').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: true,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.features_product_slick').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    prevArrow: "<button type='button' class='slick-prev pull-left'><img src='assets/images/arrow-right.png' alt='' /></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><img src='assets/images/arrow-right.png' alt='' /></button>",
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.new_arrival_slick').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    prevArrow: "<button type='button' class='slick-prev pull-left'><img src='assets/images/arrow-right.png' alt='' /></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><img src='assets/images/arrow-right.png' alt='' /></button>",
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.gift_style_slick').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    dots: true,
    arrows: false,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.gift_card_slick').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: true,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.instagram_links_card_slick').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.store_location_slick').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fas fa-chevron-left'></i></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><i class='fas fa-chevron-right'></i></button>",
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.items_cart_slick').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    prevArrow: "<button type='button' class='slick-prev pull-left'><img src='assets/images/arrow-right.png' alt='' /></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><img src='assets/images/arrow-right.png' alt='' /></button>",
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.custom_product_slick').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    // autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: true,
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
$('.gift_coupan_slick').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    prevArrow: "<button type='button' class='slick-prev pull-left'><img src='assets/images/arrow-right.png' alt='' /></button>",
    nextArrow: "<button type='button' class='slick-next pull-right'><img src='assets/images/arrow-right.png' alt='' /></button>",
    responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});
// map script
function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}

$(document).ready(function() {

    // Add minus icon for collapse element which
    // is open by default
    $(".collapse.show").each(function() {
        $(this).prev(".card-header").find(".fas")
            .addClass("fa-chevron-circle-up").removeClass("fa-chevron-circle-down");
    });

    // Toggle plus minus icon on show hide
    // of collapse element
    $(".collapse").on('show.bs.collapse', function() {
        $(this).prev(".card-header").find(".fas")
            .removeClass("fa-chevron-down").addClass("fa-chevron-up");
    }).on('hide.bs.collapse', function() {
        $(this).prev(".card-header").find(".fas")
            .removeClass("fa-chevron-up").addClass("fa-chevron-down");
    });
});

//quantity number increment and decrement

var quantity_text = 0;

document.getElementById("quantity_number").innerText = quantity_text;

function increment() {
    quantity_text = quantity_text + 1;
    document.getElementById("quantity_number").innerText = quantity_text;
}

function decrement() {
    quantity_text = quantity_text - 1;
    document.getElementById("quantity_number").innerText = quantity_text;
}