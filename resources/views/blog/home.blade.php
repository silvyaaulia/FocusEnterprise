@extends('layouts.master')


@section('content')

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/pic1.jpg" style="width:75% height:100px">
    <div class="text">Caption One</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/pic2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/pic3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext"></div>
    <img src="/images/pic4.jpg" style="width:100%">
    <div class="text">Caption Four</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
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
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>



<br>
<div class="home-aboutus">
  <img id="image-floatleft" src="/images/pic_aboutus1.jpg" alt="" height="300px" width="300px">
  <p id="judulhome">About Us</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="home-ourservices">
  <p id="judulhome">Our Service</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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




@endsection
