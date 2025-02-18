<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        return 'Nama: [Masukkan Nama Anda] <br> NIM: [Masukkan NIM Anda]';
    }
}

