let inputVille = document.getElementById('inputVille');
let inputAgence = document.getElementById('inputAgence');
let inputPrix = document.getElementById('inputPrix');
let inputType = document.getElementById('inputType');
let btnRefresh = document.getElementById('btnRefresh');
let btnFind = document.getElementById('btnFind');
let announces = document.getElementsByClassName("announce");

let types = ['appartement', 'maison', 'magasin', 'bureau'];

function findAnnounceByAgenceStartWith(announces) {

    let input = inputAgence.value.toLowerCase();
    let result = [];
    for (const announce of announces) {
        let target = announce.querySelector('.agence').innerText.toLowerCase();

        if (target.startsWith(input) || input === "") {
            announce.style.display = "block";
            result.push(announce);
        } else {
            announce.style.display = "none";
        }
    }
    return result;
}

function findAnnounceByVilleStartWith(announces) {

    let input = inputVille.value.toLowerCase();
    let result = [];
    for (const announce of announces) {
        let target = announce.querySelector('.ville').innerText.toLowerCase();

        if (target.startsWith(input)) {
            announce.style.display = "block";
            result.push(announce);
        } else {
            announce.style.display = "none";
        }
    }
    return result;
}

function findAnnounceByType(announces) {
    let i = inputType.options.selectedIndex
    let type = inputType.options[i].value;
    let result = [];

    for (const announce of announces) {
        let target = announce.querySelector('.type').innerText
        console.log(target)
        target = target.toLowerCase();
        if (type.startsWith(target) || type === "") {
            announce.style.display = "block";
            result.push(announce);
        } else {
            announce.style.display = "none";
        }
    }
    return result;

}

function filter() {
    let res = findAnnounceByVilleStartWith(announces);
    let res1 = findAnnounceByType(res);
    let res2 = findAnnounceByAgenceStartWith(res1)
}

inputVille.oninput = function () {
    filter()

}
inputType.oninput = function () {
    filter()
}
inputAgence.oninput = function () {
    filter()

}