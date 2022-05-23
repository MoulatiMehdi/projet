//        HTML ELEMENTS
let tabs = document.getElementsByClassName('tab');  //tabs
let steps_div = document.querySelector('.steps');     // div element that contient the steps
let steps;                                                  // all steps
let progressBar = document.querySelector('.progress-bar'); //progressBar
let nextBtn = document.getElementById('nextBtn');   //next Tab Button
let prevBtn = document.getElementById('prevBtn');  //previous Tab Button
let form = document.getElementById('regForm');

//      NUMBERS
let currentTab = 0;
let lastTab = 0
let numberTabs = tabs.length;

function createSteps() {
    if (steps_div == null) return;
    steps_div.innerText = "";

    for (let i = 0; i < numberTabs; i++) {
        steps_div.innerHTML += '<button class=\"step btn col-auto\" onclick=\"displayTab(' + i + ')\" id=\"step' + (i + 1) + '\" disabled>' + (i + 1) + '</button>';
    }
    steps = document.getElementsByClassName('step');
}

function disableAll() {
    let requires = document.querySelectorAll('[required]');
    for (const required of requires) {
        required.disabled = true;
    }
}

function hideTabs() {
    for (let i = 0; i < numberTabs; i++) {
        tabs[i].style.display = "none";
    }
}

function startForm() {
    createSteps();
    hideTabs();
    disableAll();
    displayTab(0);
}


function enableTab() {
    let requires = tabs[currentTab].querySelectorAll('[required]');
    for (const required of requires) {
        if (required.getAttribute('id').search("Ville") !== -1) continue;

        required.disabled = false;
    }

}

function disableTab() {
    let requires = tabs[currentTab].querySelectorAll('[required]');
    for (const required of requires) {
        required.disabled = true;
    }

}

function displayTab(n) {
    if (tabs === undefined || n >= numberTabs) return;


    if (lastTab < n) {
        lastTab = n;
    }
    currentStep(n);
    currentButton(n);
    tabs[currentTab].style.display = "none";
    currentTab = n;
    tabs[n].style.display = "flex";
    enableTab();
    validateTab();

}

function currentButton(n) {
    if (n === 0) prevBtn.style.visibility = "hidden"; else prevBtn.style.visibility = "visible";

    if (n === numberTabs - 1) {
        nextBtn.value = "Envoyer";
    } else {
        nextBtn.value = "Suivant";
    }

}

function currentStep(n) {
    if (steps === null || steps.length === 0) return

    steps[currentTab].className = steps[currentTab].className.replaceAll(" active", "");
    steps[currentTab].className += " finish"

    steps[n].className = steps[n].className.replaceAll(" finish", "");
    steps[n].className += " active";
    steps[n].disabled = false;

    progressBar.style.width = 100 * (lastTab + 1) / (numberTabs + 1) + "%";

}

function nextTab() {
    if (currentTab + 1 < numberTabs) displayTab(currentTab + 1);
    else form.submit();


}

function prevTab() {
    if (currentTab - 1 < 0) return;
    disableTab();
    displayTab(currentTab - 1);

}

function validateTab() {

    form.addEventListener('input', function () {
        let checkForm = form.checkValidity();
        nextBtn.disabled = !checkForm;
        steps[(currentTab + 1) % 5].disabled = !checkForm;
        if (!checkForm) {
            if (currentTab < lastTab) {
                for (let i = currentTab + 1; i < numberTabs; i++) {
                    steps[i].disabled = true
                    steps[i].className = steps[i].className.replaceAll(" finish", "");

                }

            }
            lastTab = currentTab;
            progressBar.style.width = 100 * (lastTab + 1) / (numberTabs + 1) + "%";
        } else {

            progressBar.style.width = 100 * (lastTab + 2) / (numberTabs + 1) + "%";

        }
    })
    if (form.checkValidity()) {
        nextBtn.disabled = false;
        if (currentTab === lastTab) {
            progressBar.style.width = 100 * (lastTab + 2) / (numberTabs + 1) + "%";
            lastTab += 1;
        }

        steps[(currentTab + 1) % numberTabs].disabled = false;

    } else {
        nextBtn.disabled = true;
    }
}


startForm();

let descAnnounce = document.getElementById('description');

descAnnounce.oninput = function () {
    if (this.textLength < 10) this.setCustomValidity('Au Moins 10 Characters');
    else this.setCustomValidity('');

    document.getElementById('descriptionLength').innerText = this.textLength + "/" + this.maxLength;
}

