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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();

            //data admin
            $table->string('name');
            $table->string('password');
            $table->string("email")->unique();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();

           
        });

        //isis dari data user yang di dapat 
        Schema::create('admin_stores', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('admins');
        Schema::dropIfExists('admin_stores');
    }
};
