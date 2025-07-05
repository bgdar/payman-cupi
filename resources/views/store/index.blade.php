<x-layouts :title="'Store'" :isNavbar="true">

    {{-- stiap element paling atas di berikan margin 6rem --}}
    <header style="margin-top: 6rem;">


        <h2 class="text-center mb-4">Menu Warkop Kedai Kopi</h2>

    </header>


    <div class="container py-5">
        <div class="d-flex w-full justify-content-between">


            <div class="menu p-2 ">
                <button>
                    <i class="bi bi-bag-check-fill" title="shopping"></i>
                </button>
                <button>
                    <i class="bi bi-search" title="search"></i>
                </button>
                <button>
                    <i class="bi bi-tags-fill" title=""></i>
                </button>
                <button>
                    <i class="bi bi-hourglass-split" title="history"></i>
                </button>

            </div>

        </div>
        <div class="row g-4">

            <!-- Card 1 -->

            @foreach ($datas as $data)
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="https://source.unsplash.com/300x200/?coffee" class="card-img-top" alt="Kopi Hitam">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->judul_product }}</h5>
                            <p class="card-text text-muted">{{ $data->deskripsi }}</p>
                            <div class="d-flex justify-content-and">
                                <hr>
                                <p>
                                    {{ $data->on_sale }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold">{{ $data->harga }}</span>
                                <a href="#" class="btn btn-sm btn-primary">Pesan</a>
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
    </div>


</x-layouts>
