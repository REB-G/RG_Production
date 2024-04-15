const headerPages = document.querySelector('.js-header-pages')
const sectionToShowAtStartOnPages = document.querySelector('.js-section-to-show-at-start-pages')
const mainSection = document.querySelector('.js-main-section-pages')

const startLogoSectionToPages = () => {
    setTimeout(logoSectionToPages, 1000);
}

const logoSectionToPages = () => {
    headerPages.classList.remove("hide")
    sectionToShowAtStartOnPages.classList.add("hide-section-to-show-at-start-pages")
    mainSection.classList.remove("hide")
}

if(sectionToShowAtStartOnPages) {
    startLogoSectionToPages()
}
