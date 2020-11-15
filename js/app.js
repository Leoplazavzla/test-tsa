// HEADER CODE

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-link');
    const navLinks = document.querySelectorAll('.nav-link li');
    
    burger.addEventListener('click',() =>{
        nav.classList.toggle('nav-active');
        
        // ANIMATE LINKS
        navLinks.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = '';
            }else{
                link.style.animation = 'navLinkFade 0.5s ease forwards $(index / 7 + 0.5)s';
            }
            
        });

        // BURGER ANIMATION
        burger.classList.toggle('toggle'); 
    });
    
}

navSlide();

// END HEADER CODE 

// Cookie consent code 
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

console.log(cookieButton);

cookieButton.addEventListener("click" , () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout( () => {
    if(!localStorage.getItem("cookieBannerDisplayed")){
        cookieContainer.classList.add("active");

    }
}, 1000);

