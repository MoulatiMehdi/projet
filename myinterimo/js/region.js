let region = document.getElementById('inputRegion');
let ville = document.getElementById('inputVille');
let adresse = document.getElementById('inputAdresse');
let typeTransaction = document.getElementById('inputTypeTransaction');
let typeImmobilier = document.getElementById('inputCategory');
let titreAnnounce = document.getElementById('titreAnnounce');

let selects = document.getElementById('allInput').cloneNode(true);
let checkBoxes = document.getElementById('allCheckBox').cloneNode(true);
let formByImmobilier = [[], [], [], [], [], [], [], []];
let inputsText = [];
let checkBoxesText = [];

function validateVille() {

    if (ville.value === "") {

        ville.setCustomValidity('Choisir un ville');
        adresse.disabled = true;

    } else {

        if (typeTransaction.value !== "") {
            let i = typeImmobilier.options.selectedIndex;
            let j = ville.options.selectedIndex;
            let z = typeTransaction.options.selectedIndex;
            titreAnnounce.value = typeImmobilier.options[i].innerText + " en " + typeTransaction.options[z].innerText + " à " + ville.options[j].innerText;
        }
        ville.setCustomValidity('');
        adresse.disabled = false;
    }
}


function validateRegion() {
    if (region.value === "") {
        region.setCustomValidity('Choisir un region');
        ville.disabled = true;

    } else {

        region.setCustomValidity('');
        ville.disabled = false;

        ville.innerHTML = '<option value=""  class="text-center" selected>-- VILLE --</option>\n';
        for (let i = 0; i < regions[region.value].length; i++) {
            ville.innerHTML += '<option value="' + i.toString() + '" >' + regions[region.value][i].toString() + '</option>\n';
        }


    }
}

function textHtmlElement(inputs, inputsText) {
    let tab = [];
    for (let select of inputs) {
        for (let j = 0; j < inputsText.length; j++) {
            if (select.innerHTML.search(inputsText[j]) !== -1) {
                tab.push(select);
                break;
            }
        }
    }
    return tab;

}

typeTransaction.disabled = true;
inputsText.push([], ['salons', 'chambres', 'etages', 'salleBain', 'surfaceTotale', 'surfaceHabitable', 'ageBien', 'fraisSyndic'], ['salons', 'chambres', 'etages', 'salleBain', 'surfaceTotale', 'surfaceHabitable', 'ageBien'], ['nbrPieces', 'etages', 'surfaceTotale', 'fraisSyndic', 'surfaceSoupente'], ['salleBain', 'surfaceTotale', 'surfaceSoupente'], ['surfaceTotale', 'zoning'], []);
checkBoxesText.push([], ['ascenseur', 'balcon', 'terrasse', 'meuble', 'clima', 'chauffage', 'cuisineEquipe', 'concierge', 'securite', 'parking', 'duplex'], ['garage', 'balcon', 'terrasse', 'meuble', 'clima', 'chauffage', 'cuisineEquipe', 'jardin', 'piscine', 'securite', 'parking'], ['ascenseur', 'cablageTel', 'clima', 'chauffage', 'securite', 'parking', 'terrasse'], ['clima', 'chauffage', 'parking', 'securité'], ['loti', 'terrainTitre'], []);

for (let i = 0; i < typeImmobilier.length; i++) {
    formByImmobilier[i].push(textHtmlElement(selects.children, inputsText[i]));
    formByImmobilier[i].push(textHtmlElement(checkBoxes.children, checkBoxesText[i]));

}

console.log(formByImmobilier);

typeImmobilier.oninput = function () {

    typeTransaction.disabled = false;
    if (this.selectedIndex > 2) {
        typeTransaction[3].hidden = true;
        typeTransaction[4].hidden = true;
    } else {
        typeTransaction[3].hidden = false;
        typeTransaction[4].hidden = false;
    }

    document.getElementById('allInput').innerHTML = "";
    document.getElementById('allCheckBox').innerHTML = "";
    let line = parseInt(typeImmobilier.value);
    console.log(line);
    console.log(!isNaN(line));
    if (!isNaN(line)) {
        for (let j = 0; j < formByImmobilier[line][0].length; j++) document.getElementById('allInput').innerHTML += formByImmobilier[line][0][j].outerHTML;
        for (let j = 0; j < formByImmobilier[line][1].length; j++) document.getElementById('allCheckBox').innerHTML += formByImmobilier[line][1][j].outerHTML;
        console.log(formByImmobilier[line]);
    }

}

typeTransaction.onchange = function () {
    if (region.value !== "") {
        let i = typeImmobilier.options.selectedIndex;
        let j = region.options.selectedIndex;
        let z = typeTransaction.options.selectedIndex;
        titreAnnounce.value = typeImmobilier.options[i].innerText + " en " + typeTransaction.options[z].innerText + " à " + region.options[j].innerText;
    }

}


validateRegion();
region.oninput = validateRegion;
ville.oninput = validateVille;



