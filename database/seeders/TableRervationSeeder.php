<?php

namespace Database\Seeders;

use App\Models\TableRervation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableRervationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        TableRervation::factory()->count(10)->create();
    }
}
