<!doctype html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" 
      crossorigin="anonymous">

    <title>{{ $title ?? 'Hori Club | Hori' }}</title>

    <style>
       .navbar-brand {
            display: flex;
            align-items: center;
            
            gap: 15px;
        }
          .logo-image {
          width: 70px;
          height: 65px;
          object-fit: contain;
      }
      body {
        background-color: #ffffffff;
      }
      .navbar-nav .nav-link.active {
        font-weight: bold;
        color: #ffc107 !important;
      }
      footer {
        background-color: #444444ff;
        color: white;
        text-align: center;
        padding: 15px 0;
        margin-top: 40px;
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
     <a class="navbar-brand" href="{{ url('/') }}">
    <img src="{{ asset('img/logo.png') }}" alt="Hori Club Logo" class="logo-image">
    </a>
        <a class="navbar-brand font-weight-bold" href="/">Hori Club</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ $title == 'home' ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'profile' ? 'active' : '' }}" href="/profile">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'berita' ? 'active' : '' }}" href="/berita">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'kontak' ? 'active' : '' }}" href="/kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ $title == 'kontak' ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5 mb-5">
      @yield('content')
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <p class="mb-0">© 2025 Hori Club | Designed by Ahnaf</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" 
      crossorigin="anonymous"></script>
  </body>
</html>
