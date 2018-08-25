@extends('layouts.masternew')

@section('title')
Focuse Entreprise
@endsection

@section('content')

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>

<br>
<div id="slider">

<figure>
<div class="slider-content">
  <img src="/images/pic1.jpg" style="width:75% height:100px">
  Halo ini caption di image slider
</div>

<img src="/images/pic3.jpg" style="width:75% height:100px">
<img src="/images/pic1.jpg" style="width:75% height:100px">
<img src="/images/pic3.jpg" style="width:75% height:100px">
</figure>
</div>


<br>

  <div class="column">

  <div class="row" style="background-color: rgb(244, 181, 208);">

    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <img  src="/images/pic_aboutus1.jpg" alt="" style="padding:80px 50px; max-width:100%; margin:10px auto;">
    </div>

    <div class="col-sm-6" style="padding:75px 50px 0 50px;">
      <p id="judulhome">About Us</p>
      <p class="pjustifynobdr">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-sm-1"></div>
  </div>


  <div class="row home-ourservices">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <p id="judulhome">Our Service</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <div class="col-sm-1"></div>
  </div>
  <div class="row">
    <div class="ourservices">
      <span id="ourservices-btn" href="#">
        <span id="ourservices-title" href="#">
        <img id="ourservices-img" src="/images/logo-facebook.png" alt="" height="40px" width="40px"> Gedung </span> <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
       </span>
       <span id="ourservices-btn" href="#">
         <span id="ourservices-title" href="#">
         <img id="ourservices-img" src="/images/logo-facebook.png" alt="" height="40px" width="40px"> Gedung </span> <br>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        </span>
        <span id="ourservices-btn" href="#">
          <span id="ourservices-title" href="#">
          <img id="ourservices-img" src="/images/logo-facebook.png" alt="" height="40px" width="40px"> Gedung </span> <br>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
         </span>
    </div>
</div>
</div>







@endsection
