<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke($id)
    {
        return "
            <h1>Artikel</h1>
            <p>Ini adalah halaman Artikel dengan ID : $id</p>
        ";
    }
}