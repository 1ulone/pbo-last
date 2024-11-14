<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sidang extends Model
{
    use HasFactory;

    protected $table = 'sidang';

    protected $fillable = [
        'penguji_id',
        'mahasiswa_id',
        'jadwal_bimbingan'
    ];

}