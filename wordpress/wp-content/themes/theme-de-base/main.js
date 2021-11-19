const _=function(){const s=document.createElement("link").relList;if(s&&s.supports&&s.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))o(e);new MutationObserver(e=>{for(const r of e)if(r.type==="childList")for(const i of r.addedNodes)i.tagName==="LINK"&&i.rel==="modulepreload"&&o(i)}).observe(document,{childList:!0,subtree:!0});function c(e){const r={};return e.integrity&&(r.integrity=e.integrity),e.referrerpolicy&&(r.referrerPolicy=e.referrerpolicy),e.crossorigin==="use-credentials"?r.credentials="include":e.crossorigin==="anonymous"?r.credentials="omit":r.credentials="same-origin",r}function o(e){if(e.ep)return;e.ep=!0;const r=c(e);fetch(e.href,r)}};_();const a=window.matchMedia("(min-width:992px)"),w=document.querySelector(".navbar"),n=document.querySelector(".navbar-toggler");n.addEventListener("click",function(){w.classList.toggle("navbarOpen")});new Swiper(".swiper-container",{loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},autoplay:{delay:4e3,disableOnInteraction:!1}});let l,p;const v=function(){if(a.matches==!0){l!==void 0&&l.destroy(!0,!0),l!==void 0&&p.destroy(!0,!0);return}else if(a.matches==!1)return h()},h=function(){l=new Swiper(".swiper-temoignage",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}}),p=new Swiper(".swiper-nouvelle",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}})};a.addListener(v);v();let u=gsap.to(n,{duration:1,rotate:360,scale:1.1});u.pause();n.addEventListener("mouseenter",function(){u.play(0)});n.addEventListener("mouseleave",function(){u.pause(0)});gsap.timeline({delay:0,repeat:-1,yoyo:!1,repeatDelay:0,ease:"none"}).to(".animation",{x:"50vw"}).to(".plant",{rotateY:"180"}).to(".water",{opacity:"100%"}).to(".water",{y:"66vmin"}).to(".water",{opacity:"0%"}).to(".erreur",{color:"white"}).to(".animation",{x:"0vw"}).to(".plant",{rotateY:"0"}).from(".water",{y:"0vw"}).to(".water",{opacity:"100%"}).to(".water",{y:"66vmin"}).to(".water",{opacity:"0%"}).to(".erreur",{color:"#ECB338"});gsap.timeline({defaults:{}}).to(".don--coeur02",{y:-70,duration:1.5,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.2).to(".don--coeur03",{y:-70,duration:1.2,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.4).to(".don--coeur04",{y:-70,duration:1.6,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.6).to(".don--coeur05",{y:-70,duration:1.8,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.8).to(".don--coeur06",{y:-70,duration:1.3,ease:"power1.out",repeat:-1,opacity:0,scale:.7},2);let d=document.querySelector("select");class f{constructor(s){fetch(`https://equiterre.qc.lu/wp-json/wp/v2/posts?_embed&orderby=date&order=${s}&per_page=6`).then(e=>e.json()).then(e=>{let r="",i=document.querySelector(".hubNouvelle");for(let t=0;t<6;t++)t>0&&(r+=`<div class="hubNouvelle__cartes">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </div>`,i.innerHTML=r),t==0&&(document.querySelector(".hubNouvelle"),r+=`<div class="hubNouvelle__cartes hubNouvelle__cartes--first">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </div>`)});let c=document.querySelector(".plus__nouvelle");var o=6;c.addEventListener("click",function(){o+=6,fetch(`https://equiterre.qc.lu/wp-json/wp/v2/posts?_embed&orderby=date&order=${s}&per_page=${o}`).then(e=>e.json()).then(e=>{let r="",i=document.querySelector(".hubNouvelle");o>e.length&&(document.querySelector("button").style.display="none");for(let t=0;t<o;t++)t>0&&(r+=`<div class="hubNouvelle__cartes">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </div>`,i.innerHTML=r),t==0&&(document.querySelector(".hubNouvelle"),r+=`<div class="hubNouvelle__cartes hubNouvelle__cartes--first">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </div>`)})})}}new f(d.value);d.addEventListener("change",()=>{new f(d.value)});
