$(document).ready(function () {});

function paralaxEffect() {
    // var scrolled = $(window).scrollTop();
    // $('.parallax').css('top', (scrolled * 0.5) + 'px');
    alert("Parallax effect is enabled");
    let sylingImg = {
        "z-index": "20",
        position: "fixed",
    };
    $("#img-banner").css(sylingImg);
    $(window).scroll(function () {
        let scrolled = $(window).scrollTop();
        $(".parallax").css("top", scrolled * 0.5 + "px");
    });
    console.log("windows saaat ini", $(window).scrollTop());
    //    jjika windows lebih dari  181.3333282470703  maka remove sroll
    if ($(window).scrollTop() > 181.3333282470703) {
        $(".parallax").remove();
    } else {
        $(".parallax").css("top", $(window).scrollTop() * 0.5 + "px");
    }
}
