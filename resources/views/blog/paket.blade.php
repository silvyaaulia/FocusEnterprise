@extends('layouts\master')

@section('pagetitle')
<div class="pagetitle-bg">
  <p id="pagetitle">Paket</p>
  <p id="pagetitle-addr">home>>paket</p>
</div>
@endsection

@section('content')
<div class="paket">
  <p id='contenttitle' style= "text-align:center">Paket A</p>
  <img class="img-pcentre" src="/images/pic_dekorasi pernikahan.jpg" alt="">
  <p class="pcentre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  <p class="pcentre">Download harga paket A</p>
  <img class="img-pcentre" src="/images/logo-download.png" href="#" height="30px" width="30px">


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

@endsection
