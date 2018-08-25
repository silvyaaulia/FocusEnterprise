@extends('layouts\masterb')

@section('title')
Post
@endsection

@section('content')
<div class="container">
<div class="post">
  <a id="allevents" href="#">All events</a>
  <p id='posttitle' style= "text-align:left">Judul Posting Berita Focus</p>
  <p id="dateandtime">21 Juli 2018, 8am-9am</p>



    <img class="img-fluid" src="/images/pic_dekorasi pernikahan.jpg"  alt="Chania">


  <p class="pjustify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <div class="detailpost">
    <a id="detailpost-btn" href="#">Google Maps</a>
    <a id="detailpost-btn" href="#">Google Calender</a>
    <a id="detailpost-btn" href="#">Ical Export</a>
    <div class="detailpost-info">
      <p class="pcenter"><b>Details</b></p>
      <p class="pjustify">
        Date:<br>21 Juli 2018 <br>
        time:<br> 8am-9am <br>
        Event tag: <br> dekorasi pernikahan, paket pernikahan, lengkap <br>
      </p>

      <p class="pcenter"><b>Organizer</b></p>
      <p class="pjustify">
        Focus Entreprise <br>
        phone: <br> 082x-xxxx-xxx <br>
        Email: <br> ini@email.com <br>
        Website: <br> focusentp <br>
      </p>

      <p class="pcenter"><b>Venue</b></p>
      <p class="pjustify">
        SMKN57 <br>
        alamatnya Jalan Raya no 7 kota Baru <br>
      </p>
    </div>
  </div>
</div>
</div>

@endsection
