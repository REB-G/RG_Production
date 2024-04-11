import {start} from './_header.js';

const headerDiscoverUsLink = document.querySelector('.js-discover-us-section')
const svgHeaderDiscoverUs = document.querySelector('.js-discover-us-svg')

const startForIndexPage = () => {
    document.addEventListener("DOMContentLoaded", (event) => {
        start()
        setTimeout(showHeaderDiscoverUsLink, 1000);
        showMainSection()
    })
}

const showMainSection = () => {
    svgHeaderDiscoverUs.addEventListener("click", (event) => {
        document.querySelector(".js-main-section").scrollIntoView({ behavior: "smooth" })
    })
}

const showHeaderDiscoverUsLink = () => {
    headerDiscoverUsLink.classList.remove("hide")
}

startForIndexPage()