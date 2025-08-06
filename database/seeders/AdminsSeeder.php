<?php

namespace Database\Seeders;

use App\Models\admins;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     admins::created([
            "name"=>"dar",
            "email"=>"dar@gmail.com",
            "password"=>"dar",
            "phone"=>"089523135244",
            "address"=>"Kec.Kuta baro Aceh besar",
        ]);
        //
    }
}
