let password = document.getElementById('inputPassword');
let confirmPassword = document.getElementById('inputPasswordConfirm');

let currentTab = 0; // Current tab is set to be the first tab (0)
let numberTabs=1;



function showTab(n) {
    // This function will display the specified tab of the form ...
    const x = document.getElementsByClassName("tab");
    for(let i=0;i<x.length;i++){
        x[i].style.display="none";
    }
    x[n].style.display = "flex";
    numberTabs=x.length;
    // ... and fix the Previous/Next buttons:
    if (n === 0) {
        document.getElementById("prevBtn").style.visibility = "hidden";
    } else {
        document.getElementById("prevBtn").style.visibility = "visible";
    }
    if (n === (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Envoyer";
    } else {
        document.getElementById("nextBtn").innerHTML = "Suivent";
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

    x[currentTab].style.display = "none"; // Hide the current tab:
    currentTab = currentTab + n;// Increase or decrease the current tab by 1:
    if (currentTab >= x.length) {// if you have reached the end of the form... :
        document.getElementById("regForm").submit(); //...the form gets submitted:
        return false;
    }

    showTab(currentTab); // Otherwise, display the correct tab:
}


function validateForm() {
    // This function deals with validation of the form fields

    let x, y, i, valid = (password.value === confirmPassword.value);

    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value === "") {

            y[i].className += " invalid";  // add an "invalid" class to the field:
            console.log('input ' + i + 'is not valid');// and set the current valid status to false:
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {

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
    progressBar.style.width = 100*(n+1)/(numberTabs+1)+"%";

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
password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;

showTab(currentTab); // Display the current tab
