import './node_modules/bootstrap/dist/css/bootstrap.css';
import './node_modules/bootstrap/dist/js/bootstrap';
import 'gsap';
import './main.scss';
const swiper = new Swiper('.swiper-container',{
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
  });