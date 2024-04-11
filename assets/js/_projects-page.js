import {start} from './_header.js';

const logoNavBar = document.querySelector('.js-nav-logo')
const logoHeader = document.querySelector('.js-header-logo')
const header = document.querySelector('.js-header')
const mainProjectsPage = document.querySelector('.js-main-projects-page')

const startProjectsPage = () => {
    document.addEventListener("DOMContentLoaded", (event) => {
        start()
        setTimeout(showNavLogoAndMainOfProjectsPage, 1000)
    })
}

const showNavLogoAndMainOfProjectsPage = () => {
    logoNavBar.classList.remove('hide-logo')
    logoNavBar.classList.add('nav__logo')
    logoHeader.classList.add("hide-logo")
    header.classList.remove("header-projects")
    header.classList.add("header-projetcs-after-js")
    mainProjectsPage.classList.add('main-projects-page')
    mainProjectsPage.classList.remove('hide-main-projects-page')
}

startProjectsPage()
