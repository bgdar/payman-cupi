$(document).ready(function () {
    const coffeModel = document.getElementById("coffe-model");

    if (!coffeModel) {
        console.warn("model-viewer tidak ditemukan!");
        return;
    }
    $(window).on("scroll", function () {
        const scrollY = $(this).scrollTop();

        coffeModel.cameraOrbit = `${scrollY * 0.3}deg 75deg 1.5m`;
        // coffeModel.style.transform = `translateY(${scrollY * 0.2}px)`;
    });
});
