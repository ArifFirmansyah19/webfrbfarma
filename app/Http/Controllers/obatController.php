<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\obat;

class obatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = obat::all();
        return view('kelolaproduk.index',compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = \App\Models\kategori::all();
        return view('kelolaproduk.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $aturan = [
            'nama' => 'required',
            'kategori' => 'required',
            // 'gambar' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',   
        ];

        $pesan = [
            'required' => 'Data ini Wajib Diisi !',
            'numeric' => 'Isi dengan angka !'
        ];

        $this->validate($request,$aturan,$pesan);

        obat::create([
            'nama_obat' => $request->nama,
            'id_kategori' => $request->kategori,
            // 'gambar'=> $request->gambar,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect()->route('kelolaproduk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $obat = obat::where('id',$id)->first();
        return view('kelolaproduk.show',compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori::all();
        $obat = obat::where('id',$id)->first();
        return view('kelolaproduk.edit',compact('obat','kategori'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            obat::where('id',$id)->update([
            'nama_obat' => $request->nama,
            'id_kategori' => $request->kategori,
            // 'gambar'=> $request->gambar,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect()->route('kelolaproduk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        obat::where('id',$id)->delete();
        return redirect()->route('kelolaproduk.index');
    }
}
