<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa'; 

    protected $fillable = [
        'nama', 'kelas', 'tempat_lahir', 'tangal_lahir', 'jenis_kelamin', 'alamat', 'email', 'password', 'no_telp'
    ];
}