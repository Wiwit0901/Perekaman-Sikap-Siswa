
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <!--INI BUAT NAVBAR -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="http://127.0.0.1:8000/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/teachers"> Guru <span class="sr-only">(current)</span></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/students">Siswa <span class="sr-only">(current)</span></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/kejadians">Kejadian <span class="sr-only">(current)</span></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/kasuses">Kasus<span class="sr-only">(current)</span></a></a>
      </li>
    </ul>

    <div class="mx-auto">
      <a href="#" class="navbar-brand">Perekaman Sikap Siswa </a>
  </div>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
<!--INI TUTUP NAVBAR -->
  </button>
    <br>
</body>
</html>

@yield('content')