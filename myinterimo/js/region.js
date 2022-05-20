let region = document.getElementById('inputRegion');
let province = document.getElementById('inputProvince');
let ville = document.getElementById('inputVille');
let adresse = document.getElementById('inputAdresse');

provinceValue = province.value;
regionValue = region.value;
villeValue = ville.value;

validateRegion();

region.onchange = validateRegion;
province.onchange = validateProvince;
ville.onchange = validateVille;

function validateVille() {

    if (ville.value === villeValue) {

        ville.setCustomValidity('Choisir un ville');
        adresse.disable = true;

    } else {
        ville.setCustomValidity('');
        adresse.disable = false;

    }
}

function validateProvince() {

    if (province.value === provinceValue) {

        province.setCustomValidity('Choisir un province');
        ville.disable = true;

    } else {
        province.setCustomValidity('');
        ville.disable = false;
        ville.innerHTML = '<option value="" class="text-center"  selected>-- VILLE --</option>\n';
        for (let i = 0; i < provinces[province.value].length; i++) {
            ville.innerHTML += '<option value="' + i.toString() +
                '" >' + provinces[province.value][i].toString() + '</option>\n';
        }

    }
}

function validateRegion() {
    if (region.value === regionValue) {
        region.setCustomValidity('Choisir un region');
        province.disabled = true;

    } else {
        region.setCustomValidity('');
        province.disabled = false;

        province.innerHTML = '<option value="" class="text-center" selected>-- PROVINCE --</option>\n';
        for (let i = 0; i < regions[region.value].length; i++) {
            let line = regions[region.value][i];
            province.innerHTML += '<option value="' + line[1].toString() +
                '" >' + line[0].toString() + '</option>\n';
        }


    }
}



