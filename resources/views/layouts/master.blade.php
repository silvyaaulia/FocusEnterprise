<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <style media="screen">


      nav{
        background-color: rgb(176, 75, 135);
        color: black;
        list-style-type: none;
        /*text-align: center;*/
        font-size: 14pt;
        margin: 0;
        /*padding: 30px;*/
        max-width: 1000px;
        /*position: fixed;*/
        top: 0;
        left: 100px;
        /*display: inline;  the default for span */
        /*width: 100px;
        height: 100px;
        padding: 5px;*/
      }

      #logo {
        background-color: white;

        /*padding: 30px;*/
      }

      .dropbtn {
        background-color: rgb(176, 75, 135);
        color: black;
        padding: 16px;
        font-size: 14px;
        font-family: 'Berlin Sans FB', sans-serif;
        border: none;
        cursor: pointer;
      }

      .dropdown {
        position: relative;
        display: inline-block;
        font-family: 'Berlin Sans FB', sans-serif;
        font-size: 14px;
      }

      .dropdown-content, .dropdown-aboutus {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }


      .dropbtn:hover {
        background-color: rgb(200, 75, 135);
      }

      .dropdown-content a:hover {background-color: #f1f1f1}


      .dropdown-content {
        display: block;
      }

      form{
        background-color: rgb(244, 181, 208);
        color: black;
        font-family: 'Berlin Sans FB', sans-serif;
        inline
      }

      @yield('csssubheader')

      @yield('csscontent')

      footer{
        background-color: rgb(34, 34, 34);
        list-style-type: none;

        color: white;
        font-size: 12pt;
        margin: 0;
        padding: 20px;
      }


    </style>
  </head>
  <body>
    <header>
      <nav>
        <img id="logo" src="/images/logo-focus-enteprise.png" alt="Logo Focus Entreprise">
        <a id="logo" href="/home" style="font-family: 'Bebas Neue', Times, serif">Focus Enteprise</a>
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
