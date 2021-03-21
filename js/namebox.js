var languages = ["HTML", "CSS", "Javascript", "PHP", "mySQL", "Python"];

for (i = 0;  i < languages.length; i++) {
    if (i != languages.length -1){
        document.getElementById("languages").innerText += languages[i];
    } else {
        document.getElementById("languages").innerText += languages[i] + ", ";
    }
}

function getTimeOfDay(){
    var usersDate= new Date();

    var hours = usersDate.getHours();
    var minutes = usersDate.getMinutes();
    var amPM = "AM";

    if(hours >12){
        hours = hours -12;
        amPM = "PM";
    }
    
    var timeOfDay = hours + ":" + minutes + " " + amPM;

    return timeOfDay;
}

function myFunction() {
    var txt;
    var person = prompt("Nice to meet you, what's your name?", "Name");
    if (person == null || person == "") {
        txt = "No worries, sometimes I'm shy too.";
    } else {
        txt = "\nGood " + getSalutations() + ", " + person + "!\n Thank you for visiting my website!";
    }
    document.getElementById("demo").innerHTML = txt;
}


function getSalutations(){
    var usersDate = new Date();

    var salutation = "";

    if (usersDate.getHours() >= 5 && usersDate.getHours() <12){
        salutation = "Morning";
    } else if (usersDate.getHours() >= 12 && usersDate.getHours() < 18){
        salutation = "Afternoon";
    } else {
        salutation = "Evening";
    } 

    return salutation;
}

