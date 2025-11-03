<x-layouts-admin :title="'Admin Dashboard'">


    <!-- Header -->
    <header class="bg-coffee-brown cl-foam-white text-center py-5 rounded-bottom-4">
        <h1 class="fw-bold">Dashboard Admin</h1>
        <p class="mb-0">Selamat datang, Admin! Pantau aktivitas pengguna dan data penjualan Anda.</p>
    </header>

    <!-- Profil Admin -->
    <section class="container my-5">
        <div class="card bg-foam-white shadow border-0 mx-auto" style="max-width: 800px; border-radius: 20px;">
            <div class="card-body text-center p-4">
                <img src="https://github.com/octocat.png" alt="Foto Admin"
                    class="rounded-circle border border-5 border-caramel"
                    style="width:140px; height:140px; object-fit:cover; margin-top:-75px;">

                <h3 class="mt-3 cl-coffee-black">Admin Utama</h3>
                <p class="text-muted mb-1">admin@coffeeapp.com</p>
                <p class="cl-coffee-brown">Pengelola Sistem dan Data</p>

                <hr>

                <div class="row text-start px-3">
                    <div class="col-md-6 mb-2">
                        <strong class="cd-mocha">Grup Kode:</strong> 123191
                    </div>
                    <div class="col-md-6 mb-2">
                        <strong class="cd-mocha">Peran:</strong> Super Admin
                    </div>
                    <div class="col-12">
                        <strong class="cd-mocha">Terdaftar Sejak:</strong> 1 Januari 2025
                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-center gap-2">
                    <button class="btn bg-coffee-brown cl-foam-white border-0">Edit Profil</button>
                    <button class="btn bg-caramel cl-foam-white border-0">Keluar</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistik -->
    <section class="container my-5">
        <h4 class="mb-4 cl-coffee-black text-center fw-bold">Statistik Utama</h4>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card bg-latte-beige text-center shadow border-0 rounded-4 p-3">
                    <h5 class="cl-coffee-black">Total Pengguna</h5>
                    <h2 class="fw-bold cl-coffee-brown">1,254</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-cup-gray text-center shadow border-0 rounded-4 p-3">
                    <h5 class="cl-coffee-black">Total Penjualan</h5>
                    <h2 class="fw-bold cl-coffee-brown">Rp 75.420.000</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-caramel text-center shadow border-0 rounded-4 p-3">
                    <h5 class="cl-foam-white">Pemasukan Bulan Ini</h5>
                    <h2 class="fw-bold cl-foam-white">Rp 12.300.000</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Tabel -->
    <section class="container my-5">
        <h4 class="mb-4 cl-coffee-black text-center fw-bold">Data Aktivitas dan Penjualan</h4>
        <div class="table-responsive shadow rounded-4 bg-foam-white">
            <table class="table table-hover mb-0">
                <thead class="bg-coffee-brown cl-foam-white">
                    <tr>
                        <th>#</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>Tanggal Transaksi</th>
                        <th>Nominal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="cl-coffee-black">
                    <tr>
                        <td>1</td>
                        <td>Dar</td>
                        <td>dar@gmail.com</td>
                        <td>03 Nov 2025</td>
                        <td>Rp 120.000</td>
                        <td><span class="badge bg-coffee-brown">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rafi</td>
                        <td>rafi@example.com</td>
                        <td>02 Nov 2025</td>
                        <td>Rp 90.000</td>
                        <td><span class="badge bg-caramel">Pending</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Nadia</td>
                        <td>nadia@example.com</td>
                        <td>01 Nov 2025</td>
                        <td>Rp 75.000</td>
                        <td><span class="badge bg-cup-gray">Batal</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    @vite('resources/js/admin/index.js')

</x-layouts-admin>
