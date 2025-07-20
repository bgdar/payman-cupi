<x-layouts :title="'Store'" :isNavbar="true">

    {{-- stiap element paling atas di berikan margin 6rem --}}
    <header class="d-flex w-full justify-content-between px-5" style="margin-top: 6rem;">

        <h2 class="text-center mb-4">Menu Warkop Kedai Kopi</h2>

        <div class="menu p-2 ">
            <button class="btn btn-primary position-relative" type="button" aria-controls="offcanvasScrolling"
                data-bs-toggle="offcanvas" data-bs-target="#daftar-shopping">
                <i class="bi bi-bag-check-fill" title="shopping">

                </i>
                <span id="label-shopping" class="badge position-absolute bg-danger rounded-circle text-light d-none"
                    style="top: -5px; right: -5px;z-index:20; transform: translate(50%, -50%);">></span>
            </button>
            <button class="btn btn-primary position-relative">
                <i class="bi bi-search" title="search"></i>
            </button>
            <button class="btn btn-primary position-relative">
                <i class="bi bi-tags-fill" title=""></i>
            </button>
            <button class="btn btn-primary position-relative">
                <i class="bi bi-hourglass-split" title="history"></i>
            </button>

        </div>

    </header class="container py-5">

    <div class="row g-4">

        <!-- Card 1 -->

        @foreach ($datas as $data)
            <div class="p-1 col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="https://source.unsplash.com/300x200/?coffee" class="card-img-top" alt="Kopi Hitam">
                    <div class="card-body card-product" data-id="{{ $data->id }}">
                        <h5 class="card-title">{{ $data->judul_product }}</h5>
                        <p class="card-text text-muted">{{ $data->deskripsi }}</p>
                        <div class="d-flex justify-content-and">
                            <hr>
                            <p>{{ $data->on_sale }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="fw-bold">{{ $data->harga }}</span>
                            <button class="btn btn-sm btn-primary btn-add-to-cart">
                                <i class="bi bi-cart-plus-fill" title="add to cart"></i>
                                add
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        {{-- paganation button --}}
        <button>
            {{ $datas->links() }}
        </button>


    </div>


    {{-- daftar component yang saya gunakan di menu --}}
    {{-- shopping start --}}
    <div class="offcanvas offcanvas-start" tabindex="-1" id="daftar-shopping" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Daftar Belanja</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Belum ada produk yang ditambahkan ke keranjang.</p>
            {{-- Daftar produk yang ditambahkan ke keranjang akan muncul di sini --}}
        </div>
    </div>
    {{-- shopping and --}}


    @vite(entrypoints: 'resources/js/store/index.js')
</x-layouts>
