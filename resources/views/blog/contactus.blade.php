@extends('layouts\master')

@section('pagetitle')
<div class="pagetitle-bg">
  <p id="pagetitle">Contact Us</p>
  <p id="pagetitle-addr">home>>contact us</p>
</div>
@endsection

@section('content')
<div class="contactus">
  <p id='contenttitle' style= "text-align:center">Focus Entreprise</p>
  <ul>
  <li style="font-size:13pt">CV Focus Entreprise</li>
  <br>
  <li>Alamat:</li>
  <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
  <br>
  <li>Phone:</li>
  <li>0822-xxxx-xxxx</li>
  <br>
  <li>Email:</li>
  <li>ini@email.com</li>
  </ul>
</div>

<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="1200" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=itb%20bandung&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <ahref="https://www.embedgooglemap.net"></a>
  </div>
</div>


@endsection
