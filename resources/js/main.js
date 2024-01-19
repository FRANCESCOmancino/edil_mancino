let navbar = document.querySelector("#navbar");
let logoJS = document.querySelector("#logoJS");
let jsText = document.querySelectorAll(".jsText");
if (navbar) {
    window.addEventListener("scroll", () => {
        
        if (window.scrollY > 0) {
            navbar.classList.add("bg-white");
            jsText.forEach(el=>{
                el.classList.add("secondary")
            })
            
                logoJS.src = `../../image/logo_bianco.png`               
                logoJS.classList.add("transition05")             
            

        }else{
            navbar.classList.remove("bg-white")
            jsText.forEach(el=>{
                el.classList.remove("secondary")
            })
            logoJS.src = `../../image/logo_definitivo.png`               
            
        }
    })
}


//? SWIPER
let swiper1 = document.querySelector('#swiper1');
import Swiper from 'swiper/bundle';
  
if (swiper1) {
  
  var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
}

// card buttn hover

let btnCard = document.querySelectorAll('.btnCard');
let allCard = document.querySelectorAll('.allCard');
if (btnCard) {
  allCard.forEach(el=>{
    el.addEventListener('mouseenter', function() {
      btnCard[el.id].classList.add('active'); // Aggiungi la classe quando il mouse entra
    });
  
    el.addEventListener('mouseleave', function() {
      btnCard[el.id].classList.remove('active'); // Aggiungi la classe quando il mouse entra
    });
  
  })
}

  