let navbar = document.querySelector('.header .navbar');



document.querySelector('#main-btn').onclick = () => {

    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}

window.onscroll = () => {

    navbar.classList.remove('active');
    accountBox.classList.remove('active');
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

document.querySelector('#close-update').onclick = () => {
    document.querySelector('.edit-product-form').style.display = 'none';
    window.location.href = 'admin_products.php';
}