import $ from 'jquery';
$(document).ready(function () {
  var swiper = new Swiper('.products', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 3,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    breakpoints: {
      1190: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 10
      },
      970: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 10
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 10
      },
      320: {
        slidesPerView: 1,
        spaceBetween: 10
      }
    }
  });
});
