// Initialize hamburger menu
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.header__hamburger');
    const siteNav = document.querySelector('.header__nav');

    if (hamburger && siteNav) {
    hamburger.addEventListener('click', () => {
        siteNav.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
    }
});
