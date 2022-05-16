function cropImage(imagePath) {
    //create an image object from the path
    const originalImage = new Image();
    originalImage.src = imagePath;

    //initialize the canvas object
    const canvas = document.getElementsByClassName('image-profil');
    for (let i = 0; i < canvas.length; i++) {
        console.log(canvas[i]);
        let ctx = canvas[i].getContext('2d');

        //wait for the image to finish loading
        originalImage.addEventListener('load', function () {

            let X, Y, Width, Height;
            Height = Width = (this.width > this.height) ? this.height : this.width;
            X = (this.width - Width) / 2;
            Y = (this.height - Height) / 2;
            //set the canvas[i] size to the  width and height
            canvas[i].width = Width;
            canvas[i].height = Height;
            //draw the image
            ctx.drawImage(originalImage, X, Y, Width, Height, 0, 0, Width, Height);
        });
    }

}

window.onload = function () {

    let image = document.getElementById('image-profil');
    cropImage(image.src);

}