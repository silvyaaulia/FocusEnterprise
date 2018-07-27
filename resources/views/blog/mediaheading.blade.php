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
.pcentre, img.pcentre{
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
}
@endsection




@section('subheader')
<p id='judulhalaman'>judulhalaman</p>
<p>home>>judulhalaman</p>
@endsection

@section('content')
<img class="pcentre" src="storage\images\logo-facebook.png" alt="">
<p id='judul'>Dekorasi</p>
<p class="pcentre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

style= "text-align:center"
height:500px;width:800px;
overflow:hidden;background:none!important;

@endsection
