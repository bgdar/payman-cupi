<x-layouts>


    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card bg-latte-beige"
                    style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 20px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <div class="card-header bg-coffee-black text-white text-center py-3">
                        <h4 class="mb-0">Masuk ke Warkop</h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body px-4 py-5">
                        <form action="/login" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label cl-coffee-black">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required
                                    style="border-radius: 0.75rem; box-shadow: none;">
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label cl-coffee-black">Password</label>
                                <input type="password" id="password" name="password" class="form-control" required
                                    style="border-radius: 0.75rem; box-shadow: none;">
                            </div>

                            <button type="submit" class="btn bg-mocha w-100"
                                style="color: #fff; border-radius: 0.5rem; border: none;">
                                Masuk
                            </button>
                        </form>
                    </div>

                    <!-- Footer -->
                    <div class="card-footer bg-foam-white text-center py-3">
                        <small class="cl-coffee-black">
                            Belum punya akun?
                            <a href="/register" class="cl-caramel text-decoration-none">Daftar di sini</a>
                        </small>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layouts>
