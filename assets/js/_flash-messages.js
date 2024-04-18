const formContactSent = document.getElementById('js-form-contact-sent-message');

if (formContactSent) {
    setTimeout(() => {
        formContactSent.classList.add('hide-form-contact-sent-success')
    }, 3000);
}