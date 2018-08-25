<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta htttp-equiv="X-UA-Compatible" content="ie-edge">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/bootstrapjquery.js"></script>
    <script src="/js/proper.js"></script>
    <script src="/js/bootstrap.js"></script>

    <title>@yield('title')</title>

    <!-- Custom styles for this template -->
    <link href="/css/mystylesc.css" rel="stylesheet">

  </head>

  <body>

    <div class="row">
    <nav class="navbar">
      <div class="col-sm-1">
      </div>

      <div class="col-sm-2">
        <div class="logo">
          <div class="navbar-brand">
            <img  src="/images/logo-header.png" alt="Logo Focus Entreprise"  height="80px" width="220px" href="/home">
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="container-fluid">
          <ul class="d-flex navbar-nav">
            <li class="dropdown"><a href="#">Profil</a></li>

            <li class="dropdown"><a data-toggle="dropdown" href="#">Paket 1</a>
              <ul class="dropdown-menu">
                <li><a href="#">Paket A</a></li>
                <li><a href="#">Paket B</a></li>
                <li><a href="#">Paket C</a></li>
                <li><a href="#">Paket D</a></li>
              </ul>
            </li>

            <li class="dropdown"><a data-toggle="dropdown" href="#">Paket 2</a>
              <ul class="dropdown-menu">
                <li><a href="#">Paket AA</a></li>
                <li><a href="#">Paket BB</a></li>
                <li><a href="#">Paket CC</a></li>
                <li><a href="#">Paket DD</a></li>
              </ul>
            </li>

            <li class="dropdown"><a data-toggle="dropdown" href="#">About Us</a>
              <ul class="dropdown-menu">
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-sm-1">
      </div>
      </nav>
    </div>

<br>

    @yield('subheader')

    @yield('pagetitle')

    @yield('content')

    <footer>
      <div class="row text-center"  style="background-color:#f4b5d0;">
        <div class="col-sm-4" class="subfooter">
          <div class="subfooter" style="padding:10px 0"> &copycopyright2018</div>
        </div>
        <div class="col-sm-4">
          <div class="subfooter">
            <a href="https://facebook.com">
              <img src="/images/logo-facebook.png" alt="facebook" style="width:35px;height:35px;">
            </a>
            <a href="https://instagram.com">
              <img src="/images/logo-instagram.png" alt="instagram" style="width:35px;height:35px;">
            </a>
            <a href="https://linkedin.com">
              <img src="/images/logo-linkedin.png" alt="linkedin" style="width:35px;height:35px;">
            </a>
          </div>

        </div>
        <div class="col-sm-4 footer">
          <div class="subfooter">Phone: 0821-xxxx-xxxx <br> Email: ini@email.com </div>
        </div>

      </div>

    </footer>
  </body>

</html>
