<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke()
    {
        $nama = "Bobby Bernarddi";
        $nim = "123456789";
        $kelas = "X RPL";

        return "
            <h1>About</h1>
            <p>Nama : $nama</p>
            <p>NIM : $nim</p>
            <p>Kelas : $kelas</p>
        ";
    }
}