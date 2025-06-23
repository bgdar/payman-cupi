$(document).ready(function () {
    paralaxEffect();
});

function paralaxEffect() {
    // var scrolled = $(window).scrollTop();
    // $('.parallax').css('top', (scrolled * 0.5) + 'px');

    let sylingImg = {
        // "z-index": "20",
        // position: "fixed",
        ransform: "translateY(2rem)",
        transform: "rotate(20deg)",
    };

    $(window).on("scroll", function () {
        const scrolled = $(this).scrollTop();

        const maxScroll = 716; // batas scroll

        if (scrolled <= maxScroll) {
            const rotateDeg = scrolled * 0.2; // perlambat rotasi
            const moveY = scrolled * 0.5; // perlambat gerak Y

            $("#img-banner").css({
                transform: `translateY(${moveY}px) rotate(${rotateDeg}deg)`,
            });
        }
    });
}
