var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    autoplay: true,
    centeredSlidesBounds:true,
    coverflowEffect: {
      rotate: 0,
      stretch: 2,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    breakpoints: {
      // when window width is >= 768px
      768: {
        slidesPerView: 2,
        spaceBetween: 0
      }
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });