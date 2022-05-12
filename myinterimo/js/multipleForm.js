let password = document.getElementById('inputPassword');
let confirmPassword = document.getElementById('inputPasswordConfirm');
let steps_div = document.getElementById('steps');

let siren = document.getElementById('inputSIREN');
let siret = document.getElementById('inputSIRET');

let currentTab = 0; // Current tab is set to be the first tab (0)
let numberTabs = 1;
let lastTab = 0;

let displaySteps = (function () {
    let executed = false;
    return function () {
        if (!executed) {
            const x = document.getElementsByClassName("tab");
            if (steps_div.innerText === "")
                for (let i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                    steps_div.innerHTML += '<a class=\"step col-auto\" onclick=\"goToTab(' + i + ')\" id=\"step' + (i + 1) + '\">' + (i + 1) + '</a>';
                    executed = true;
                }
            numberTabs = x.length;


        }
    };
})();
displaySteps();

// This function will display the specified tab of the form ...
function showTab(n) {

    if (n >= numberTabs) return;

    const x = document.getElementsByClassName("tab");
    if (lastTab < n) lastTab = n;
    x[n].style.display = "flex";

    // ... and fix the Previous/Next buttons:
    if (n === 0) {
        document.getElementById("prevBtn").style.visibility = "hidden";
    } else {
        document.getElementById("prevBtn").style.visibility = "visible";
    }
    if (n === (x.length - 1)) {

        document.getElementById("nextBtn").value = "Envoyer";

    } else {
        document.getElementById("nextBtn").value = "Suivent";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n);
}

function goToTab(n) {
    // This function will figure out which tab to display

    const x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n > lastTab && !validateForm()) {
        return false;
    }

    if (x.length > currentTab) x[currentTab].style.display = "none"; // Hide the current tab:

    currentTab = n;// Increase or decrease the current tab by 1:

    showTab(currentTab); // Otherwise, display the correct tab:

}

function nextPrev(n) {
    // This function will figure out which tab to display

    const x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n === 1 && !validateForm()) {
        return false;
    }

    if (x.length > currentTab) x[currentTab].style.display = "none"; // Hide the current tab:

    currentTab = currentTab + n;// Increase or decrease the current tab by 1:

    if (currentTab >= x.length) {// if you have reached the end of the form... :
        document.getElementById("regForm").submit(); //...the form gets submitted:
        return false;
    }

    showTab(currentTab); // Otherwise, display the correct tab:
}


function validateForm() {
    // This function deals with validation of the form fields

    let x, y, i, valid = true;

    if (currentTab === 2 && (!siret.value.startsWith(siren.value) || password.value !== confirmPassword.value)) {
        valid = false;

    }

    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");

    // A loop that checks every input field in the current tab:
    for (i = 1; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value === "") {
            console.log("field " + i + " is empty.");
            y[i].className += " invalid";  // add an "invalid" class to the field:
            valid = false;
        }
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    let i, x = document.getElementsByClassName("step");

    if (x.length === 0) return;
    for (i = 0; i <= lastTab; i++) {

        x[i].className = x[i].className.replaceAll(" active", "");
        x[i].className = x[i].className.replaceAll(" finish", "");
        x[i].className += " finish";

    }
    //... and adds the "active" class to the current step:

    x[n].className = x[n].className.replace(" finish", " active");


    let progressBar = document.querySelector('.progress-bar');
    progressBar.style.width = 100 * (lastTab + 1) / (numberTabs + 1) + "%";

}

/* confirm the password method */
function validatePassword() {
    if (password.value !== confirmPassword.value) {
        confirmPassword.setCustomValidity("le Mot d passe n'est pas identique");
    } else {
        confirmPassword.setCustomValidity('');
    }
}

//
function validateSiret() {

    if (!siret.value.startsWith(siren.value)) {
        siret.setCustomValidity("N° SIRET doit commencer par N°SIREN");
    } else {
        siret.setCustomValidity('');
    }
}

password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;

siret.onchange = validateSiret;
siren.onkeyup = validateSiret;


showTab(currentTab); // Display the current tab




