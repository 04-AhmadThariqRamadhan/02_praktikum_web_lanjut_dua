<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }
    public function about()
    {
        return "Ahmad Thariq Ramadhan, 2041720200";
    }
    public function articles($id)
    {
        return "Halaman Artikel Dengan ID " .$id;
    }
    //
}
