<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = "mahasiswas";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'nama', 'npm', 'jurusan', 'tanggal_masuk'];
}
