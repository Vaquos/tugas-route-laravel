<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $fillable = ['name', 'nobp', 'jurusan', 'prodi', 'tgllahir', 'email', 'nohp'];
}
