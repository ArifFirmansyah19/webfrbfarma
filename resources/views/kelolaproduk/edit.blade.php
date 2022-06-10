@extends('layout.navbar')
@section('content')
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row container-fluid mt-3">
                    <div class="col-md-12" align="start" style="font-size: 1rem;">
                        <p>Edit Data Obat</p>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelolaproduk.update', $obat->id) }}" class="form-horizontal" method="POST">  
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nama Obat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama" value="{{ $obat->nama_obat }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Kategori Obat</label>
                            <div class="col-sm-12">
                                <select name="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}" @if($obat->id_kategori==$k->id) selected @endif>{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Deskripsi</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="deskripsi" value="{{ $obat->deskripsi }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Harga Jual</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="harga" value="{{ $obat->harga }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Stok</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="stok" value="{{ $obat->stok }}">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary">Perbarui Data</button>
                                <a href="{{ route('kelolaproduk.index') }}" class="btn btn-warning">Kembali</a>                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection