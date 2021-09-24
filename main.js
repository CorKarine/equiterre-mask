import './node_modules/bootstrap/dist/css/bootstrap.css';
import './node_modules/bootstrap/dist/js/bootstrap';
import 'swiper';
import 'gsap';
import './main.scss';
const swiper = new Swiper('.swiper-container',{
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 2000,
        disableOnInteraction: false,
      },
  });