let dropBoxes = document.getElementsByClassName('dropBox');
let button = document.getElementById('addImage');
let inputFiles = document.getElementById('inputFile');

let list = new DataTransfer;
let max = 4;

function removeFromList(i) {
    elem = i % list.files.length;
    if (elem > max) return;
    list.items.remove(elem);
    inputFiles = list.files;

    dropBoxes[i].style.display = "none";
    button.style.display = "flex";

    console.log(list.files);

}

button.onclick = function () {
    inputFiles = document.getElementById('inputFile');
    console.log(inputFiles);
    inputFiles.click();
    inputFiles.onchange = function () {
        checkFiles(this.files, max);

        for (let i = 0; i < max; i++) {
            let file = inputFiles.files[i];
            if (file === undefined) break;

            let imageType = /image.*/;

            if (file.type.match(imageType)) {
                let reader = new FileReader();
                reader.onload = function () {
                    cropImage(reader.result.toString(), 'dropBox' + i);
                    dropBoxes[i].style.display = "flex";
                }
                reader.readAsDataURL(file);
            }
        }
        if (this.files.length >= max) {
            button.style.display = "none";
        }
    }
}

function checkFiles(files, max) {
    console.log(list.files);
    for (let i = 0; i < max && i < files.length; i++) {
        list.items.add(files[i]);
    }
    inputFiles.files = list.files;
    console.log(inputFiles.files);
}
