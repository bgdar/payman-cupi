<x-layouts-user :title="'profile', $user->name" :isNavbar="true">

    <!-- Header Profil -->
    <div class="text-center py-5 bg-coffee-brown cl-foam-white rounded-bottom-4">
        <h1 class="fw-bold">Profil Pengguna</h1>
        <p class="mb-0">Selamat datang di halaman profil Anda</p>
    </div>

    <!-- Card Profil -->
    <div class="container my-5">
        <div class="card mx-auto bg-foam-white shadow" style="max-width: 600px; border-radius: 20px;">
            <div class="card-body text-center p-4">

                <!-- Gambar Profil -->
                <img src="{{ $user->img || asset('img/user.svg') }}" alt="{{ $user->name || 'anonimus' }}"
                    class="rounded-circle  border border-caramel"
                    style="width:150px; height:150px; object-fit:cover; margin-top:-75px;">

                <h3 class="mt-3 cl-coffee-black">{{ $user->name ?? 'anonimus' }}</h3>
                <p class="text-muted mb-1">{{ $user->email ?? 'anonimus@gmail.com' }}</p>

                <hr>

                <!-- Info Tambahan -->
                <div class="row text-start px-3">
                    <div class="col-6 mb-2">
                        <strong class="cd-mocha">Grup Kode:</strong> {{ $user->grupe_kode ?? 'bebas' }}
                    </div>
                    <div class="col-6 mb-2">
                        <a class="" href="{{ $user->role == 'admin' ? route('admin.dashboard') : route('user') }}"
                            target="_blank" rel="noopener noreferrer">
                            <strong class="cd-mocha">Role:</strong> {{ $user->role ?? 'anonimus' }}
                        </a>

                    </div>
                    <div class="col-12 mb-3">
                        <strong class="cd-mocha">Bergabung Sejak:</strong> 3 November 2025
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-center gap-2 mt-4">
                    <button class="btn bg-coffee-brown cl-foam-white border-0">
                        Edit Profil
                    </button>
                    <button class="btn bg-caramel cl-foam-white border-0">
                        Keluar
                    </button>
                </div>

            </div>
        </div>
    </div>



</x-layouts-user>
