let isDown = false;
let startX;
let scrollLeft;

const slider = document.querySelector('.items');
let dist = 0;


const end = () => {
    isDown = false;
    slider.classList.remove('active');
}

const start = (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;

}


const move = (e) => {
    if (!isDown) {
        return;
    }
    e.preventDefault();
    const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    dist = (x - startX);
    slider.scrollLeft = scrollLeft - dist;
    console.log(slider.clientLeft);

}

(() => {
    slider.addEventListener('mousedown', start);
    slider.addEventListener('touchstart', start);

    slider.addEventListener('mousemove', move);
    slider.addEventListener('touchmove', move);

    slider.addEventListener('mouseleave', end);
    slider.addEventListener('mouseup', end);
    slider.addEventListener('touchend', end);
})();


