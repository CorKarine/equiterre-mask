import './node_modules/bootstrap/dist/css/bootstrap.css';
import Swiper from 'swiper';
import 'swiper/css';
import 'gsap';
import './main.scss';
const swiper = new Swiper('.swiper-container',{
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 100,
        disableOnInteraction: false,
      },
  })