const formContactSection = document.querySelector('.js-form-contact')
const linkToFormContact = document.querySelector('.js-link-to-form-contact')
const errorMessageLinkToFormContact = document.querySelector('.js-error-message-link-to-form-contact')
const formContact = document.querySelector('#form-contact')

const watchIfContactPage = () => {
    if (formContactSection) {
        showFormContact()
    }
}

const showFormContact = () => {
    linkToFormContact.addEventListener('click', () => {
        formContactSection.classList.remove('form-contact-hidden')
    })
    
    if (errorMessageLinkToFormContact) {
        errorMessageLinkToFormContact.addEventListener('click', () => {
            formContactSection.classList.remove('form-contact-hidden')
        })
    }
}

watchIfContactPage()
