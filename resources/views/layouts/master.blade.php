<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
      <link href="/css/headerfooter.css" rel="stylesheet">
      <link href="/css/mystyles.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav>
        <div class="logo">
          <img  src="/images/logo-header.png" alt="Logo Focus Entreprise"  height="80px" width="220px" href="/home">
        </div>

        <div class="profil">
          <button class="dropbtn">Profil</button>
        </div>

        <div class="paket1">
          <button class="dropbtn">Paket 1</button>
          <div class="dropdown-content" id="paket1">
            <a href="#">Paket A</a>
            <a href="#">Paket B</a>
            <a href="#">Paket C</a>
          </div>
        </div>

        <div class="paket2">
          <button class="dropbtn">Paket 2</button>
          <div class="dropdown-content" id="paket2">
            <a href="#">Paket AA</a>
            <a href="#">Paket BB</a>
            <a href="#">Paket CC</a>
          </div>
        </div>

        <div class="aboutus">
          <button class="dropbtn">About Us</button>
          <div class="dropdown-content">
            <a href="#">Contact Us</a>
            <a href="#">Events</a>
          </div>
      </nav>
    </header>

    @yield('subheader')

    @yield('pagetitle')

    @yield('content')

    <footer>

        <span id="copyright"> &copy copyright2018</span>

        <div class="medsos">
          <img src="/images/logo-facebook.png" href="#" height="35px" weight="35px">
          <img src="/images/logo-instagram.png" href="#" height="35px" weight="35px">
          <img src="/images/logo-linkedin.png" href="#" height="35px" weight="35px">
          <img src="/images/logo-whatsapp.png" href="#" height="35px" weight="35px">
        </div>

        <span>
        phone: 0821-xxxx-xxxx <br>
        email: ini@email.com
        </span>



    </footer>
  </body>

</html>
