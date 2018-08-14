@extends('layouts\masterb')

@section('title')
Paket
@endsection

@section('pagetitle')
<div class="row">
      <div class="col-sm-12">
        <div class="pagetitle-bg">
      <p id="pagetitle">Paket</p>
      <p id="pagetitle-addr">
        <a href="/homeb" style="color:#f4b5d0">home</a>>><a href="/contactusb" style="color:#ffffff">paket</a></p>
    </div>
  </div>
</div>
@endsection

@section('content')
<div class="container">
<div class="paket">
  <p id='contenttitle' style= "text-align:center">Paket A</p>
  <img class="img-fluid" src="/images/pic_dekorasi pernikahan.jpg"  alt="Chania">
  <p class="pcentre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p class="pcentre">Download harga paket A</p>
  <a href="#">
    <img class="img-pcentre" src="/images/logo-download.png" alt="facebook" style="width:35px;height:35px;">
  </a>



<table>
  <tr>
    <th colspan="2">Paket A (Harga Rp xx.xxx.xxx)&nbsp;</th>
</tr>
  </tr>
  <tr>
    <td>1</td>
    <td>Buffle Utama 600 porsi
      <br>
      Nasi goreng
      <br>
      Aneka Soup
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>Buffle  600 porsi
      <br>
      Nasi uduk
      <br>
      Aneka Soup
    </td>
  </tr>
</table>


</div>
</div>
@endsection
