<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script type="text/javascript" src="/js/app.js"></script>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                width: 100%;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
  <a class="navbar-brand font-weight-bold" style="color: #4d4dff" href="{{'/'}}"><h4>BliDevil</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Profile</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Social Media
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Facebook</a>
          <a class="dropdown-item" href="#">Twitter</a>
          <!--<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Project
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/mahasiswa">SIM</a>
          <!--<div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a> -->
        </div>
      </li>
    </ul>
  </div>
  </div>
</nav>
<form class="wrapper fadeInDown form-inline justify-content-center pt-md-6">
<!-- Navigation -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active">
        <img src="/img/img1.jpg" width="1500px" height="450px">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4"></h2>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item">
        <img src="/img/img2.jpg" width="1500px" height="450px">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4"></h2>
          <p class="lead"></p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item">
        <img src="/img/img3.jpg" width="1500px" height="450px">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4"></h2>
          <p class="lead"></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
  </form>
<!--<form style="float: right; margin-right: 7%;" class="form-inline my-2 my-lg-0 pt-md-2">
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->

<form style="width: 100%; margin-left: 10%" class="pt-md-2" >
    <!-- Grid row -->
<div class="row">

  <!-- Grid column -->
  <div class="col-md-6 d-flex mb-3"  style="margin-left: 27%; margin-top: 2%;">

    <button type="button" class="btn btn-light waves-effect filter" data-rel="all">All</button>
    <button type="button" class="btn btn-light waves-effect filter" data-rel="1">Academic
    <button type="button" class="btn btn-light waves-effect filter" data-rel="2">Goverment</button>

  </div>
  <!-- Grid column -->

</div>
<!-- Grid row -->

<!-- Grid row -->
<table>
    <tr>
        <td style="width: 800px;" rowspan="17">
<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-0 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-0 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-0 pics animation all 1">
    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg" alt="Card image cap">
  </div>
  <!-- Grid column -->



</div>
<!-- Grid row -->

</td>
<td class="table-bordered" style="width:20px; border: 1px;" rowspan="17">

</td>
<td class="pt-md-2" style=" vertical-align: text-top; font-weight: bold; width: 260px; text-align: center; height: 10px;" colspan="2"><h3> Our Team</h3> </td>
</tr >
<tr style="height: 10px;">
<td class="table-bordered" rowspan="3" style="width: 50px; border-right: 1px;">&nbsp;<img width="40px" height="40px" src="img/kaido.png"></td>
<td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;"></td>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;">Yonkou Kaido</td>
</tr>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px;"></td>
</tr>
<tr style="height: 10px;">
<td class="table-bordered" rowspan="3" style="width: 50px; border-right: 1px;">&nbsp;poto</td>
<td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;"></td>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;">nama</td>
</tr>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px;"></td>
</tr>
<tr style="height: 10px;">
<td class="table-bordered" rowspan="3" style="width: 50px; border-right: 1px;">&nbsp;poto</td>
<td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;"></td>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;">nama</td>
</tr>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px;"></td>
</tr>
<tr style="height: 10px;">
<td class="table-bordered" rowspan="3" style="width: 50px; border-right: 1px;">&nbsp;poto</td>
<td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;"></td>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;">nama</td>
</tr>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px;"></td>
</tr>
<tr style="height: 10px;">
<td class="table-bordered" rowspan="3" style="width: 50px; border-right: 1px;">&nbsp;poto</td>
<td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;"></td>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px; border-bottom: 1px;">nama</td>
</tr>
<tr style="height: 10px;">
    <td class="table-bordered" style="border-left: 1px; border-top: 1px;"></td>
</tr>


<tr style="height: 40%; border: 1px;" class="table-bordered">
    <td style="border: 1px;"></td>
</tr>
</table>
</form>
<br>

<!--
<form class="form-inline justify-content-center">
    <div id="demo" class="carousel slide" data-ride="carousel">


  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/img1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="/img/img2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="/img/img3.jpg" alt="New York">
    </div>
  </div>


  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</form>
<br>
<form class="form-inline justify-content-center">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
        <!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('nyoba.login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('nyoba.login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('nyoba.nyobaregister') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> -->
    </body>
</html>
