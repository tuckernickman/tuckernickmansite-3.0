function validateForm(){
    var form = document.forms["contactForm"];
    var fieldisValid = true;

    // Check every required field regardless of type
    var elements = form.elements;
    for (var i = 0; i < elements.length; i++) {
        var el = elements[i];
        if (el.type === 'hidden' || el.type === 'submit' || el.type === 'button') {
            continue;
        }
        if (el.hasAttribute('required') && el.value.trim() === '') {
            el.classList.add('required-input');
            fieldisValid = false;
        } else {
            el.classList.remove('required-input');
        }
    }

    if (!fieldisValid) {
        $('.alert').removeClass('d-none').addClass('show');
        return;
    }

    // requestSubmit fires HTML5 constraint validation (e.g. email format)
    if (form.requestSubmit) {
        form.requestSubmit();
    } else {
        form.submit();
    }
}

function closeAlert() {
    $('.alert').addClass('d-none').removeClass('show');
}