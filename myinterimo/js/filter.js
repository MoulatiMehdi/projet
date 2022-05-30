let inputVille = document.getElementById('inputVille');
let inputAgence = document.getElementById('inputAgence');
let inputPrix = document.getElementById('inputPrix');
let inputType = document.getElementById('inputType');
let btnRefresh = document.getElementById('btnRefresh');
let btnFind = document.getElementById('btnFind');
let announces = document.getElementsByClassName("announce");

let types = ['appartement', 'maison', 'magasin', 'bureau'];


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
    let type = inputType.options[i];
    let result = [];

    for (const announce of announces) {
        let target = announce.querySelector('.type').innerText.toLowerCase();

        if (target === type) {
            announce.style.display = "block";
            result.push(announce);
        } else {
            announce.style.display = "none";
        }
    }
    return result;

}

inputVille.oninput = function () {
    findAnnounceByVilleStartWith(announces);
}
inputType.oninput = function () {
    findAnnounceByType(announces);
}