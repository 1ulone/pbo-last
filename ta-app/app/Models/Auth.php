<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Auth extends Model
{
    public function authenticate($email, $password)
    {
        $user = DB::table('users')->where('email', $email)->first();
        if ($user && $password == $user->password) {
            return $user;
        }
        return null;
    }
}
