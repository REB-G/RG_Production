const navMenuSvg = document.querySelector('.js-phone-nav-menu-svg')
const navCloseMenuSvg = document.querySelector('.js-phone-nav-close-menu-svg')
const navbar = document.querySelector('.js-nav')

const start = () => {
    showNavBar()
    openAndCloseNavMenu()

}

const showNavBar = () => {
navbar.classList.remove("hide")
}

const openAndCloseNavMenu = () => {
navMenuSvg.addEventListener('click', (event) => {
    navbar.classList.remove('hide-menu-for-phone-size')
    navbar.classList.add('show-phone-nav')
    navCloseMenuSvg.classList.remove('hide-phone-nav-svg')
    navMenuSvg.classList.add('hide-phone-nav-svg')
})
navCloseMenuSvg.addEventListener('click', (event) => {
    navbar.classList.add('hide-menu-for-phone-size')
    navbar.classList.remove('show-phone-nav')
    navCloseMenuSvg.classList.add('hide-phone-nav-svg')
    navMenuSvg.classList.remove('hide-phone-nav-svg')
})
}

export { start };