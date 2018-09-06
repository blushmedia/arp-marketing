$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  draggable: false,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  fade: true,
  dots: false,
  centerMode: false,
  focusOnSelect: true
});
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2000,
  variableWidth: true
});
$('.autoplay-group').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 2500,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2500
      }
    }
  ]
});

//Project slider

$('.slider-main').slick({
  slidesToShow: 1,
  // adaptiveHeight: true,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  asNavFor: '.slider-thumb'
});
$('.slider-thumb').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-main',
  arrows: false,
  dots: false,
  centerMode: true,
  focusOnSelect: true
});

//Services slider

$('.slider-service-info').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  draggable: false,
  fade: true,
  asNavFor: '.slider-service'
});
$('.slider-service').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  draggable: false,
  asNavFor: '.slider-service-info',
  dots: false,
  arrows: false,
  centerMode: false,
  focusOnSelect: true,
  variableWidth: false,
  responsive: [
    {
      breakpoint: 599,
      settings: {
        slidesToShow: 1,
        arrows: false,
        infinite: true,
        draggable: true,
        dots: false,
        focusOnSelect: true
      }
    }
  ]
});