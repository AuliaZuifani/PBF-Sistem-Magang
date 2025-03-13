<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan'; // Nama tabel
    protected $primaryKey = 'id_perusahaan'; // Set primary key

    protected $fillable = [
        'nama_perusahaan',
        'no_telp',
        'alamat',
        'email_perusahaan'
    ];

    public $timestamps = false; // Matikan timestamps jika tidak ada di database
}