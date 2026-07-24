<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function home()
    {
        return "
        <h1>Company Profile</h1>
        <h2>Selamat Datang di Website Company</h2>
        <p>Website profile perusahaan menggunakan Laravel</p>
        ";
    }


    public function products()
    {
        return "
        <h1>Products</h1>
        <ul>
            <li>Marbel Edu Games</li>
            <li>Marbel Android Games</li>
            <li>Riri Story Books</li>
            <li>Kolak Kids Songs</li>
        </ul>
        ";
    }


    public function productCategory($category)
    {
        return "
        <h1>Product Category</h1>
        <p>Kategori produk : $category</p>
        ";
    }


    public function news()
    {
        return "
        <h1>News</h1>
        <p>Daftar berita perusahaan</p>
        ";
    }


    public function detailNews($slug)
    {
        return "
        <h1>Detail News</h1>
        <p>Berita : $slug</p>
        ";
    }


    public function program()
    {
        return "
        <h1>Program</h1>
        <ul>
            <li>Karir</li>
            <li>Magang</li>
            <li>Kunjungan Industri</li>
        </ul>
        ";
    }


    public function programDetail($program)
    {
        return "
        <h1>Program</h1>
        <p>Program : $program</p>
        ";
    }


    public function about()
    {
        return "
        <h1>About Us</h1>
        <p>Company profile website menggunakan Laravel</p>
        ";
    }
}