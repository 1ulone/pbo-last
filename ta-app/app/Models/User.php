<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    private $id;
    private $username;
    private $password; // This is now stored in plain text, which is not recommended
    private $role;

    public function __construct($id, $username, $role) {
        $this->id = $id;
        $this->username = $username;
        $this->role = $role;
    }

    public function getRole() {
        return $this->role;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }
}
