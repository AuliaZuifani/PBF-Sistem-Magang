<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'npm_mhs'; // Gunakan npm_mhs sebagai primary key
    public $incrementing = false; // Nonaktifkan auto-increment (karena string)
    protected $keyType = 'string'; // Tentukan bahwa primary key berupa string

    protected $fillable = ['npm_mhs', 'nama_mhs', 'prodi', 'alamat', 'no_telp', 'email'];

    public $timestamps = false; 
}
