<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public $fillable = ['nis','nama','jenis_kelamin','agama','tanggal_lahir','alamat'];
    public $timestamps = true;
}
