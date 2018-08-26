@extends('layouts\master')

@section('title')
Post
@endsection

@section('content')
<div class="container space-outer">
  <div class="row">
    <div class="col-sm-12">
      <a class="allevents ">All Events</a>
      <div class="shortpost-title">Judul Posting Berita Focus Pertama</div>
      <div class="dateandtime">21 Juli 2018, 8am-9am</div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <img class="img-responsive img-post" src="/images/pic_dekorasi pernikahan.jpg" >
    </div>
    <div class="col-sm-12">
      <div class="post-content">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>


  <div class="row detailpost-info">
    <div class="col-sm-4">
      <p class="center"><b>Details</b></p>
      <p>
        Date:<br>21 Juli 2018 <br>
        Time:<br> 8am-9am <br>
        Event tag: <br> dekorasi pernikahan, paket pernikahan, lengkap <br>
      </p>
    </div>
    <div class="col-sm-4">
      <p class="center"><b>Organizer</b></p>
      <p>
        Focus Entreprise <br>
        Phone: <br> 0822-1234-5678<br>
        Email: <br> focusentp@focus.com <br>
        Website: <br> focusentp <br>
      </p>
    </div>
    <div class="col-sm-4">
      <p class="center"><b>Venue</b></p>
      <p>
        SMKN57 <br>
        Jalan Raya No 7 Kota Baru <br>
      </p>
    </div>
  </div>
</div>
@endsection
