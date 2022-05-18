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
