<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/') }}" style="color:white;">SIVENTALIS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{ url('public/web_2') }}/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
          <li class="dropdown"><a href=""><span>Informasi Data</span> <i class="bi bi-chevron-down"></i></a>
            @yield('menu')
          </li>
          <li><a class="nav-link scrollto" href="{{url('profilpimpinan')}}">Profil Pimpinan</a></li>
          <li><a class="nav-link scrollto" href="{{url('profiltim')}}">Tim</a></li>
          <li><a class="getstarted scrollto" href="{{ url('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>