<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    public function authenticate($email, $password)
    {
        $user = $this->where('email', $email)->first();

        if ($user && $password == $user->password) {
            return $user;
        }

        return null;
    }
}
