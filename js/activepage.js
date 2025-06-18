const navLinks = document.querySelectorAll('.nav-link');
const activePage = window.location.pathname;

navLinks.forEach(navLink => {

    const navLinkPathname = new URL(navLink.href).pathname;

    if ((activePage === navLinkPathname) || (activePage === '/' && navLinkPathname === './')){
        navLink.classList.add('active-nav');
    }
});