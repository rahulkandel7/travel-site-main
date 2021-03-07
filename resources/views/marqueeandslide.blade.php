<div class="container-fluid marq">
    <div class="container">
        <div class="mar">
            <marquee behavior="scroll" direction="left" class="marque-slide" onmouseover="this.stop()" onmouseout="this.start()">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vitae, saepe quam aperiam n
            </marquee>
        </div>
        <div class="know">
            <a href="#" class="know-btn">Know More</a>
        </div> 
    </div>
</div>

<!-- Booking system -->
<div class="container" style="position:relative">
<div class="container booking">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="margin-left:0"> <i class="fas fa-plane-departure" style="margin-right:0.3rem;"></i> Flights</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <i class="fas fa-hotel" style="margin-right:0.3rem;"></i> Hotels</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> <i class="fas fa-umbrella-beach" style="margin-right:0.3rem;"></i> Holiday</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Home booking</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Flight Booking</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Booking</div>
</div>
</div>
</div>

<div class="container-fluid sli">
    <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
      <img src="{{ asset('img/1.jpg') }}" style="width:100%; height:40rem;">
    </div>
  
    <div class="mySlides">
      <img src="{{ asset('img/2.jpg') }}" style="width:100%; height:40rem;">
    </div>
  
    <div class="mySlides">
      <img src="{{ asset('img/3.jpg') }}" style="width:100%; height:40rem;">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center; margin-top:-7rem;">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

</div>