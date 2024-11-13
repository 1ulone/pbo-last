<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $table = 'seminar';

    protected $fillable = [
        'pembimbing_id',
        'penguji_id',
        'mahasiswa_id',
        'jadwal_bimbingan'
    ];

    // Define relationships if needed
    public function pembimbing()
    {
        return $this->belongsTo(User::class, 'pembimbing_id');
    }

    public function penguji()
    {
        return $this->belongsTo(User::class, 'penguji_id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
}
