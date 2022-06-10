@extends('layout.navbar')

@section('content')
<body class="content " style="background-color: rgb(121, 241, 121); margin-top:60px ;">  
</div>
<div>
  <div class="row">
    <div class="col-sm-3">
      <div class="card " style="margin-top: 50px; left: 200px; background-color: rgb(44, 240, 102);">

        
        <div class="card-body">
          <a href="#" class="btn btn-success mb-3">Kontak</a>
          <h5 class="card-subtitle mb-2 ">Hubungi Kami:</h5>
          <i class="bi bi-telephone">  Telepon</i>
          <p> 0812-9888-9344</p>
          <i class="bi bi-envelope-fill">  E-mail</i> 
          <p>frbfarma2@gmail.com</p>
          <i class="bi bi-dribbble">  Website</i> 
          <p>FRBFARMAobat.ac.id</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="card" style="margin-top: 50px; left: 500px; background-color:rgb(44, 240, 102) ;">
        <div class="card-body">
          <a href="#" class="btn btn-success background-color mb-2" style="background-color: rgb(233, 24, 35);">Sosial Media</a>
          <h5 class="card-title">Ikuti Kami:</h5>
          <i class="bi bi-whatsapp"></i>          <p> 0812-9888-9344</p>
          <i class="bi bi-instagram"></i>          <P> @FRB-FARMA-Official</P>
          <i class="bi bi-facebook"></i>          <p>FRB-FARMA-Official</p>
        </div>
      </div>
    </div>
  </div>
    <div>
      <div class=" mt-4"> 
    <div style="background-color: rgb(134, 230, 134)" class="card text-center ">
    <div class="card-body ">
      <h5 class="card-title">Lokasi FRB FARMA</h5>
      <p class="card-text">Apotek FRB FARMA berlokasi di Jl.Simpang Sungai Duren RT 10, Jambi 36651</p>
    </div>
  </div>
      </div>
  </div>
</div>
<div class="mt-4">
  <div style="background-color: rgb(13, 236, 13)" class="card text-center ">
    <div class="card-body ">
      <h5 class="card-title">Lokasi FRB FARMA</h5>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2430611956925!2d103.51654571340424!3d-1.6100944956202299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2588f48ba4d2f3%3A0x3595db7f5bb6e995!2sUniversitas%20Jambi!5e0!3m2!1sid!2sid!4v1653832899202!5m2!1sid!2sid" width="600" height="450"
       style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
@include('layout.footer')
@endsection