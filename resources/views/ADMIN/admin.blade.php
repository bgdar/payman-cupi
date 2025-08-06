<x-layouts>

    @if (session('success'))
        <x-popup-info :type="'success'" :message="session('success')"></x-popup-info>
    @elseif (session('error'))
        <x-popup-info :type="'error'" :message="session('error')"></x-popup-info>
    @elseif (session('info'))
        <x-popup-info :type="'info'" :message="session('info')"></x-popup-info>
    @endif

    <header>
        <h3>Admin</h3>
    </header>
    <section class="d-flex justify-content-center">

        <nav>
            <p>navbar</p>
        </nav>
        <main>
            <p>main component</p>
        </main>
    </section>

    @vite('resources/js/ADMIN/index.js')

</x-layouts>
