 let vh = window.innerHeight * 0.01;
 document.documentElement.style.setProperty('--vh', `${vh}px`);



 $(document).ready(function () {
   var swiper = new Swiper(".hero-js", {
     effect: "fade",
     centeredSlides: true,
     speed: 1000,
     allowTouchMove: false,
     autoplay: {
       delay: 5000,
       disableOnInteraction: false,
     },
   });

 });

 function checkPosition() {
   if (window.matchMedia('(max-width: 575px)').matches) {
     $('.hero-js').remove();
   } else {
     $('.hero-mobile-bg').remove();
   }
 }