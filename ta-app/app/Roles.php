<?php

namespace App;

enum Roles: string
{
    case Admin = 'admin';
    case Mahasiswa = 'mahasiswa';
    case Pembimbing = "pembimbing";
    case Penguji = "penguji";
}
