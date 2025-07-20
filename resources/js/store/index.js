$(document).ready(function () {
    // Inisialisasi fungsi untuk menangani penambahan produk ke keranjang
    currentShoppping();
});

function currentShoppping() {
    const products = $(".card-product");
    // simpan current shopping ke local storage
    // agar saat reload halaman (atau pindah halaman dengan pagination Laravel), bisa ambil kembali:
    let current = parseInt(localStorage.getItem("current")) || 0;

    products.each(function () {
        const $element = $(this);
        const id = $element.data("id");
        const labelShopping = $("#label-shopping");
        const btnAdd = $element.find(".btn-add-to-cart");
        //handlle saat pindah halaman semnetara
        if (current > 0) {
            labelShopping.removeClass("d-none");
            labelShopping.text(current);
        }

        if (id) {
            btnAdd.on("click", function () {
                current++;
                labelShopping.removeClass("d-none");
                labelShopping.text(current);
                localStorage.setItem("current", current); // <== Simpan di loca storage
            });
        }
    });
}
