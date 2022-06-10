<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\obat;
use \Illuminate\Database\Eloquent\Collection;


class produkController extends Controller
{
    function index()
    {
        $kategori = kategori::all();
        return view('tampilan.produk', compact('kategori'));
    }

    public function obat_kategori(kategori $kategori)
    {

       // $kategori = kategori::all();
        $obatall = $kategori->Obat()->get();
        //return view('produk-kategori', compact('kategori', 'obatall'));
        return $obatall;
    }
}
