<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_rervations', function (Blueprint $table) {
            $table->id();
            //data user
            $table->string('name');
            $table->string('email');
            $table->string('phone');

            // Waktu reservasi
            $table->date('reservation_date');
            $table->time('reservation_time');

            // Jumlah tamu
            $table->integer('guest_count');

            //  catatan tambahan dari customer
            $table->text('notes')->nullable();

            // relasi ke table sore 
            $table->foreignId('store_id')->nullable()->constrained('stores')->onDelete('cascade');
            // Status (pending, confirmed, canceled, etc.)
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_rervations');
    }
};
