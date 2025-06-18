@props(["isNavbar" => false , "isFooter" => false, "title" => "Payman cupi"])

{{-- Layout utama App  --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ $title ?? 'Payman cupi' }}</title>
    {{-- resource  --}}
    @vite(['resources/css/app.css'])
</head>
<body>
    @if ($isNavbar)       
    {{-- navbar start --}}
<nav class="navbar navbar-expand-lg  bg-latte-beige position-fixed top-0 glow" style="width: 100vw; z-index: 100;">

    <ul class="nav nav-pills d-flex justify-content-between w-100">
      <li class="nav-item ">
        <a class="foam-white  active" aria-current="page" href="#">Active</a>
      </li>
      <li class="nav-item  dropdown">
        <a class="foam-white nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Separated link</a></li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="foam-white nav-link" href="#">Link</a>
      </li>
      <li class="nav-item ">
        <a class="foam-white nav-link disabled">About</a>
      </li>
    </ul>
 
</nav>
@endif


    {{ $slot }} <!-- Slot utama, isi halaman -->

@if ($isFooter)
<footer class="py-5 bg-light border-top">
  <div class="container">
    <div class="row">
      <!-- Kolom 1: Branding -->
      <div class="col-12 col-md-3 mb-3">
        <h5 class="d-flex align-items-center mb-2">
          <img src="logo.png" alt="Payman Cupi" width="32" height="32" class="me-2">
          Payman Cupi
        </h5>
        <p class="text-muted">Diseduh dengan cinta oleh tim Payman Cupi. Menyajikan kopi terbaik untuk menemani harimu.</p>
        <p class="text-muted small">Lisensi © 2025 Payman Cupi.</p>
        <p class="text-muted small">Versi 1.0.0</p>
      </div>

      <!-- Kolom 2: Menu -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Menu</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Espresso</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Latte</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Manual Brew</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Signature</a></li>
        </ul>
      </div>

      <!-- Kolom 3: Panduan -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Panduan</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cara Order</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Keanggotaan</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pembayaran</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pengiriman</a></li>
        </ul>
      </div>

      <!-- Kolom 4: Proyek Kami -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Proyek Kami</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Payman Store</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Aplikasi Kasir</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Program Mitra</a></li>
        </ul>
      </div>

      <!-- Kolom 5: Komunitas -->
      <div class="col-6 col-md-2 mb-3">
        <h5>Komunitas</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Instagram</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facebook</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Twitter</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">TikTok</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

    
@endif

<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
</body>
</html>