@extends('layout.navbar')
@section('content')
<div class="container" style="margin-top: 100px;"">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row container-fluid mt-3">
                    <div class="col-md-6">
                        <a href="{{ route('kelolaproduk.create') }}" class="btn btn-primary">Tambah Obat</a>
                    </div>
                    <div class="col-md-6" align="end" style="font-size: 1rem;">
                        <p>Form Kelola Data Obat</p>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Dibuat Pada</th>
                                <th>Diedit Pada</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($obat as $i => $p)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $p->nama_obat }}</td>
                                    <td>{{ $p->kategori->nama }}</td>
                                    <td>{{ $p->deskripsi }}</td>
                                    <td>{{ $p->harga }}</td>
                                    <td>{{ $p->stok }}</td>
                                    <td>{{ $p->created_at }}</td>
                                    <td>{{ $p->updated_at }}</td>
                                    <td><a href="{{ route('kelolaproduk.show',$p->id) }}" class="btn btn-warning">Detail</a></td>
                                    <td><a class="btn btn-success" href="{{ route('kelolaproduk.edit',$p->id) }}">Edit</a></td>
                                    <td><form action="{{ route('kelolaproduk.destroy',$p->id) }}" method="POST">{{ csrf_field() }}<input type="hidden" name="_method" value="DELETE"><button class="btn btn-danger" type="submit">Hapus</button></form></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection