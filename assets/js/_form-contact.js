const formContactSection = document.querySelector('.js-form-contact')
const linkToFormContact = document.querySelector('.js-link-to-form-contact')
const errorMessageLinkToFormContact = document.querySelector('.js-error-message-link-to-form-contact')
const formContact = document.querySelector('#form-contact')
const submitButtonFormContact = document.querySelector('.js-submit-button-form-contact')

const startFormContact = () => {
    showFormContact()
    submitFormContact()
}

const showFormContact = () => {
    linkToFormContact.addEventListener('click', () => {
        formContactSection.classList.remove('form-contact-hidden')
    })

    errorMessageLinkToFormContact.addEventListener('click', () => {
        formContactSection.classList.remove('form-contact-hidden')
    })
}

startFormContact()
