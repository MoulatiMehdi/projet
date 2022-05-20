let tabs = document.getElementsByClassName('tab');
let steps_div = document.querySelector('.steps');
let progressBar = document.querySelector('.progress-bar');

let currentTab = 0;
let lastTab = 0
let numberTabs = tabs.length;

createSteps();
let steps = document.getElementsByClassName('step');

hideTabs();

function createSteps() {
    if (steps_div == null) return;
    steps_div.innerText = "";

    for (let i = 0; i < numberTabs; i++) {
        steps_div.innerHTML += '<a class=\"step col-auto\" onclick=\"goToTab(' + i + ')\" id=\"step' + (i + 1) + '\">' + (i + 1) + '</a>';
    }
}

function hideTabs() {
    for (let i = 0; i < numberTabs; i++) {
        tabs[i].style.display = "none";
    }
    displayTab(0);
}

function displayTab(n) {
    if (tabs === undefined || n >= numberTabs) return;
    currentStep(n);
    tabs[currentTab].style.display = "none";
    tabs[n].style.display = "flex";

    currentTab = n;
    if (lastTab < n && n >= numberTabs) lastTab = n;
}

function currentStep(n) {
    if (steps === null || steps.length === 0) return
    steps[currentTab].className = steps[currentTab].className.replaceAll(" active", "");
    steps[n].className += " active";
    progressBar.style.width = 100 * (lastTab + 1) / (numberTabs + 1) + "%";

}

