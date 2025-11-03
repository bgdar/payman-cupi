<x-layouts-admin>


    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg border-0 bg-latte-beige" style="max-width: 400px; width: 100%;">
            <div class="card-header text-center bg-coffee-brown cl-foam-white py-3">
                <i class="bi bi-cup-hot-fill fs-3"></i>
                <h4 class="mt-2 mb-0">Coffee Login</h4>
            </div>
            <div class="card-body bg-foam-white px-4 py-4">
                <form method="post" action="{{ route('admin.login.create') }}">
                    <div class="mb-3">
                        <label for="email" class="form-label cl-coffee-black fw-semibold">
                            <i class="bi bi-envelope-fill me-1 cl-caramel"></i> Email
                        </label>
                        <input type="email" id="email" class="form-control bg-cup-gray cl-coffee-black border-0"
                            placeholder="Masukkan email Anda" required>
                    </div>

                    <div class="mb-3">
                        <label for="grupe-kode" class="form-label cl-coffee-black fw-semibold">
                            <i class="bi bi-lock-fill me-1 cl-caramel">grupe kode</i>
                        </label>
                        <input type="number" id="grupe-kode" class="form-control bg-cup-gray cl-coffee-black border-0"
                            placeholder="masukan kode grupe kamu" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label cl-coffee-black fw-semibold">
                            <i class="bi bi-lock-fill me-1 cl-caramel"></i> Password
                        </label>
                        <input type="password" id="password" class="form-control bg-cup-gray cl-coffee-black border-0"
                            placeholder="Masukkan password" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input class="form-check-input bg-caramel border-0" type="checkbox" value=""
                                id="remember">
                            <label class="form-check-label cl-coffee-black" for="remember">Ingat saya</label>
                        </div>
                        <a href="#" class="cl-caramel text-decoration-none small">Lupa Password?</a>
                    </div>

                    <button type="submit" class="btn bg-mocha cl-foam-white w-100 fw-semibold">
                        <i class="bi bi-door-open-fill me-1"></i> Login
                    </button>
                </form>
            </div>
            <div class="card-footer text-center bg-coffee-brown cl-foam-white py-3">
                <small>Belum punya akun? <a href="#"
                        class="cl-caramel text-decoration-none fw-semibold">Daftar</a></small>
            </div>
        </div>
    </div>


</x-layouts-admin>
