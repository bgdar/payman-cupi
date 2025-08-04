# Aplikasi kedai kopi fullstack with **laravel**

### Tech stack

-   `Laravel` (php)
-   `jquery` (javascript)
-   `bootstrap` (css) Docs : ['https://getbootstrap.com/docs/5.2/getting-started/introduction/]

Material stack

-   [Boostrap icons ](https://icons.getbootstrap.com/)
-   JetgranchMono

### How tu run

1. jalankan server

```bash
    php artisan serve
```

2. jalan vite (untuk menjalanakn file resources seperti js )

```bash
npm run dev
```

### Route

1. `/` = halama dasboard utama
2. `/store` = hamala belanja kupi kupi yg tersedia
3. `/table_revantions` = halaman di mana user booking meja
   [1^] terhubung ke store jadi , jika memilih meja atau setelahnya , maka bisa memilih menu di store 'redirect
4. **`/admin `** route admin **Dashboard** yang hanya bisa di akses oleh adminya

### Database (table)

1.  `Store` = model,controller,factories,migration,seeder
    Descripsi Table :
    id
    'img'
    'judul_product';
    'deskripsi';
    'harga';
    'on_sale';
    timestamps();
2.  `table_rervations` = model,controller,factories,migration,seeder
    Descripsi table
    id
    name
    phone
    email
    reservation_date
    reservation_time
    guest_count
    notes
    store_id
    status
    created_at
    updated_at
3.  `admin` = model, factory, controller ,seeder
    data admin , ambil dari data user yang login jika sesuai password dan name maka bisa login
4.  `admin_store` = model , factory , controller , seeder
    Di sini untuk menyimpan data data pelanggan yang sudah chekcout meja dan coffenya

### flash message

semua flash mesaage akan tampil pada setiap halaman dengan suatu keadaan ,karena saya menyimpnanya di layouts jadi bisa di gunakan di mana saja
daftar flash message

-   `success`
-   `info `
-   `error`

### management barch

saya akn memisahkan dari branch utama untuk masa **development** ke branch `dev` setelah semuanya siap maka siap di gabungkan ke brach utaman `main`

```bash
# Buat branch dev dari main
git checkout main
git checkout -b dev

# Kerja di dev, commit-commit
git add .
git commit -m "masa developmemt"
# simpan ke github isi di branch dev sementara
git push origin dev

# Merge ke main jika siap
git checkout main
#gabungkan ⚠️di akhir nantik setelah semua fitur siap
git merge dev
git push origin main

```
