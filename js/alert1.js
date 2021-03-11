function validateForm(){
    fieldisValid = true;
    fieldisValidated = 0;
    for(i = 0; i < document.forms["contactForm"].getElementsByTagName("input").length; i++) {
        if(document.forms["contactForm"][i].type === "text" || document.forms["contactForm"][i].type === "date") {
            if (document.forms["contactForm"][i].value === "") {
                $('.alert').removeClass('d-none').addClass('show');
                document.forms["contactForm"][i].classList.add("required-input");
                fieldisValid = false;
            } else {
                document.forms["contactForm"][i].classList.remove("required-input");
                fieldisValidated += 1;
            }
        }
    }

    if(fieldisValid){
        document.forms["contactForm"].submit();
    }
}

function closeAlert() {
    $('.alert').addClass('d-none').removeClass('show');
}