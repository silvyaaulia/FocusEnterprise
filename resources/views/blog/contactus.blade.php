@extends('layouts\master')

@section('title')
Contact Us
@endsection

@section('pagetitle')
<div class="container">
  <div class="pagetitle-container">
  <div class="col-sm-12">
    <div class="pagetitle">Contact Us</div>
    <div >
          <ol class="breadcrumb">
            <li><a id="breadcrumb" href="/">Home</a></li>
            <li class="active">Contact Us</li>
          </ol>
        </div>
  </div>
  </div>
</div>
@endsection


@section('content')
<div class="container space-outer" id="font-berlin">
  <div class="row">
    <div class="contactus-title">Focus Enterprise</div>
    <!-- Contact us-->
    <div class="col-sm-12">
      <div style="font-size:14pt">CV Focus Entreprise</div>
      <div>
        <br>
        Alamat:<br>
        Jalan Lorem ipsum dolor sit amet, <br> Jawa Barat, Indonesia <br>
        <br>
        Phone:<br>
        0822-1234-5678 <br>
        <br>
        Email:<br>
        focusentp@focus.com <br>
      </div>
    </div>
    <!-- Maps of Focus Entreprise-->
    <div class="col-sm-12">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width=100% height="500px" src="https://maps.google.com/maps?q=alun-alun%20bandung&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="5px" marginwidth="0"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
