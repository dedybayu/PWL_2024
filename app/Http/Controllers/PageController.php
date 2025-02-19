<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Dedy Bayu Setiawan (2341720041)';
    }
    public function articles($id){

        return "Halaman Artikel dengan Id: {$id}";
    }
}
