let password = document.getElementById('inputPassword');
let confirmPassword = document.getElementById('inputPasswordConfirm');
let steps_div=document.getElementById('steps');

let siren=document.getElementById('inputSIREN');
let siret=document.getElementById('inputSIRET');

let currentTab = 0; // Current tab is set to be the first tab (0)
let numberTabs=1;
let lastTab=0;

let displaySteps = (function() {
    let executed = false;
    return function() {
        if (!executed) {
            const x = document.getElementsByClassName("tab");
            for(let i=0;i<x.length;i++){
                x[i].style.display="none";
                steps_div.innerHTML+='<a class=\"step col-auto\" id=\"step1\">'+(i+1)+'</a>';
                executed=true;
            }

        }
    };
})();

displaySteps();


// This function will display the specified tab of the form ...
function showTab(n) {
    const x = document.getElementsByClassName("tab");
    for(let i=0;i<x.length;i++){
        x[i].style.display="none";
    }
    if(lastTab<n) lastTab=n;
    x[n].style.display = "flex";
    numberTabs=x.length;
    // ... and fix the Previous/Next buttons:
    if (n === 0) {
        document.getElementById("prevBtn").style.visibility = "hidden";
    } else {
        document.getElementById("prevBtn").style.visibility = "visible";
    }
    if (n === (x.length - 1)) {

        document.getElementById("nextBtn").value = "Envoyer";
        document.getElementById("nextBtn").type="submit"

    } else {
        document.getElementById("nextBtn").value = "Suivent";
        document.getElementById("nextBtn").type="button"

    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n);
}

function nextPrev(n) {
    // This function will figure out which tab to display

    const x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n === 1 && !validateForm()) {
        return false;
    }

    if(x.length>currentTab)x[currentTab].style.display = "none"; // Hide the current tab:

    currentTab = currentTab + n;// Increase or decrease the current tab by 1:

    if (currentTab >= x.length) {// if you have reached the end of the form... :
      //  document.getElementById("regForm").submit(); //...the form gets submitted:
        return false;
    }

    showTab(currentTab); // Otherwise, display the correct tab:
}


function validateForm() {
    // This function deals with validation of the form fields

    let x, y, i, valid = (password.value === confirmPassword.value);

    if(valid && siren.value.substring(0,9)!==siret.value.substring(0,9)){
        valid=false
    }

    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    // A loop that checks every input field in the current tab:
    for (i = 1; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value === "") {

            y[i].className += " invalid";  // add an "invalid" class to the field:
            console.log('input ' + i + 'is not valid');// and set the current valid status to false:
            valid = false;
        }
    }

    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className+=(" finish");

    } else {
        document.getElementsByClassName("step")[currentTab].className.replace(" finish", "");

    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    let i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";


    document.getElementsByClassName("step")[currentTab].className += " finish";

    let progressBar= document.querySelector('.progress-bar');
    progressBar.style.width = 100*(lastTab+1)/(numberTabs+1)+"%";

}

/* confirm the password method */
function validatePassword() {
    if (password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity("Passwords Don't Match");
    } else {
        confirmPassword.setCustomValidity('');
    }
}
//
function validateSiret(){

    if (siren.value!==siret.value.substring(0,9)) {
        siret.setCustomValidity("Passwords Don't Match");
    } else {
        siret.setCustomValidity('');
    }
}
password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;

siret.onchange = validateSiret;
siren.onchange = validateSiret;

showTab(currentTab); // Display the current tab



