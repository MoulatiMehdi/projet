let tabs = document.getElementsByClassName('tab');
let steps = document.getElementsByClassName('step');
let currentTab = 0;

function hideTabs() {
    for (let i = 0; i < tabs.length; i++) {
        tabs[i].style.display = "none";
    }
    displayTab(0);
}

function displayTab(n) {
    if (tabs === undefined || n >= tabs.length) return;

    steps[currentTab].querySelector('.nav-link').className = steps[currentTab].querySelector('.nav-link').className.replaceAll(" active", "");
    steps[n].querySelector('.nav-link').className += " active";

    tabs[currentTab].style.display = "none";
    tabs[n].style.display = "flex";

    currentTab = n;
}

hideTabs();

editPassword = document.getElementById('inputPassword');
editConfirmPassword = document.getElementById('inputConfirmPassword');

/* confirm the password method */
function validatePassword() {
    let tooltipConfirmPassword = document.getElementById('tooltipEditConfirmPassword');
    if (password.value !== confirmPassword.value) {
        tooltipConfirmPassword.innerText = "le Mot d passe n\'est pas identique";
        confirmPassword.setCustomValidity('le Mot d passe n\'est pas identique');
    } else {
        confirmPassword.setCustomValidity('');
        tooltipConfirmPassword.innerText = "saisir entre 8-32 characters.";
    }
}


editPassword.onkeyup = validatePassword;
editConfirmPassword.onkeyup = validatePassword;


