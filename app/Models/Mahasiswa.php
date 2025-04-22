<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    // Tambahkan ini:
    protected $fillable = ['nama', 'nim', 'jurusan'];
}

