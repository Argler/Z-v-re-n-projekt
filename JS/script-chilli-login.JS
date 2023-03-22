//validace celku

function validate(){
    var inputs = [...document.getElementsByTagName("input")];
    var required = inputs.filter(el => el.hasAttribute("required"));
    var email = document.getElementById("email");
    var result1 = validateRequired(required);
    var result2 = validateEmail(email);
    var resnew = result1 && result2;

    if(resnew){
        console.log("OK")
    }
        return resnew;
}

//validace required elementu

function validateRequired(required){
var result = required.some(el => el.value == "");
if(result){
    window.alert("Jedna, nebo více položek je nevyplněno")
    }
    return !result;
}

//validace emailu

function validateEmail(email){
const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var result = pattern.test(email.value)
if (!result) {
    alert("Nesprávný email")
    } 
    return result;   
}




