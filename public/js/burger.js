const menuToggle = document.querySelector('.menu-toggle');
const siteNav = document.querySelector('nav');

menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('open');
    siteNav.classList.toggle('nav-open');
})