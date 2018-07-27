@extends('layouts\master')


@section('csscontent')
.post{
    font-family: 'Berlin Sans FB', sans-serif;
}
#judulpost{
  font-size:24pt;
}
#dateandtime{
  font-size:10pt;
}
.pcentre, img.pcentre{
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60%;
}
.pjustify{
  text-align:justify;
}


@endsection


@section('content')
<div class="post">

<p id='judulpost'>Judul Posting Berita Focus</p>
<p id='dateandtime'>21 Juli 2018, 8.00 am</p>

<img class="pcentre" src="storage\images\logo-facebook.png">

<p class="pjustify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


</div>

style= "text-align:center"
height:500px;width:800px;
overflow:hidden;background:none!important;

@endsection
