const menu = document.querySelector('.menu-bar')
const navLinks = document.querySelector('.head_nav')

menu.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
})