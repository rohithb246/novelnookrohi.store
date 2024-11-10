src = "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"


let menu = document.querySelector('#main-btn');
let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .nav');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".mySwiper", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

document.querySelector('#user-btn').onclick = () => {
    accountBox.classList.toggle('active');
}
const toggleButton = document.getElementById('toggleButton');
const content = document.getElementById('content');

toggleButton.addEventListener('click', () => {
    if (content.style.display === 'none') {
        content.style.display = 'block';
    } else {
        content.style.display = 'none';
    }
});