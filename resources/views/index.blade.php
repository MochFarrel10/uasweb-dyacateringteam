<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>Dya Catering</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container">
          <a class="navbar-brand" href="#">Dya Catering</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link " aria-current="page" href="#">Home</a>
              <a class="nav-link " href="#menu">Menu</a>
              <li class="nav-item">
                <button type="button" class="btn btn-light" onclick="setTheme(true)">Light</button>
                <button type="button" class="btn btn-light" onclick="setTheme(false)">Dark</button>
              </li>
            </div>
          </div>
        </div>
      </nav>
      <div class="jumbotron">
        <h1 class="display-4" id="titleHead">Welcome To Dya Catering Website</h1>
        <p class="lead" id="desc">Kenyang Mu Bahagia Ku !!!</p>
        <a class="btn btn-primary btn-lg bg-warning" href="#menu" role="button">Order Now</a>
      </div>
      <div>
        <div class="container text-center" id="about">
            <br>
            <h2 class="title" id="title-about">About Me</h2>
            <img class="img-fluid mt-3 mb-2" src="asset/images/logorm.png" alt="" width="200px" id="img-logo">
            @foreach ($profile as $item)
            <p class="p-about mt-3">
                {{$item->description}}
            </p>
            @endforeach
        </div>
      </div>
        <h1>Menu - Menu</h1>
        @if ($menu -> isEmpty())
        <div class="container mb-3">
          <div class="card">
            <div class="card-body text-center">
              Sorry No Manu Avaliable
            </div>
          </div>
        </div>
        @else   
        <div id="menu" class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($menu as $item)
                <div class="col">
                  <div class="card">
                    <img src="{{$item->thumbnail}}" id="gmr" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->title}}</h5>
                      <p class="card-text">{{$item->description}}</p>
                      <a class="btn btn-warning" href="https://api.whatsapp.com/send?phone=6285806750681&text=Halo,%20saya%20ingin%20memesan%20Menu%20{{$item->title}}%20apakah%20bisa?">Order Now</a>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
      <!-- Daftar Menu -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
      <script src="{{asset('js/app.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>