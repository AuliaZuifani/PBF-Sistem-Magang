<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembimbing extends Model
{
    use HasFactory;

    protected $table = 'pembimbing';
    protected $primaryKey = 'nidn_pembimbing';
    public $incrementing = false; // Karena primary key bukan integer auto-increment
    protected $keyType = 'string';

    protected $fillable = ['nidn_pembimbing', 'nama_pembimbing', 'email', 'no_telp'];
    public $timestamps = false;
}
