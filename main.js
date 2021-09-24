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
  hamburger.addEventListener('mouseenter', function(){
    gsap.fromTo(hamburger,{
      opacity:1,
      duration:1
    },
    {
      opacity:0.1
    })
  });
  
  hamburger.addEventListener('mouseout', function(){
    gsap.to(hamburger,{
      opacity:1,
    })
  });
  
  