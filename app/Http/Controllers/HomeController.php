<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello()
    {
        return 'Selamat Datang';
    }
    public function greeting()
    {
        return view('blog.hello', ['name' => 'Andi']);
    }
}
