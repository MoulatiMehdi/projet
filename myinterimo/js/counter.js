$('.num').each(function () {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).data('value')
    }, {
        duration: $(this).data('duration-value'),
        easing: 'swing',
        step: function () {
            $(this).text(Math.ceil(this.Counter));
        }
    });
});
