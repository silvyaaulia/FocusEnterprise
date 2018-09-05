@extends('layouts\master')

@section('title')
Focuse Entreprise
@endsection

@section('content')
<div class="container">
  <div class="row slideshow-container">
      <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
      	<!-- Carousel indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for carousel items -->
          <div class="carousel-inner">
              <div class="active item">
                  <img src="/images/pic1.jpg" alt="First Slide">
           		<div class="carousel-caption">
                <div id="font-blacktd">First slide label</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
              </div>
              <div class="item">
                  <img src="/images/pic2.jpg" alt="Second Slide">
                  <div class="carousel-caption">
                    <div id="font-blacktd">Second slide label</div>
                    <p>Laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
              </div>
              <div class="item">
                  <img src="/images/pic3.jpg" alt="Third Slide">
                  <div class="carousel-caption">
                    <div id="font-blacktd">Third slide label</div>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
              </div>
          </div>
          <!-- Carousel controls -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
  </div>
</div>


<div class="aboutus-container">
  <div class="container">
    <div class="row aboutus">
      <div class="col-sm-5">
          <img class="img-responsive img-aboutus" src="/images/pic_aboutus1.jpg" alt="">
      </div>
      <div class="col-sm-7 aboutus-content">
        <div id="judulhome">About Us</div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="ourservices">
    <div class="row">
      <div class="col-sm-12 aboutus-content">
        <div id="judulhome">Our Service</div>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>


  <div class="row services-container">
    <div class="">
      <!-- Media Heading 1-->
      <div class="col-sm-4 services-box">
          <a>
            <div class="row services-title">
              <img class="services-icon" src="/images/logo-instagram.png" alt="">
              Dekorasi
            </div>
            <div class="row services-content">
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
          </a>
      </div>
      <!-- Media Heading 2-->
      <div class="col-sm-4 services-box">
          <a>
            <div class="row services-title">
              <img class="services-icon" src="/images/logo-instagram.png" alt="">
              Dekorasi
            </div>
            <div class="row services-content">
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
          </a>
      </div>
      <!-- Media Heading 3-->
      <div class="col-sm-4 services-box">
          <a>
            <div class="row services-title">
              <img class="services-icon" src="/images/logo-instagram.png" alt="">
              Dekorasi
            </div>
            <div class="row services-content">
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
          </a>
      </div>

    </div>


  </div>




</div>
</div>

@endsection
