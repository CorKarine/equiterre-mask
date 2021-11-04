const f=function(){const i=document.createElement("link").relList;if(i&&i.supports&&i.supports("modulepreload"))return;for(const t of document.querySelectorAll('link[rel="modulepreload"]'))e(t);new MutationObserver(t=>{for(const o of t)if(o.type==="childList")for(const l of o.addedNodes)l.tagName==="LINK"&&l.rel==="modulepreload"&&e(l)}).observe(document,{childList:!0,subtree:!0});function a(t){const o={};return t.integrity&&(o.integrity=t.integrity),t.referrerpolicy&&(o.referrerPolicy=t.referrerpolicy),t.crossorigin==="use-credentials"?o.credentials="include":t.crossorigin==="anonymous"?o.credentials="omit":o.credentials="same-origin",o}function e(t){if(t.ep)return;t.ep=!0;const o=a(t);fetch(t.href,o)}};f();const c=window.matchMedia("(min-width:992px)"),v=document.querySelector(".navbar"),n=document.querySelector(".navbar-toggler");n.addEventListener("click",function(){v.classList.toggle("navbarOpen")});new Swiper(".swiper-container",{loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},autoplay:{delay:4e3,disableOnInteraction:!1}});let s,d;const p=function(){if(c.matches==!0){s!==void 0&&s.destroy(!0,!0),s!==void 0&&d.destroy(!0,!0);return}else if(c.matches==!1)return m()},m=function(){s=new Swiper(".swiper-temoignage",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}}),d=new Swiper(".swiper-nouvelle",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}})};c.addListener(p);p();let u=gsap.to(n,{duration:1,rotate:360,scale:1.1});u.pause();n.addEventListener("mouseenter",function(){u.play(0)});n.addEventListener("mouseleave",function(){u.pause(0)});gsap.timeline({delay:0,repeat:-1,yoyo:!1,repeatDelay:0,ease:"none"}).to(".plant",{x:"77vw"}).to(".plant",{rotateY:"180"}).to(".erreur",{color:"#041C04"}).to(".plant",{x:"5vw"}).to(".plant",{rotateY:"0"}).to(".erreur",{color:"#ECB338"});gsap.timeline({defaults:{}}).to(".don--coeur02",{y:-70,duration:1.5,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.2).to(".don--coeur03",{y:-70,duration:1.2,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.4).to(".don--coeur04",{y:-70,duration:1.6,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.6).to(".don--coeur05",{y:-70,duration:1.8,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.8).to(".don--coeur06",{y:-70,duration:1.3,ease:"power1.out",repeat:-1,opacity:0,scale:.7},2);fetch("https://equiterre.qc.lu/wp-json/wp/v2/posts?_embed").then(r=>r.json()).then(r=>{let i="",a=document.querySelector(".hubNouvelle");for(let e=0;e<6;e++)e>0&&(i+=`<a href="${r[e].link}">
            <div class="hubNouvelle__cartes">
              <div class="hubNouvelle__cartes__img">
              <img src="${r[e]._embedded["wp:featuredmedia"][0].source_url}">
              </div>
              <div class="hubNouvelle__cartes__info">
              <h3 class="cartes--titre">${r[e].title.rendered}</h3>
              <div class="cartes--desc">
              ${r[e].excerpt.rendered}
              </div>
              </div>
            </div>
            </a>`,a.innerHTML=i),e==0&&(i+=`<a href="${r[e].link}">
            <div class="hubNouvelle__cartes hubNouvelle__cartes--first">
              <div class="hubNouvelle__cartes__img">
              <img src="${r[e]._embedded["wp:featuredmedia"][0].source_url}">
              </div>
              <div class="hubNouvelle__cartes__info">
              <h3 class="cartes--titre">${r[e].title.rendered}</h3>
              <div class="cartes--desc">
              ${r[e].excerpt.rendered}
              </div>
              </div>
            </div>
            </a>`)});
