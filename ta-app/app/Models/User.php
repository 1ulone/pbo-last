<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'roles',
        'jurusan',
        'password'
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
