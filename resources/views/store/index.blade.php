<x-layouts :title="'Store'">

<header>


    
</header>


<div class="container py-5">
  <h2 class="text-center mb-4">Menu Warkop Kedai Kopi</h2>
  <div class="row g-4">

    <!-- Card 1 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://source.unsplash.com/300x200/?coffee" class="card-img-top" alt="Kopi Hitam">
        <div class="card-body">
          <h5 class="card-title">Kopi Hitam</h5>
          <p class="card-text text-muted">Kopi robusta khas warkop, disajikan panas.</p>
          <div class="d-flex justify-content-and">
            <hr>
            <p>
                on sale {{ '100' }}
            </p>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold">Rp5.000</span>
            <a href="#" class="btn btn-sm btn-primary">Pesan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://source.unsplash.com/300x200/?cappuccino" class="card-img-top" alt="Cappuccino">
        <div class="card-body">
          <h5 class="card-title">Cappuccino</h5>
          <p class="card-text text-muted">Campuran kopi dan susu yang lembut.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold">Rp12.000</span>
            <a href="#" class="btn btn-sm btn-primary">Pesan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://source.unsplash.com/300x200/?latte" class="card-img-top" alt="Kopi Latte">
        <div class="card-body">
          <h5 class="card-title">Kopi Latte</h5>
          <p class="card-text text-muted">Perpaduan kopi, susu, dan sedikit foam.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold">Rp15.000</span>
            <a href="#" class="btn btn-sm btn-primary">Pesan</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-12 col-md-6 col-lg-3">
      <div class="card h-100 shadow-sm">
        <img src="https://source.unsplash.com/300x200/?coffee-snack" class="card-img-top" alt="Roti Bakar">
        <div class="card-body">
          <h5 class="card-title">Roti Bakar</h5>
          <p class="card-text text-muted">Roti isi cokelat atau keju, cocok untuk kopi.</p>
          <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold">Rp8.000</span>
            <a href="#" class="btn btn-sm btn-primary">Pesan</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


</x-layouts>