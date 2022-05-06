/* test if the user is in the ViewPort */

let isInViewport = function (elem) {
    let distance = elem.getBoundingClientRect();
    return (
        distance.top >= 0 &&
        distance.left >= 0 &&
        distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        distance.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
};
/* counter of the numbers */
let elem = document.querySelector('#chiffres');
let isAnimated = false;

/* chiffre animation */
window.addEventListener('scroll', function () {


    if (isInViewport(elem)) {
        if (!isAnimated) {
            $('.num').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).data('value')
                }, {
                    duration: $(this).data('duration-value'),
                    easing: 'swing',
                    step: function () {
                        $(this).text(Math.ceil(this.Counter));

                    },

                });
            });
            isAnimated = true;
        }
    } else {
        isAnimated = false;
    }
    /* move img after scroll */
    $('section img').each(function (index,e) {
        if(isInViewport(e)){
            $(e).animate({
                left:'+=100px'
            },'slow')

            console.log('right');
        }
        else{

        }
    })

}, false);



