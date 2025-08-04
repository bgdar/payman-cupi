<?php

use App\Models\AdminStores;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    protected $model = AdminStores::class;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_stores', function (Blueprint $table) {
            $table->id();
                   //isis dari data user yang di dapat 
            //data setiap user user 
            $table->string('name');
            $table->integer('phone')->nullable();
            $table->string('email')->unique();

            //data pesanan 
            $table->string("judul_product");
            $table->integer('harga');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_stores');
    }
};
