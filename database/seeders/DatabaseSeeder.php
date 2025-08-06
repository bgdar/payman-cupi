<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan semua seeder untuk di daftarkan 
        $this->call([
            UserSeeder::class,
            AdminsSeeder::class,
            StoreSeeder::class,
            AdminStoresSeeder::class,
            TableRervationSeeder::class,
            // TableRervationsSeeder::class, // commented karena sepertinya duplikat
        ]);
    }
}
