<x-layouts :title="'Dashboard'" :isNavbarFixed="true" :isNavbar="true">

    {{-- Info popup  --}}

    @if (session('error'))
        <x-popup-info type="info" :messsage="session('error')"></x-popup-info>
    @elseif (session('success'))
        <x-popup-info type="success" :messsage="session('success')"></x-popup-info>
    @elseif (session('info'))
        <x-popup-info type="info" :messsage="session('info')"></x-popup-info>
    @endif


    {{-- main dashboard start --}}
    <main id="dashboard" class=" d-flex align-items-center justify-content-center min-vh-100 mask-botton">
        <div class="container text-center text-white">
            <h3 class="mb-4 display-4 fw-bold">Payman Cupi</h3>

            <div id="img-banner" class="d-flex justify-content-center mb-4">
                <img src="{{ asset('img/coffe.png') }}" alt="coffee" class="img-fluid  rounded"
                    style="max-width: 300px; width: 100%;">
            </div>

            <p class="fs-5 fst-italic">Ngopi Lôn, Nyang Kupi Payman</p>
            {{-- ini akan muncul jika penggunaa belum pernah  atau belum login --}}
            <a href="{{ route('store') }}" data-bs-toggle="tooltip" data-bs-placement="bottom"
                data-bs-title="click untuk selanjutnya..." class="btn bg-mocha cl-cup-gray ">
                mantap
            </a>


        </div>
    </main>


    <section class="py-5 bg-foam-white" style="z-index: -20;">
        <div class="container text-center mb-5">
            <h3 class="fw-bold cl-coffee-brown border-bottom pb-2 d-inline-block">
                Galeri Kedai Kopi
            </h3>
            <p class="text-muted fst-italic mt-2">
                Nikmati suasana hangat dengan secangkir kopi terbaik kami ☕
            </p>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col">
                        <div class="card h-100 bg-coffee-black text-white shadow-lg border-0 rounded-4 overflow-hidden">
                            <div class="position-relative">
                                <img src="{{ asset('img/coffe.png') }}" class="card-img-top img-fluid" alt="Gambar Kopi"
                                    style="object-fit: cover; height: 220px;">
                                <!-- Overlay ketika hover -->
                                <div
                                    class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center bg-dark bg-opacity-50 opacity-0 transition">
                                    <span class="fw-bold cl-latte-beige">Lihat Detail</span>
                                </div>
                            </div>
                            <div class="card-body bg-mocha text-center">
                                <h6 class="card-title fw-semibold cl-foam-white">Judul Gambar</h6>
                                <p class="small text-muted fst-italic">"Cerita di balik secangkir kopi"</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <section class="py-5 bg-latte-beige">
        <div class="container">
            <p class="lead cl-coffee-black text-center">
                Ue ex, numquam quos totam provident quidem error repudiandae nisi.
                Asperiores nostrum dolor recusandae culpa ea debitis adipisci aut sunt incidunt ex commodi, accusamus
                totam.
                Voluptates unde suscipit dignissimos eveniet.
            </p>
            <p class="text-center cl-mocha">
                Ad aliquam error ab nobis quo unde quod pariatur fuga iusto?
                Eligendi cumque placeat aspernatur repellendus exercitationem?
                Rem deserunt at obcaecati sapiente, cumque molestias repellat earum, commodi, cupiditate dolores quod!
            </p>
        </div>
    </section>

    {{-- main dashboard and --}}

    {{-- dasboard js --}}
    @vite('resources/js/dashboard.js')
</x-layouts>
