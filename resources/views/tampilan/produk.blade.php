@extends('layout.navbar')

@section('content')
<div class="row pt-5 pt-5">
  <div class="col-md-2 mt-4 pt-1" style="background-color: rgb(0, 248, 194);">
    <ul class="nav flex-column m-lg-2 mb-4">
      <li class="nav-item">
        <a class="nav-link text-white fs-4 mt-2"  href="#" style="font-family: 'Times New Roman', Times, serif; background-color: rgb(24, 85, 165); height: 60px; width: 200px;" class="nav-link active" aria-current="page" >Kategori</a>
      </li><hr class="bg-dark">

      @foreach ($kategori as $item)
      <li class="nav-item">
        <a class="nav-link text-black-50 fs-5" href="{{ route('tampilan.produk', $item->id) }}" style="margin-bottom:10px; margin-top:20px; font-family: 'Times New Roman', Times, serif; ">{{ $item->nama }}</a>
      </li><hr class="bg-dark"> 
      @endforeach
  </div>  
    <div class="col-md-10">
      <div class="row">
        <div class="container-fluid"></div>
          <div class="col-md-12 mt-4" style="background-color: rgb(78, 81, 82)">
                <ul class="nav nav-pills m-lg-3 mb-5">
                  <form class="d-lg-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari obat anda disini" aria-label="Search">
                    <button class="btn btn-outline-success text-white" style="background-color: rgb(0, 128, 49);" type="submit">Cari</button> 
                  </form>
                </ul>
            </div>
          </div>
          </div>
        </div>
    </div>
    

    
    <div class="card-footer text-muted  text-center mt-2 pt-4 pb-5" style="background-color: black">
      Dibuat oleh FRB FARMA, 2022
     </div>
    @endsection
