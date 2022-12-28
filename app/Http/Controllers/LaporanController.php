<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index (){
        $data = array('title' => 'Laporan');
        return view('laporan.index', $data);
    }
    public function proses (){
        $data = array('title' => 'Laporan Penjualan');
        return view('laporan.proses', $data);
    }
}
