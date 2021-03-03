function showAlert(){
    $("#alertBox").addClass("show");
}

function hideAlert(){
    $("#alertBox").removeClass("show");
}

function validateForm(){
    var isValid = true;
    var elementList = document.getElementById("contactForm").getElementsByTagName("input");
    for(element of elementList){
        if(element.value == ""){
            isValid = false;
            element.classList.add("required-input");
        } else {
            element.classList.remove("required-input");
        }
    }
    if (isValid){
        hideAlert();
    } else {
        showAlert();
    }  
}