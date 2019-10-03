window.addEventListener('scroll', fixNav);

const nav = document.querySelector('.nav');
const topOfNav = nav.offsetTop;

function fixNav() {
    if(window.scrollY >= topOfNav) {
        console.log(topOfNav);
        document.body.style.paddingTop = nav.offsetHeight
        document.body.classList.add('fixed-nav');
    } else {
        document.body.classList.remove('fixed-nav');
    }
}