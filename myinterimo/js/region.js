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
            console.log("[" + region.value + "][" + i + "]");
            ville.innerHTML += '<option value="' + regions[region.value][i][1] + '" >' + regions[region.value][i][0].toString() + '</option>\n';
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
ville.disabled = true;
typeTransaction.options.setselectedIndex = 0;
ville.options.setselectedIndex = 0;

inputsText.push(
    [],
    ['salons', 'chambres', 'etages', 'salle_bain', 'surface_totale', 'surface_habitable', 'age_bien', 'frais_syndic'],
    ['salons', 'chambres', 'etages', 'salle_bain', 'surface_totale', 'surface_habitable', 'age_bien'],
    ['nbr_pieces', 'etages', 'surface_totale', 'frais_syndic', 'surface_soupente'],
    ['salle_bain', 'surface_totale', 'surface_soupente'], ['surface_totale', 'zoning'],
    []);

checkBoxesText.push(
    [],
    ['ascenseur', 'balcon', 'terrasse', 'meuble', 'clima', 'chauffage', 'cuisine_equipe', 'concierge', 'securite', 'parking', 'duplex'],
    ['garage', 'balcon', 'terrasse', 'meuble', 'clima', 'chauffage', 'cuisine_equipe', 'jardin', 'piscine', 'securite', 'parking'],
    ['ascenseur', 'cable_tel', 'clima', 'chauffage', 'securite', 'parking', 'terrasse'],
    ['clima', 'chauffage', 'parking', 'securite'],
    ['loti', 'terrain_titre'],
    []);

for (let i = 0; i < typeImmobilier.length; i++) {
    formByImmobilier[i].push(textHtmlElement(selects.children, inputsText[i]));
    formByImmobilier[i].push(textHtmlElement(checkBoxes.children, checkBoxesText[i]));
}

typeImmobilier.onchange = function () {

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


    if (!isNaN(line)) {
        for (let j = 0; j < formByImmobilier[line][0].length; j++)
            document.getElementById('allInput').innerHTML += formByImmobilier[line][0][j].outerHTML;
        for (let j = 0; j < formByImmobilier[line][1].length; j++)
            document.getElementById('allCheckBox').innerHTML += formByImmobilier[line][1][j].outerHTML;
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
region.onchange = validateRegion;
ville.onchange = validateVille;



