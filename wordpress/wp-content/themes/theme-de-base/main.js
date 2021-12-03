const w=function(){const l=document.createElement("link").relList;if(l&&l.supports&&l.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))n(r);new MutationObserver(r=>{for(const o of r)if(o.type==="childList")for(const e of o.addedNodes)e.tagName==="LINK"&&e.rel==="modulepreload"&&n(e)}).observe(document,{childList:!0,subtree:!0});function s(r){const o={};return r.integrity&&(o.integrity=r.integrity),r.referrerpolicy&&(o.referrerPolicy=r.referrerpolicy),r.crossorigin==="use-credentials"?o.credentials="include":r.crossorigin==="anonymous"?o.credentials="omit":o.credentials="same-origin",o}function n(r){if(r.ep)return;r.ep=!0;const o=s(r);fetch(r.href,o)}};w();const d=window.matchMedia("(min-width:992px)"),y=document.querySelector(".navbar"),c=document.querySelector(".navbar-toggler");c.addEventListener("click",function(){y.classList.toggle("navbarOpen")});new Swiper(".swiper-container",{loop:!0,navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},autoplay:{delay:4e3,disableOnInteraction:!1}});let a,f;const m=function(){if(d.matches==!0){a!==void 0&&a.destroy(!0,!0),a!==void 0&&f.destroy(!0,!0);return}else if(d.matches==!1)return b()},b=function(){a=new Swiper(".swiper-temoignage",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}}),f=new Swiper(".swiper-nouvelle",{centeredSlides:!0,loop:!0,breakpoints:{0:{slidesPerView:"auto",spaceBetween:50},768:{slidesPerView:"auto",spaceBetween:80}}})};d.addListener(m);m();let p=gsap.to(c,{duration:1,rotate:360,scale:1.1});p.pause();c.addEventListener("mouseenter",function(){p.play(0)});c.addEventListener("mouseleave",function(){p.pause(0)});gsap.timeline({delay:0,repeat:-1,yoyo:!1,repeatDelay:0,ease:"none"}).to(".animation",{x:"50vw"}).to(".plant",{rotateY:"180"}).to(".water",{opacity:"100%"}).to(".water",{y:"66vmin"}).to(".water",{opacity:"0%"}).to(".erreur",{color:"white"}).to(".animation",{x:"0vw"}).to(".plant",{rotateY:"0"}).from(".water",{y:"0vw"}).to(".water",{opacity:"100%"}).to(".water",{y:"66vmin"}).to(".water",{opacity:"0%"}).to(".erreur",{color:"#ECB338"});gsap.timeline({defaults:{}}).to(".don--coeur02",{y:-70,duration:1.5,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.2).to(".don--coeur03",{y:-70,duration:1.2,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.4).to(".don--coeur04",{y:-70,duration:1.6,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.6).to(".don--coeur05",{y:-70,duration:1.8,ease:"power1.out",repeat:-1,opacity:0,scale:.7},1.8).to(".don--coeur06",{y:-70,duration:1.3,ease:"power1.out",repeat:-1,opacity:0,scale:.7},2);let v=document.querySelector("select");class h{constructor(l){let s=6,n=document.querySelector(".plus__nouvelle");document.querySelector("select").addEventListener("change",()=>{s=6,n.style.display="block"}),console.log(s);let o=document.querySelector(".hubNouvelle").id;fetch(`https://equiterre.qc.lu/${o}/wp-json/wp/v2/posts?_embed&orderby=date&order=${l}&per_page=6`).then(e=>e.json()).then(e=>{let i="",u=document.querySelector(".hubNouvelle");for(let t=0;t<6;t++)t>0&&(i+=`<a href=${e[t].link} class="hubNouvelle__cartes">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`,u.innerHTML=i),t==0&&(document.querySelector(".hubNouvelle"),i+=`<a href=${e[t].link} class="hubNouvelle__cartes hubNouvelle__cartes--first">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`)}),n.addEventListener("click",function(){s+=6,console.log(s),fetch(`https://equiterre.qc.lu/${o}/wp-json/wp/v2/posts?_embed&orderby=date&order=${l}&per_page=${s}`).then(e=>e.json()).then(e=>{let i="",u=document.querySelector(".hubNouvelle");s>e.length&&(n.style.display="none");for(let t=0;t<s;t++)t>0&&(i+=`<a href=${e[t].link} class="hubNouvelle__cartes">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`,u.innerHTML=i),t==0&&(document.querySelector(".hubNouvelle"),i+=`<a href=${e[t].link} class="hubNouvelle__cartes hubNouvelle__cartes--first">
        <div class="hubNouvelle__cartes__img">
        <img src="${e[t]._embedded["wp:featuredmedia"][0].source_url}">
        </div>
        <div class="hubNouvelle__cartes__info">
        <h3 class="cartes--titre">${e[t].title.rendered}</h3>
        <div class="cartes--desc">
        ${e[t].excerpt.rendered}
        </div>
        </div>
      </a>`)})})}}new h(v.value);v.addEventListener("change",()=>{new h(v.value)});
