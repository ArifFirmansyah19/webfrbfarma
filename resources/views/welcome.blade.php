<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    
    <title>APOTEK FRB FARMA |</title>
</head>
<style>
  #atas li:hover{
    background-color: rgb(163, 160, 160);
    opacity: 0,9;
  }
  .nav-link:hover{
    background-color: rgb(64, 163, 125);
  }
</style>
</head>

  <body>

    <nav class="navbar fixed-top" style="padding: 0; margin:0;">
    <div class="container-fluid"  style="background-color:  rgb(20, 240, 12);">
    <img src="img/logo.png" alt="" width="120" height="80" class="pt-2">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav text-center">
        <li class="nav-item"><a href="/home" class="nav-link" style="font-size: 18px; color: black; font-family: 'Times New Roman', Times, serif;">Home</a></li>
        <li class="nav-item"><a href="/produk" class="nav-link"  style="font-size: 18px; color: black; font-family: 'Times New Roman', Times, serif;">Produk</a></li>
        <li class="nav-item"><a class="nav-link" href="/informasi" style="font-size: 18px; color: black; font-family: 'Times New Roman', Times, serif;">Informasi</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" style="font-size: 18px; color: black; font-family: 'Times New Roman', Times, serif;">Login</a></li>            
      </ul>
    </div>
  </nav>


  @include('layout.carousel')
  @include('layout.deskripsiapotek')
  </div>
  @include('layout.moto')
  </div>
  @include('layout.penjelasan')
  </div>
  @include('layout.footer')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
