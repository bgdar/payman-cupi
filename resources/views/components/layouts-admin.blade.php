<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    {{-- crf token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    {{-- Icons bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    {{-- fotn Roboto Slab --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />

    <title>{{ $title ?? 'Payman cupi' }}</title>
    {{-- resource --}} @vite(['resources/css/app.css'])
    <style>
        html,
        body {
            font-family: "Roboto Slab";
            scroll-behavior: smooth;
        }
    </style>


</head>

<body>
    {{-- MOdal Modal yanga akan di terima  start --}}

    @if (session('success'))
        <x-popup-info :type="'success'" :message="session('success')"></x-popup-info>
    @elseif (session('error'))
        <x-popup-info :type="'error'" :message="session('error')"></x-popup-info>
    @elseif (session('info'))
        <x-popup-info :type="'info'" :message="session('info')"></x-popup-info>
    @endif

    {{ $slot }}
    <!-- Slot utama, isi halaman atau isi di dalamnya -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>

</html>
