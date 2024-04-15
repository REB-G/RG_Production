const phoneMenuSvg = document.querySelector('.js-phone-menu-svg')
const closePhoneMenuSvg = document.querySelector('.js-close-phone-menu-svg')
const headerPagesNav = document.querySelector('.js-header-pages-nav')

const phoneMenu = () => {
    phoneMenuSvg.addEventListener('click', () => {
        phoneMenuSvg.classList.add('hide')
        closePhoneMenuSvg.classList.remove('hide')
        headerPagesNav.classList.add('show')
        headerPagesNav.classList.remove('hide')
    })

    closePhoneMenuSvg.addEventListener('click', () => {
        closePhoneMenuSvg.classList.add('hide')
        phoneMenuSvg.classList.remove('hide')
        headerPagesNav.classList.remove('show')
        headerPagesNav.classList.add('hide')
    })
}

if(phoneMenuSvg) {
    phoneMenu()
}
