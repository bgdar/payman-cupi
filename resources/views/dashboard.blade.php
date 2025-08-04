<x-layouts :title="'Dashboard'" :isNavbar="true">

    {{-- Info popup  --}}

    @if (session('error'))
        <x-popup-info type="info" :Messsage="{{ $error }}"></x-popup-info>
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
            @if ($isLogin != null)
                <div class="info">
                    <p class="text-muted"><a href="{{ route('user.login') }}">Get started</a>
                </div>
            @endif
        </div>
    </main>


    <section class="" style="z-index: -20;">

        <h3>Foto</h3>

        <div class="container p-5 ">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 justify-content-center">
                @for ($i = 0; $i < 6; $i++)
                    <div class="col">
                        <div class="card h-100 text-white bg-dark position-relative overflow-hidden shadow">
                            <img src="{{ asset('img/coffe.png') }}" class="card-img-top img-fluid" alt="Gambar Kopi"
                                style="object-fit: cover; height: 200px;">
                            <div
                                class="card-body position-absolute bottom-0 start-0 w-100 bg-dark bg-opacity-75 px-2 py-2">
                                <h6 class="card-title mb-0">Judul img</h6>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>



    </section>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, possimus? Aspernatur est quia, ipsam atque vel
        magni ea magnam doloremque labore quae repudiandae voluptate possimus, quidem molestiae exercitationem excepturi
        deleniti.
        Vitae tenetur sint fugiat minus voluptate maiores, veniam molestiae inventore, autem in excepturi architecto
        cupiditate veritatis nam vero. Sint minus assumenda blanditiis ipsa soluta, doloribus suscipit animi. Officiis,
        saepe fugiat.
        Cumque excepturi, sapiente iure iste aspernatur voluptatibus optio alias, repudiandae ipsam expedita non
        voluptatem recusandae. Alias voluptates possimus, nemo reprehenderit quasi saepe nesciunt aliquam veritatis
        illo, placeat maxime numquam doloribus.
        Porro quo placeat quidem non, saepe inventore possimus sint blanditiis optio aperiam id? Aut cupiditate libero
        doloribus quas ratione magnam. Ipsum ducimus at sed doloribus, alias odit consequuntur veniam harum.
        Quo adipisci animi ipsam obcaecati, accusantium quia? Aliquid rem architecto error sint neque nam iste libero,
        quas recusandae. In doloribus vero qui culpa voluptatem iste natus aspernatur labore incidunt nemo.
        Ea nobis, quos, assumenda earum impedit, mollitia fugit reprehenderit expedita doloribus porro non laudantium
        explicabo quas aliquam placeat consectetur! Ullam quae labore culpa optio quas molestias numquam tempora. Quos,
        obcaecati?
        Earum perspiciatis, quia pariatur tenetur velit at, voluptate tempora cumque blanditiis dignissimos libero
        temporibus. Dicta, quidem praesentium sapiente nostrum labore molestias perferendis officia, harum, optio illo
        veniam earum suscipit. Minima?
        Suscipit neque reiciendis maxime? Aspernatur tempore accusantium quod, repellat vel quas vitae in natus
        praesentium asperiores blanditiis repellendus corrupti voluptatem nisi doloribus amet eum iusto ab laudantium
        dicta necessitatibus! Eos.
        Doloremque ex, numquam quos totam provident quidem error repudiandae nisi. Asperiores nostrum dolor recusandae
        culpa ea debitis adipisci aut sunt incidunt ex commodi, accusamus totam. Voluptates unde suscipit dignissimos
        eveniet.
        Ad aliquam error ab nobis quo unde quod pariatur fuga iusto? Eligendi cumque placeat aspernatur repellendus
        exercitationem? Rem deserunt at obcaecati sapiente, cumque molestias repellat earum, commodi, cupiditate dolores
        quod!
    </p>


    {{-- main dashboard and --}}

    {{-- dasboard js --}}
    @vite('resources/js/dashboard.js')
</x-layouts>
