src = "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"

var swiper = new Swiper(".books-slider", {
    loop: true,
    centeredSlider: true,
    autoplay: {
        delay: 9500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,

        },
        768: {
            slidesPerView: 2,

        },
        1024: {
            slidesPerView: 3,

        },
    },
});

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


const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });


});
const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));