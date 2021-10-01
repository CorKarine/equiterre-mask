import './node_modules/bootstrap/dist/css/bootstrap.css';
import './node_modules/bootstrap/dist/js/bootstrap';
import gsap from "gsap";
import './main.scss';

const navbar = document.querySelector(".navbar");
const hamburger = document.querySelector(".navbar-toggler");
hamburger.addEventListener('click', function(){
  navbar.classList.toggle('navbarOpen');
});
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

  let animHamburger = gsap.to(hamburger,{
    duration:1,
    rotate:360,
    scale:1.1,
  });
  animHamburger.pause();
  hamburger.addEventListener('mouseenter', function(){
    animHamburger.play(0);
  });
  
  hamburger.addEventListener('mouseleave', function(){
    animHamburger.pause(0);
  });
  
  