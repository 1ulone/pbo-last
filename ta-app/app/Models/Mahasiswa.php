<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nama',
        'nim',
        'email',
        'jurusan',
        'alamat',
        'tanggal_lahir'
    ];
    public function bimbingan()
    {
        return $this->hasMany(Bimbingan::class);
    }
    public function seminar()
    {
        return $this->hasOne(Seminar::class);
    }
    public function sidang()
    {
        return $this->hasOne(Sidang::class);
    }
}
