$(document).ready(function () {
    // Inisialisasi fungsi untuk menangani penambahan produk ke keranjang
    currentShoppping();
});

/**
 * fn untuk menghandle data cart shooping
 */
function currentShoppping() {
    const products = $(".card-product");
    // simpan current shopping ke local storage
    // agar saat reload halaman (atau pindah halaman dengan pagination Laravel), bisa ambil kembali:
    // let current = parseInt(localStorage.getItem("current")) || 0;

    let data_product = JSON.parse(localStorage.getItem("data_product")) || {
        currentProducts: 0,
        items: [],
    };
    const daftarProducts = $("#daftar-products #list-products");
    let currentProducts = data_product["currentProducts"];

    const cmpnDaftar = (item) => {
        return `<div class="border-2 rounded-lg p-3 bg-mocha cl-foam-white relative">
    <p id="${item.judul.replace(/\s+/g, "-")}" 
       class="badge-count position-absolute  
              bg-caramel cl-coffee-black px-2 py-1 rounded-circle text-sm fw-bold"
       style="top: -8px; right: -8px; z-index:20;">
        ${item.jumlah}
    </p>
    
    <h5 class="mb-1 cl-latte-beige">${item.judul}</h5>
    <p class="cl-cup-gray">${item.harga}</p>
</div>`;
    };

    // 1. Restore saat reload / pindah halaman
    if (data_product.items.length > 0) {
        //bersihkan jangan ada duplicate
        daftarProducts.empty();
        //daftar-products daftar reset kembali
        data_product.items.forEach((item) => {
            daftarProducts.append(cmpnDaftar(item));
        });
    }

    // tampilkan
    products.each(function () {
        const $element = $(this);
        const id = $element.data("id");
        const labelShopping = $("#label-shopping");
        const btnAdd = $element.find(".btn-add-to-cart");

        //handlle saat pindah halaman semnetara
        if (currentProducts > 0) {
            // hilangkan tanda merah dan reset kembali
            labelShopping.removeClass("d-none").text(currentProducts);
        }
        if (id) {
            btnAdd.on("click", function () {
                currentProducts++;
                labelShopping.removeClass("d-none").text(currentProducts);

                //tambah data_product
                const judul = $element.find("#judul-product").text();
                const harga = $element.find("#harga-product").text();

                data_product.currentProducts = currentProducts;

                const currentData = data_product.items.findIndex(
                    (v) => v.judul === judul
                );
                if (currentData !== -1) {
                    // jika di temukan ( buka -1) update jumlah
                    data_product.items[currentData].jumlah += 1;
                    // replace tampilan HTML dengan item yg sudah diupdate
                    const idJudul = $(
                        `#list-products p#${judul.replace(/\s+/g, "-")}`
                    );
                    $(idJudul).text(data_product.items[currentData].jumlah);
                } else {
                    const newItem = {
                        judul,
                        harga,
                        jumlah: 1,
                    };
                    data_product.items.push(newItem);
                    // isi ke dala m  html nya
                    daftarProducts.append(cmpnDaftar(newItem));
                }

                // localStorage.setItem("data_product",data_product)
                localStorage.setItem(
                    "data_product",
                    JSON.stringify(data_product)
                );
            });
        }
        // bersihkan
        $("#btn-clean-product").on("click", function () {
            daftarProducts.empty();

            daftarProducts.html(
                "<p class='text-gray-400'>Belum ada produk.</p>"
            );

            localStorage.removeItem("data_product");
        });
    });

    //hande daftar-product yg di dapat kirim ke server
    if (data_product.items.length > 0) {
        $("#form-send").on("submit", function (e) {
            e.preventDefault();
            console.info("submit run");

            // hanya ambil input dalam form yang sedang disubmit
            let alamat = $(this).find("input[name='alamat']").val();
            let phone = $(this).find("input[name='phone']").val();

            if (alamat.length === 0 && phone.length === 0) {
                $("#daftar-products").prepend(
                    `<p class="info"> tolong di isi terlebih dahulu </p>`
                );
                setTimeout(function () {
                    $("#daftar-products p.info").remove();
                }, 3000); // 3000 milidetik = 3 detik
            } else {
                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr(
                            "content"
                        ),
                    },
                });

                $.ajax({
                    url: $(this).attr("action"), // atau this.action
                    method: $(this).attr("method"), // otomatis ikut method form (POST/GET)
                    data: {
                        data_product,
                        infoPelanggan: {
                            alamat,
                            phone,
                        },
                    },

                    success: function (response) {
                        console.log("Berhasil:", response);
                        alert("Login sukses!");
                        // bersihkan
                        daftarProducts.empty();

                        daftarProducts.html(
                            "<p class='text-gray-400'>Belum ada produk.</p>"
                        );

                        localStorage.removeItem("data_product");
                    },
                    error: function (xhr) {
                        console.error("Gagal:", xhr.responseText);
                        alert("Login gagal!");
                    },
                });
            }
        });
    }
}
