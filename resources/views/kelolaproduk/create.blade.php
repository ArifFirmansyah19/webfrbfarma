@extends('layout.navbar')
@section('content')
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row container-fluid mt-3">
                    <div class="col-md-12" style="font-size: 1rem;">
                        <h3><p>Tambah Data Obat</p></h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('kelolaproduk.store') }}" class="form-horizontal" method="POST">  
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-sm-2">Nama Obat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                                @if ($errors->has('nama'))
                                <span class="btn btn-danger">{{ $errors->first('nama') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Kategori Obat</label>
                            <div class="col-sm-12">
                                <select name="kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    @foreach ($kategori as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}
                                        @if (old('kategori')==$k->id) selected @endif>{{ $k->nama }} 
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kategori'))
                                <span class="btn btn-danger">{{ $errors->first('kategori') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Deskripsi</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Harga Jual</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="harga" value="{{ old('harga') }}">

                                @if ($errors->has('harga'))
                                <span class="btn btn-danger">{{ $errors->first('harga') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Stok</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="stok" value="{{ old('stok') }}">

                                @if ($errors->has('stok'))
                                <span class="btn btn-danger">{{ $errors->first('stok') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-primary mt-2">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection