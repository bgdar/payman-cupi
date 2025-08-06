<x-layouts :isNavbar="true" :title="$user">

    @if (session('success'))
        <x-popup-info :type="'success'" :message="session('success')"></x-popup-info>
    @elseif (session('error'))
        <x-popup-info :type="'error'" :message="session('error')"></x-popup-info>
    @elseif (session('info'))
        <x-popup-info :type="'info'" :message="session('info')"></x-popup-info>
    @endif

    <p>user page</p>
    <p>gunakan misalnya untuk menampilkan dashboard siapa saja yang sudah login </p>
</x-layouts>
