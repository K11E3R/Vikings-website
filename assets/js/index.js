$(function() {
    var slides = $('.slides'),
    images = slides.find('img');

    images.each(function(i) {
        $(this).attr('data-id', i + 1);
    })

    var typed = new Typed('.typed-words', {
        strings: ["Natation."," Water Polo."," École natation.", " Eau libre.", " Forme Santé."],
        typeSpeed: 100,
        backSpeed: 15   ,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true,
        preStringTyped: (arrayPos, self) => {
            arrayPos++;	
            console.log(arrayPos);
            $('.slides img').removeClass('active');
            $('.slides img[data-id="'+arrayPos+'"]').addClass('active');
        }

    });
})