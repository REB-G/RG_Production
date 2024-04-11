const headerPages = document.querySelector('.js-header-pages')
const sectionToShowAtStartOnPages = document.querySelector('.js-section-to-show-at-start-pages')
const mainSection = document.querySelector('.js-main-section-pages')
const footer = document.querySelector('.js-footer-pages')

const start = () => {
    setTimeout(logoSectionToPages, 1000);
}

const logoSectionToPages = () => {
    headerPages.classList.remove("hide")
    sectionToShowAtStartOnPages.classList.add("hide-section-to-show-at-start-pages")
    mainSection.classList.remove("hide")
    footer.classList.remove("hide")
}

start()