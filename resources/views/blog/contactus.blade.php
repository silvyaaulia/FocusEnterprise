@extends('layouts\master')

@section('csssubheader')
#judulhalaman{
  text-align:center;
  font-family: 'Bebas Neue', sans-serif;
  font-size: 30pt;
}
p{
  text-align:center;
  font-family: 'Berlin Sans FB', sans-serif;
  backround-image: url('src="storage\images\logo-facebook.png"')
}
@endsection


@section('csscontent')
.contactus{
    font-family: 'Berlin Sans FB', sans-serif;
}
#judul{
  font-size:35pt;
  padding:50px;
}
ul{
  list-style-type:none;
  text-indent: 100px;
}
@endsection




@section('subheader')
<p id='judulhalaman'>Contact Us</p>
<p>home>>contact us</p>
@endsection

@section('content')
<div class="contactus">
<p id='judul' style= "text-align:center">Focus Enteprice</p>
<ul>
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
    <iframe width="900" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=itb%20bandung&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <ahref="https://www.embedgooglemap.net">embedgooglemap.net</a>
  </div>
  <style>
  .mapouter{
  text-align:center;height:500px;width:800px;
  }
  .gmap_canvas {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width:100%;
  }
  </style>
</div>
height:500px;width:800px;
overflow:hidden;background:none!important;

@endsection
