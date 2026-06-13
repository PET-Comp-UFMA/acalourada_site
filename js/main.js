//Menu mobile
const toggler = document.querySelector('.site-toggler');
const navbar = document.querySelector('.site-navbar');

if (toggler && navbar) {

    toggler.addEventListener('click', () => {

        navbar.classList.toggle('active');

    });

}