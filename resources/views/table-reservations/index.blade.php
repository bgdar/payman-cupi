<x-layouts :title="'Table Reservations'" :isNavbar="true" :is3dModel="true">

    {{-- saya mau paralax effect yg saat di scroll halaman nya tetap --}}

    {{-- saya mau paralax effect yg saat di scroll halaman nya tetap # --}}





    <main
        class="container-fluid position-relative d-flex justify-content-center align-items-center justify-content-md-end flex-md-row flex-column ">

        {{-- navbar --}}
        {{-- img 3d yg fixed sebesar 50vw di pc dan 100vw di mobile --}}
        {{-- Model 3D Coffee View --}}

        {{-- navbar --}}
        {{-- img 3d yg fixed sebesar 50vw di pc dan 100vw di mobile --}}
        {{-- Model 3D Coffee View --}}
        <div class=" w-50 left-0 top-0 posistion-relative position-md-fixed" style="height: 100vh; z-index: 30;">
            {{-- Coffee 3D model viewer --}}
            {{-- <model-viewer id="coffe-model" src="{{ asset('3d/coffee.glb') }}" alt="Model 3D Produk Coffee" camera-controls
                shadow-intensity="1" exposure="0.9" ar style="width: 100%; height: 100%;">
            </model-viewer> --}}
        </div>

        {{-- content di sebelah model --}}
        <div class="content w-50 position-relative ">
            <div class="mt-5 bg-coffee-black"
                style="background: url('{{ asset('img/coffe.png') }}'); background-size: cover; background-position: center; padding: 3rem 0;">

                <header class="text-center mb-4 cl-foam-white">
                    <h3>Jeut Pileh Meja droe</h3>
                </header>

                <div class="container">
                    <div class="row gx-4 gy-4 justify-content-center">
                        @for ($i = 1; $i <= 12; $i++)
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">

                                <div class="bg-latte-beige text-center p-3 rounded shadow-sm">
                                    <button id="btn-number" class="btn btn-outline-dark w-100 fw-bold">
                                        {{ $i }}
                                    </button>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <div class="text-center mt-5">
                        <a href="#conferms" id="btn-seleted" class="btn btn-caramel text-white px-4 py-2 fw-semibold">
                            Confirm
                        </a>
                    </div>
                </div>

            </div>

            <p>
                pilih meja yang akan di reservasi
            </p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum est atque nemo laboriosam iure
                perferendis quae ad minus quibusdam iste quam aperiam commodi, accusantium totam non adipisci fugiat.
                Sint, error!

                Possimus mollitia explicabo voluptates culpa accusantium inventore aliquid aut officiis magni libero
                illo assumenda incidunt, temporibus molestiae commodi? Earum impedit nobis similique, autem iusto quam
                adipisci numquam odit quod perferendis.
                Rem praesentium labore ea distinctio, sed illum ad eos dicta, adipisci aut cupiditate culpa recusandae
                enim tenetur at amet rerum ab ipsum quas quis optio! Dolore ipsam mollitia quibusdam reprehenderit.</p>
            <div class="container ">
                <div class="card shadow-lg rounded-4 p-4">
                    <div class="card-body" id="conferms">
                        <h3 class="card-title text-center mb-4 cl-coffee-black">Konfirmasi Reservasi</h3>
                        <p class="text-center text-muted">Silakan konfirmasi reservasi Anda di sini.</p>

                        <form method="POST" action="{{ route('tableReservations.create') }}">
                            @csrf

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="tel" id="phone" name="phone" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="reservation_date" class="form-label">Tanggal Reservasi</label>
                                    <input type="date" id="reservation_date" name="reservation_date"
                                        class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="guest_count" class="form-label">Jumlah Tamu</label>
                                    <input type="number" id="guest_count" name="guest_count" class="form-control"
                                        min="1" max="10" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="notes" class="form-label">Catatan</label>
                                    <textarea id="notes" name="notes" class="form-control" rows="2" placeholder="Opsional..."></textarea>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn cl-caramel px-4 py-2 rounded-pill shadow"><span
                                        class="cl-coffe-black">confirm</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>

        {{-- content di sebelah kiri yg  di scroll --}}

    </main>

    @vite(entrypoints: 'resources/js/table-reservations/index.js')
</x-layouts>
