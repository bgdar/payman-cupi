<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{


    use HasFactory;
    /**
     * handle user dengan metho ini
     */
    public function users()
    {

        // relasi ke user , jika admin di hapus , user ikut ke hapus
        return $this->hasMany(User::class, "grupe-kode", "grupe-kode");
    }
}
