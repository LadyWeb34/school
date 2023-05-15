// resposive navbar
let btnMenu = document.getElementById('menu-btn')
let navbar = document.getElementById('menu-navbar')
btnMenu.addEventListener('click', function(){
    if(!navbar.classList.contains('navbar--active')){
        navbar.classList.add('navbar--active')
    }else if(navbar.classList.contains('navbar--active')){
        navbar.classList.remove('navbar--active')
    }
})
// modal
const myModal = new HystModal({
    linkAttributeName: "data-hystmodal",
    // настройки (не обязательно), см. API
});