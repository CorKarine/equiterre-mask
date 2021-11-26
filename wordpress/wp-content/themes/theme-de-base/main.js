const h=function(){const i=document.createElement("link").relList;if(i&&i.supports&&i.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))s(r);new MutationObserver(r=>{for(const e of r)if(e.type==="childList")for(const o of e.addedNodes)o.tagName==="LINK"&&o.rel==="modulepreload"&&s(o)}).observe(document,{childList:!0,subtree:!0});function l(r){const e={};return r.integrity&&(e.integrity=r.integrity),r.referrerpolicy&&(e.referrerPolicy=r.referrerpolicy),r.crossorigin==="use-credentials"?e.credentials="include":r.crossorigin==="anonymous"?e.credentials="omit":e.credentials="same-origin",e}function s(r){if(r.ep)return;r.ep=!0;const e=l(r);fetch(r.href,e)}};h();const u=window.matchMedia("(min-width:992px)"),w=document.querySelector(".navbar"),n=document.querySelector(".navbar-toggler");n.addEventListener("click",function(){w.classList.toggle("navbarOpen")});new Swiper(".swiper-container",{loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},autoplay:{delay:4e3,disableOnInteraction:!1}});let a,v;const f=function(){if(u.matches==!0){a!==void 0&&a.destroy(!0,!0),a!==void 0&&v.destroy(!0,!0);return}else if(u.matches==!1)return y()},y=function(){a=new Swiper(".swiper-temoignage",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}}),v=new Swiper(".swiper-nouvelle",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}})};u.addListener(f);f();let d=gsap.to(n,{duration:1,rotate:360,scale:1.1});d.pause();n.addEventListener("mouseenter",function(){d.play(0)});n.addEventListener("mouseleave",function(){d.pause(0)});gsap.timeline({delay:0,repeat:-1,yoyo:!1,repeatDelay:0,ease:"none"}).to(".animation",{x:"50vw"}).to(".plant",{rotateY:"180"}).to(".water",{opacity:"100%"}).to(".water",{y:"66vmin"}).to(".water",{opacity:"0%"}).to(".erreur",{color:"white"}).to(".animation",{x:"0vw"}).to(".plant",{rotateY:"0"}).from(".water",{y:"0vw"}).to(".water",{opacity:"100%"}).to(".water",{y:"66vmin"}).to(".water",{opacity:"0%"}).to(".erreur",{color:"#ECB338"});gsap.timeline({defaults:{}}).to(".don--coeur02",{y:-70,duration:1.5,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.2).to(".don--coeur03",{y:-70,duration:1.2,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.4).to(".don--coeur04",{y:-70,duration:1.6,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.6).to(".don--coeur05",{y:-70,duration:1.8,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.8).to(".don--coeur06",{y:-70,duration:1.3,ease:"power1.out",repeat:-1,opacity:0,scale:.7},2);let p=document.querySelector("select");class m{constructor(i){let l=document.querySelector(".hubNouvelle").id;fetch(`https://equiterre.qc.lu/${l}/wp-json/wp/v2/posts?_embed&orderby=date&order=${i}&per_page=6`).then(e=>e.json()).then(e=>{let o="",c=document.querySelector(".hubNouvelle");for(let t=0;t<6;t++)t>0&&(o+=`<a href=${e[t].link} class="hubNouvelle__cartes">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`,c.innerHTML=o),t==0&&(document.querySelector(".hubNouvelle"),o+=`<a href=${e[t].link} class="hubNouvelle__cartes hubNouvelle__cartes--first">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`)});let s=document.querySelector(".plus__nouvelle");var r=6;s.addEventListener("click",function(){r+=6,fetch(`https://equiterre.qc.lu/${l}/wp-json/wp/v2/posts?_embed&orderby=date&order=${i}&per_page=${r}`).then(e=>e.json()).then(e=>{let o="",c=document.querySelector(".hubNouvelle");r>e.length&&(s.style.display="none");for(let t=0;t<r;t++)t>0&&(o+=`<a href=${e[t].link} class="hubNouvelle__cartes">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`,c.innerHTML=o),t==0&&(document.querySelector(".hubNouvelle"),o+=`<a href=${e[t].link} class="hubNouvelle__cartes hubNouvelle__cartes--first">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`)})})}}new m(p.value);p.addEventListener("change",()=>{new m(p.value)});
