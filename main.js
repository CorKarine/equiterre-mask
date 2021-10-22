import './node_modules/bootstrap/dist/css/bootstrap.css';
import './node_modules/bootstrap/dist/js/bootstrap';
import gsap from "gsap";
import './main.scss';

const breakpoint = window.matchMedia( '(min-width:992px)' );
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


  let swiperTemoignage;
  let swiperNouvelle;
  const breakpointCheck = function(){
    if(breakpoint.matches== true) {
      if ( swiperTemoignage !== undefined ) swiperTemoignage.destroy(true, true);
      if ( swiperTemoignage !== undefined ) swiperNouvelle.destroy(true, true);
      return;
    } else if (breakpoint.matches == false){
      return activeSwiper();
    }
  }
  const activeSwiper = function(){
    swiperTemoignage = new Swiper('.swiper-temoignage',{ 
      centeredSlides: true,
      loop:true,
      breakpoints: {
            0 : {
              slidesPerView: 'auto',
              spaceBetween: 50,
            },
            768 : {
              slidesPerView: 'auto',
              spaceBetween: 80,
            },
          }
      });
      swiperNouvelle = new Swiper('.swiper-nouvelle',{ 
        centeredSlides: true,
        loop:true,
        breakpoints: {
              0 : {
                slidesPerView: 'auto',
                spaceBetween: 20,
              },
              768 : {
                slidesPerView: 'auto',
                spaceBetween: 50,
              },
            }
        });
  }
  breakpoint.addListener(breakpointCheck);

  breakpointCheck();

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
  
gsap.timeline({
    delay: 0,
    repeat: -1,
    yoyo: false,
    repeatDelay: 0,
    ease: "none",
  })

 .to('.plant',
    { x: '77vw'})
  .to('.plant',
    { rotateY: '180'})
    .to('.erreur',
    { color:'#041C04'})
  .to('.plant',
    { x: '5vw'})
  .to('.plant',
    { rotateY: '0'})
    .to('.erreur',
    { color:'#ECB338'})

   
    gsap.timeline({
      defaults:{}
    })
      .to ('.don--btn',{
    scale:1.2,
    yoyo: true,
    ease: Power0.easeNone,
    duration: 0.9,
    repeat:-1,
     });
  