<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('tampilan.home');
    }

    public function kelola()
    {    
        // $kateogri = DB::table('kategoris')->get();
        // $data = [];
        // $label = [];

        // foreach ($kateogri as $i => $v) {
        //     $value[$i] = DB::table('obats')->where('id_kategori',$v->id)->count();
        //     $label[$i] = $v->nama;
        // }
        return view('tampilan.kelolaproduk');

    }

    public function informasi()
    {
        return view('tampilan.informasi');
    }

    public function produk()
    {
        return view('tampilan.produk');
    }

}
