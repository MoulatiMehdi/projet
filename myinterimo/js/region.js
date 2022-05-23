let region = document.getElementById('inputRegion');
let ville = document.getElementById('inputVille');
let adresse = document.getElementById('inputAdresse');
let typeTransaction = document.getElementById('inputTypeTransaction');
let typeImmobilier = document.getElementById('inputCategory');

let transactionChoses = typeTransaction.getElementsByTagName('option');

typeTransaction.disabled = true;
typeImmobilier.oninput = function () {

    // typeTransaction.innerHTML = transactionChoses[0] + transactionChoses[1] + transactionChoses[2];

    typeTransaction.disabled = false;
    if (this.selectedIndex > 2) {
        typeTransaction[3].hidden = true;
        typeTransaction[4].hidden = true;
    } else {
        typeTransaction[3].hidden = false;
        typeTransaction[4].hidden = false;
    }


}
validateRegion();

region.oninput = validateRegion;
ville.oninput = validateVille;

function validateVille() {

    if (ville.value === "") {

        ville.setCustomValidity('Choisir un ville');
        adresse.disabled = true;

    } else {
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



