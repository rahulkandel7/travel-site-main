<div class="container-fluid marq">
    <div class="container">
        <div class="mar">
            <marquee behavior="scroll" direction="left" class="marque-slide" onmouseover="this.stop()" onmouseout="this.start()">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime vitae, saepe quam aperiam n
            </marquee>
        </div>
        {{-- <div class="know"> --}}
            <a href="#" class="know-btn">Know More</a>
        {{-- </div> --}}
    </div>
</div>

<div class="container-fluid sli">
    <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides">
      <img src="{{ asset('img/1.jpg') }}" style="width:100%; height:50vh;">
    </div>
  
    <div class="mySlides">
      <img src="{{ asset('img/2.jpg') }}" style="width:100%; height:50vh;">
    </div>
  
    <div class="mySlides">
      <img src="{{ asset('img/3.jpg') }}" style="width:100%; height:50vh;">
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