<x-layouts :title="'Table Reservations'" :isNavbar="true" :is3dModel="true">

    {{-- saya mau paralax effect yg saat di scroll halaman nya tetap --}}

    {{-- saya mau paralax effect yg saat di scroll halaman nya tetap # --}}


    <main
        class="container-fluid position-relative d-flex justify-content-center align-items-center justify-content-md-end flex-md-row flex-column "
        style="height: 100vh;margin-top:10rem;">

        {{-- navbar --}}
        {{-- img 3d yg fixed sebesar 50vw di pc dan 100vw di mobile --}}
        {{-- Model 3D Coffee View --}}
        <div class=" w-50 left-0 top-0 posistion-relative position-md-fixed" style="height: 100vh; z-index: 30;">
            {{-- Coffee 3D model viewer --}}
            <model-viewer id="coffe-model" src="{{ asset('3d/coffee.glb') }}" alt="Model 3D Produk Coffee" camera-controls
                shadow-intensity="1" exposure="0.9" ar style="width: 100%; height: 100%;">
            </model-viewer>
        </div>

        {{-- content di sebelah model --}}
        <div class="content w-50 " style="height: 1000px;">
            <header>
                <h3>Jeut Pileh Meja droe</h3>
            </header>
            <div class="container">
                <div class="row gx-4 gy-4 justify-content-center">
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>1</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>2</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>3</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>4</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>5</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>6</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>7</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>8</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="p-3 bg-latte-beige custom-card">
                            <p>9</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- content di sebelah kiri yg  di scroll --}}

    </main>

    @vite(entrypoints: 'resources/js/table-reservations/index.js')
</x-layouts>
