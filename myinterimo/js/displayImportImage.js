//crop the image and draw it to the canvas
function cropImage(imagePath) {
    //create an image object from the path
    const originalImage = new Image();
    originalImage.src = imagePath;

    //initialize the canvas object
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');

    //wait for the image to finish loading
    originalImage.addEventListener('load', function () {

        let newX, newY, newWidth, newHeight;
        newHeight = newWidth = (this.width > this.height) ? this.height : this.width;
        newX = (this.width - newWidth) / 2;
        newY = (this.height - newHeight) / 2;
        //set the canvas size to the new width and height
        canvas.width = newWidth;
        canvas.height = newHeight;
        //draw the image
        ctx.drawImage(originalImage, newX, newY, newWidth, newHeight, 0, 0, newWidth, newHeight);
        console.log('hello world')
    });
}

window.onload = function () {
    let fileInput = document.getElementById('fileInput');

    //by default
    cropImage("./img/user_img/anonyme.svg")

    if (fileInput !== undefined) {
        fileInput.addEventListener('change', function () {
            let file = fileInput.files[0];
            let imageType = /image.*/;

            if (file.type.match(imageType)) {
                let reader = new FileReader();


                reader.onload = function () {
                    cropImage(reader.result.toString());
                }

                reader.readAsDataURL(file);
            }
        });
    }
}
