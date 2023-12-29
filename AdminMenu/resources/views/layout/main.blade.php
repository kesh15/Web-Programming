<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Menu</title>
    <link href=" assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href=" assets/plugins/fontawesome/css/all.min.css" rel="stylehsheet">
  </head>
  <body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-success navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Admin Menu</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active {{ (request()->segment('1')=='' || request()->segment('1') == 'home') ? 'active' : ''}}" aria-current="page" href="{{ url('home') }}">
                        <i class="fa-solid fa-gauge"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active {{ (request()->segment('1')=='' || request()->segment('1') == 'student') ? 'active' : ''}}" aria-current="page" href="{{ url('student') }}">
                        <i class="fas fa-user"></i>Product
                    </a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
      {{-- End --}}

      {{-- content --}}
      <div class="mt-2">
        <div class="container">
            @yield('content')
        </div>
      </div>
      {{-- End --}}

    <script src=" assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>