<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $context = [

            'judul_halaman' => "Beranda",
        ];
            
        return view('index', $context);
    }
    public function detail()
    {

        $context = [

            'judul_halaman' => "Detail buku",
        ];
            
        return view('detail', $context);
    }
}
