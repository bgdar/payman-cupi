@props(['isNavbar' => false, 'isFooter' => false, 'title' => 'Payman cupi', 'is3dModel' => false]) {{-- Layout utama App --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />

    {{-- Icons bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />

    {{-- fotn Roboto Slab --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet" />

    {{-- 3D resource model-viewer (karena langsung di panggil tapi dampak
        memory sangat kecil) --}} @if ($is3dModel)
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
    @endif

    <title>{{ $title ?? 'Payman cupi' }}</title>
    {{-- resource --}} @vite(['resources/css/app.css'])
</head>

<style>
    html,
    body {
        font-family: "Roboto Slab";
        scroll-behavior: smooth;
    }
</style>

<body data-bs-spy="scroll" data-bs-target="#navbar">
    @if ($isNavbar)
        {{-- navbar start --}}
        <nav id="globalNav" class="position-fixed top-0 navbar bg-light px-1 py-2"
            style="z-index: 1000; width: 100vw;;">
            {{-- Tombol toggle menu (untuk mobile) --}}
            <button id="menu-items" class="btn d-lg-none">
                <i class="bi bi-list fs-3"></i>
            </button>
            <button id="destop-icon" class="btn ">
                <i class="bi bi-cup-hot"></i>

            </button>

            <ul id="main-menu" class="nav flex-column flex-lg-row gap-3 ms-lg-auto mt-3 mt-lg-0 d-none d-lg-flex">
                <li class="nav-item">
                    <a class="nav-link" href="{{ request()->is('/') ? '#dashboard' : route('dashboard') }}">
                        <i class="bi bi-menu-button-wide me-1"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('store') }}">
                        <i class="bi bi-cup-hot me-1"></i>
                        <span>Store</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tableReservations') }}">
                        <i class="bi bi-door-open-fill me-1"></i>
                        <span>Reservasi Meja</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        <i class="bi bi-shop me-1"></i>
                        <span>About</span>
                    </a>
                </li>
            </ul>
        </nav>
    @endif {{ $slot }}
    <!-- Slot utama, isi halaman atau isi di dalamnya -->

    @if ($isFooter)
        <footer class="py-5 bg-light border-top">
            <div class="container">
                <div class="row">
                    <!-- Kolom 1: Branding -->
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="d-flex align-items-center mb-2">
                            <img src="logo.png" alt="Payman Cupi" width="32" height="32" class="me-2" />
                            Payman Cupi
                        </h5>
                        <p class="text-muted">
                            Diseduh dengan cinta oleh tim Payman Cupi.
                            Menyajikan kopi terbaik untuk menemani harimu.
                        </p>
                        <p class="text-muted small">
                            Lisensi © 2025 Payman Cupi.
                        </p>
                        <p class="text-muted small">Versi 1.0.0</p>
                    </div>

                    <!-- Kolom 2: Menu -->
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Menu</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Espresso</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Latte</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Manual Brew</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Signature</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Kolom 3: Panduan -->
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Panduan</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Cara Order</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Keanggotaan</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Pembayaran</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Pengiriman</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Kolom 4: Proyek Kami -->
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Proyek Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Payman Store</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Aplikasi Kasir</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Program Mitra</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Kolom 5: Komunitas -->
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Komunitas</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Instagram</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Facebook</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">Twitter</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">TikTok</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script>
        $('#menu-items').on('click', function() {
            $('#main-menu').toggleClass('menu-mobile-show d-none d-flex');
        });
    </script>
</body>

</html>
