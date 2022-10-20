<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $data = array('title' => 'Kategori Produk');
            return view('kategori.index', $data);
        }
}
