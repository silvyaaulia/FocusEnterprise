@extends('layouts\master')

@section('title')
Paket
@endsection

@section('pagetitle')
<div class="row pagetitle-container">
<div class="col-sm-12">
  <div class="pagetitle">Paket</div>
  <div class="breadcrumb">
        <ul>
          <li><a href="/">Home</a></li>
          <li class="active">Paket</li>
        </ul>
      </div>
</div>
</div>
@endsection

@section('content')
<div class="container space-outer">
  <div class="row package-title">Paket A</div>
  <div class="row">
    <img class="img-responsive img-package" src="/images/pic_dekorasi pernikahan.jpg" >
    <div class="package-content">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div style="text-align: center; font-size:12pt;">Download harga paket A</div>
    <a href="#">
      <img class="img-download" src="/images/logo-download.png" alt="facebook" style="width:35px;height:35px;">
    </a>
  </div>
  <div class="row">
    <table>
      <tr>
        <th class="center table-header" colspan="2">
          Paket A (Harga Rp 20.000.000)&nbsp;</th>
      </tr>
      <tr>
        <td class="center">1</td>
        <td>Buffle Utama 600 porsi
          <br>
          Nasi goreng
          <br>
          Aneka Soup
        </td>
      </tr>
      <tr>
        <td class="center">2</td>
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
