$('.slick-projects').slick({
    dots: true,
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    adaptiveHeight: true,
    mobileFirst: true,
    variableWidth: true,
    width: '300px',
    responsive: [
        {
            breakpoint: 960,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                adaptiveHeight: true,
                mobileFirst: true,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                adaptiveHeight: true,
                mobileFirst: true,
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                adaptiveHeight: true,
                mobileFirst: true,
                slidesToShow: 1
            }
        }
    ]
});

$('.slick-tribe').slick({
    dots: false,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 3,
    mobileFirst: true,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 960,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: true,
                centerPadding: '40px',
                adaptiveHeight: true,
                mobileFirst: true,
                slidesToShow: 1
            }
        }
    ]
});