function threedDModel() {
    const coffeModel = $("coffe-model");

    if (!coffeModel) {
        console.warn("model-viewer tidak ditemukan!");
        return;
    }
    $(window).on("scroll", function () {
        const scrollY = $(this).scrollTop();

        coffeModel.cameraOrbit = `${scrollY * 0.3}deg 75deg 1.5m`;
        // coffeModel.style.transform = `translateY(${scrollY * 0.2}px)`;
    });
}

function tableReservations() {
    $("#btn-number").on("click", function () {
        alert("Table selected: " + $(this).text());
        $(this).toggleClass("btn-info");
    });
}

$(document).ready(function () {
    // model 3d
    threedDModel();
    // table selected
    tableReservations();
});
