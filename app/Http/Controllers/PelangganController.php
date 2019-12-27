<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    //
    public function index(){
        $data_pelanggan = \App\Pelanggan::all();
        return view('pelanggan.index',['data_pelanggan'=>$data_pelanggan]);
    }
}
