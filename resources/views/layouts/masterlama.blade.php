<!DOCTYPE html>
<!-- edit backend -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="headerfooter.css">
    <title> @yield('title') </title>

  </head>


  <body>
    <header>
      <h2>Dropdown Menu</h2>
      <p>Move the mouse over the button to open the dropdown menu.</p>

      <div class="dropdown">
        <button class="dropbtn">Dropdown</button>
        <div class="dropdown-content">
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>




      <nav>
        <img id="logo" src="/images/logo-focus-enteprise.png" alt="Logo Focus Entreprise"  height="40px" width="40px">
        <a id="logo" href="/home" style="font-family: 'Bebas Neue', Times, serif">Focus Enteprise juduuul</a>
         <div class="dropdown">
           <button class="dropbtn">Profil</button>
           <button class="dropbtn">Paket 1</button>
           <div class="dropdown-content" id="paket1">
             <a href="#">Paket A</a>
             <a href="#">Paket B</a>
             <a href="#">Paket C</a>
           </div>
           <button class="dropbtn">Paket 2</button>
           <div class="dropdown-content" id="paket2">
             <a href="#">Paket AA</a>
             <a href="#">Paket BB</a>
             <a href="#">Paket CC</a>
           </div>
           <button class="dropbtn">About us</button>
           <div class="dropdown-aboutus" id="aboutus">
             <a href="#">Events</a>
             <a href="#">Contact Us</a>
           </div>
         </div>

      </nav>


    </header>

    <form>
      <label for="sevent">Search</label>
      <input type="text" id="sevent" name="sevent">
      <label for="datetime">Events from</label>
      <input type="date" id="datetime" name="datetime">
      <a href="">
        <img id="search" src="search.png">
      </a>
      <label for="view">View as</label>
        <img id="view" src="list.png">
        <img id="view" src="date.png">
    </form>

    <br>
    @yield('subheader')
    <br>

    <br>
    @yield('content')
    <br>

    <footer>
      <span> &copy 2018;</span>

      <img src="images\logo-facebook.png" >
      <img src="storage\images\logo-instagram.png" >
      <img src="storage\images\logo-linkedin.png" >
      <img src="storage\images\logo-whatsapp.png" >

      <span class:'footer'>
      phone: 0821-xxxx-xxxx

      email: ini@email.com
      </span>

    </footer>

  </body>
</html>
