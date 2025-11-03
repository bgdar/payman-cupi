<x-layouts-user :title="'Store'" :isNavbarFixed="true" :isNavbar="true">

    @if (session('success'))
        <x-popup-info :type="'success'" :message="session('success')"></x-popup-info>
    @elseif (session('error'))
        <x-popup-info :type="'error'" :message="session('error')"></x-popup-info>
    @elseif (session('info'))
        <x-popup-info :type="'info'" :message="session('info')"></x-popup-info>
    @endif

    {{-- stiap element paling atas di berikan margin 6rem --}}
    <header class="d-flex w-full justify-content-between px-5" style="margin-top: 6rem;">

        <h2 class="text-center mb-4">Menu Warkop Kedai Kopi</h2>

        <div class="menu p-2 ">
            <button class="btn btn-primary position-relative" type="button" aria-controls="offcanvasScrolling"
                data-bs-toggle="offcanvas" data-bs-target="#daftar-shopping">
                <i class="bi bi-bag-check-fill" title="shopping">

                </i>
                <span id="label-shopping" class="badge position-absolute bg-danger rounded-circle text-light d-none"
                    style="top: -5px; right: -5px;z-index:20; transform: translate(50%, -50%);"></span>
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

    <div class="row g-4 p-2.5">

        <!-- Card 1 -->

        @foreach ($datas as $data)
            <div class=" col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="https://source.unsplash.com/300x200/?coffee" class="card-img-top" alt="Kopi Hitam">
                    <div class="card-body card-product" data-id="{{ $data->id }}">
                        <h5 id="judul-product" class="card-title">{{ $data->judul_product }}</h5>
                        <p class="card-text text-muted">{{ $data->deskripsi }}</p>
                        <div class="d-flex justify-content-and">
                            <hr>
                            <p id="harga-product">{{ $data->on_sale }}</p>
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
        <div id="daftar-products" class="offcanvas-body container bg-foam-white cl-coffee-black p-4 rounded">

            <h3 class="cl-mocha mb-3">Daftar Product</h3>

            <div id="list-products"
                class="p-3 m-2 row row-cols-md-3 row-cols-sm-2 row-cols-1 bg-latte-beige rounded shadow-sm">
                {{-- semua daftar product yg di click akan di tambah di sini --}}
            </div>



            {{-- kirim keserver --}}
            <form id="form-send" method="post" action="{{ route('store.send') }}" class="mt-4">
                @csrf
                <label for="alamat" class="block cl-mocha font-semibold">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Alamat kamu"
                    class="w-full p-2 rounded bg-foam-white border border-caramel cl-coffee-black mb-3">

                <label for="phone" class="block cl-mocha font-semibold">Phone</label>
                <input type="number" name="phone" id="phone" placeholder="Nomor telepon"
                    class="w-full p-2 rounded bg-foam-white border border-caramel cl-coffee-black mb-3">

                <input type="hidden" name="info-pengguna">
                <div class="position-flex justify-content-around ">

                    <button type="submit" to="{{ route('store.send') }}"
                        class="mt-2 px-4 py-2 rounded bg-mocha cl-foam-white hover:bg-caramel">
                        Send
                    </button>
                    <button id="btn-clean-product" type="button"
                        class="mt-3 px-3 py-2 rounded bg-cup-gray cl-coffee-black hover:bg-caramel">
                        Clean
                    </button>
                </div>

            </form>
        </div>

    </div>
    {{-- shopping and --}}


    @vite(entrypoints: 'resources/js/store/index.js')
</x-layouts-user>
