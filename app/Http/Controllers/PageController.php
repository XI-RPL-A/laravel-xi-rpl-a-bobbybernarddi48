<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Hi! Selamat Datang di Website Laravel Melalui Controller";
    }

    public function about()
    {
        $nama = "Bobby Bernarddi";
        $nim = "123456789";
        $kelas = "XI RPLA";

        return "
            <h1>About</h1>
            <p>Nama : $nama</p>
            <p>NIM : $nim</p>
            <p>Kelas : $kelas</p>
        ";
    }

    public function articles($id)
    {
        return "
            <h1>Artikel</h1>
            <p>Ini adalah halaman Artikel dengan ID: $id</p>
        ";
    }
}