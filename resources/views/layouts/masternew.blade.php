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

        <!-- Custom styles for this template-->
        <link href="/css/mystylesc.css" rel="stylesheet">
    <head>

    <body>
    <div class="headernav">
        <nav id="myNavbar" class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
          <div class="container">
            <div class="container">
                <div class="navbar-header navbar-main">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/homenew">
                        <img src="/images/logo-header.png" alt="Logo Focus Entreprise" style="width:auto;height:80px;">
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a id="headermenu" href="/homenew">Profil</a></li>
                        <li class="dropdown">
                            <a id="headermenu" href="#" data-toggle="dropdown" class="dropdown-toggle">Paket 1</a>
                            <ul class="dropdown-menu">
                                <li><a href="/paketnew">Paket A</a></li>
                                <li><a href="/paketnew">Paket B</a></li>
                                <li><a href="/paketnew">Paket C</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a id="headermenu" href="#" data-toggle="dropdown" class="dropdown-toggle">Paket 2</a>
                            <ul class="dropdown-menu">
                                <li><a href="/paketnew">Paket AA</a></li>
                                <li><a href="/paketnew">Paket BB</a></li>
                                <li><a href="/paketnew">Paket CC</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a id="headermenu" href="#" data-toggle="dropdown" class="dropdown-toggle">About Us</a>
                            <ul class="dropdown-menu">
                                <li><a href="/eventsnew">Events</a></li>
                                <li><a href="/contactusnew">Contact Us</a></li>
                            </ul>
                  </div><!-- /.navbar-collapse -->
            </div>
            </div>
        </nav>

    </div>


    @yield('subheader')

    @yield('pagetitle')

    @yield('content')


    <footer>
      <div class="row footer-container">
        <div class="col-sm-4 center" style="margin: 20px auto;">
          <div class="subfooter"> &copy; Copyright 2018 Focus Enterprise</div>
        </div>

        <div class="col-sm-4 center"  style="margin: 15px auto;">
          <div>
            <a href="https://facebook.com">
                <img src="/images/logo-facebook.png" alt="facebook"style="width:35px;height:35px;">
              </a>
              <a href="https://instagram.com">
                <img src="/images/logo-instagram.png" alt="instagram"style="width:35px;height:35px;">
              </a>
              <a href="https://linkedin.com">
                <img src="/images/logo-linkedin.png" alt="linkedin"style="width:35px;height:35px;">
              </a>
          </div>

          </div>

        <div class="col-sm-4 center" style="margin: 10px auto;">
          Phone: 0822-1234-5678 <br> Email: focusentp@focus.com
        </div>
      </div>
    </footer>
  </body>

</html>
