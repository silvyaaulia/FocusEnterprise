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

table {
    border-collapse: collapse;
    margin-left: auto;
    margin-right: auto;
}

table, td, th {
    border: 1px solid black;
}
@endsection




@section('subheader')
<p id='judulhalaman'>judulhalaman</p>
<p>home>>judulhalaman</p>
@endsection

@section('content')
<p id='judul'>Paket A</p>
<img class="pcentre" src="storage\images\logo-facebook.png" alt="">

<p class="pcentre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<p class="pcentre">Download harga paket A</p>
<img src="storage\images\logo-facebook.png" href="#">
<img src="" alt="" href="">icon</img>


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
    <td>Lois</td>
    <td>Griffin</td>
  </tr>
</table>


style= "text-align:center"
height:500px;width:800px;
overflow:hidden;background:none!important;

@endsection
