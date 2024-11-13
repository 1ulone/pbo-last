<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'roles',
        'jurusan',
        'email_verified_at',
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_confirmed_at',
        'remember_token',
        'current_team_id',
        'profile_photo_path',
        'created_at',
        'updated_at'
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
