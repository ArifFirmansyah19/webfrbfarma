@extends('layout.navbar')
@section('content')
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row container-fluid mt-3">
                    <div class="col-md-12" align="start" style="font-size: 1rem;">
                        <p>Data Detail Obat</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-horizontal">  
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nama Obat</label>
                            <div class="col-sm-12">
                                <p>"{{ $obat->nama_obat }}"</p> 
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Kategori Obat</label>
                            <div class="col-sm-12">
                                {{ $obat->kategori->nama}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Deskripsi</label>
                            <div class="col-sm-12">
                                <p>{{ $obat->deskripsi }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Harga</label>
                            <div class="col-sm-12">
                                <p>{{ $obat->harga }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Stok</label>
                            <div class="col-sm-12">
                                <p>{{ $obat->stok }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12">
                                <a href="{{ route('kelolaproduk.index') }}" class="btn btn-warning">Kembali</a>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection