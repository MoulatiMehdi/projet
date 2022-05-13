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
    });
}

window.onload = function () {

    let image = document.getElementById('image-profil');
    cropImage(image.src);

}