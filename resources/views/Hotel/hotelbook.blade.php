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
<div class="container wid" style="position:relative">
<div class="container wid booking">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="margin-left:0"> <i class="fas fa-hotel" style="margin-right:0.3rem;"></i> Hotels</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <i class="fas fa-plane-departure" style="margin-right:0.3rem;"></i> Flights</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"> <i class="fas fa-umbrella-beach" style="margin-right:0.3rem;"></i> Holiday</button>
  </li>
</ul>

<!--Flights form -->
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    
  <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <form action="#">
            
            <div class="selectflight">
              <div class="input-field inline">
                <input id="select city" type="text" class="validate from">
                <label for="select city">Select City</label>
              </div>  
              
              <div class="input-field inline">
                <input id="check_in_date" type="text" class="validate from datepicker">
                <label for="check_in_date">Check In Date</label>
              </div>  
              <div class="input-field inline">
                <input id="check_out_date" type="text" class="validate from datepicker">
                <label for="check_out_date">Check Out Date</label>
              </div>  
              <div class="input-field inline">
                <input id="adults" type="number" class="validate from">
                <label for="adults">Adult(18+)</label>
              </div>  
              <div class="input-field inline">
                <input id="children" type="number" class="validate from">
                <label for="children">Children(0-17)</label>
              </div>  
              

              <div class="d-flex justify-content-center" style="margin-top:1rem;">
              <a href="#" class="search">Search</a>
              </div>
            </div>
          </form>
        </div>
      </div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

  <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <form action="#">
          <p>
            <label>
              <input name="group1" type="radio" checked />
              <span>Round way</span>
            </label>
            <label>
              <input name="group1" type="radio" checked />
              <span>One way</span>
            </label>
          </p>
          <div class="selectflight">
            <div class="input-field inline">
              <input id="from_city" type="text" class="validate from">
              <label for="from_city">From City</label>
            </div>  
            <div class="input-field inline">
              <input id="to_city" type="text" class="validate from">
              <label for="to_city">To City</label>
            </div>  
            <div class="input-field inline">
              <input id="departure_date" type="text" class="validate from datepicker">
              <label for="departure_date">Departure Date</label>
            </div>  
            <div class="input-field inline">
              <input id="return_date" type="text" class="validate from datepicker">
              <label for="return_date">Return Date</label>
            </div>  
            <div class="input-field inline">
              <input id="adults" type="number" class="validate from">
              <label for="adults">Adult(18+)</label>
            </div>  
            <div class="input-field inline">
              <input id="children" type="number" class="validate from">
              <label for="children">Children(0-17)</label>
            </div>  
            <!-- Switch -->
            <div class="switch inline" style="display:inline-block;">
              <label>
                <input type="checkbox">
                <span class="lever"></span>
                SHOW DIRECT FLIGHTS ONLY
              </label>
            </div>
            <!-- Switch -->
            <div class="switch inline" style="display:inline-block;">
              <label>
                <input type="checkbox">
                <span class="lever"></span>
                REFUNDABLE FLIGHTS   
              </label>
            </div>

            <div class="d-flex justify-content-center" style="margin-top:1rem;">
            <a href="#" class="search">Search</a>
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

  <div class="row d-flex justify-content-center">
        <div class="col-md-12">
          <form action="#">
            
            <div class="selectflight">
              <div class="input-field inline">
                <input id="select city" type="text" class="validate from">
                <label for="select city">Select City</label>
              </div>  
              
              <div class="input-field inline">
                <input id="check_in_date" type="text" class="validate from datepicker">
                <label for="check_in_date">Check In Date</label>
              </div>  
              <div class="input-field inline">
                <input id="check_out_date" type="text" class="validate from datepicker">
                <label for="check_out_date">Check Out Date</label>
              </div>  
              <div class="input-field inline">
                <input id="adults" type="number" class="validate from">
                <label for="adults">Adult(18+)</label>
              </div>  
              <div class="input-field inline">
                <input id="children" type="number" class="validate from">
                <label for="children">Children(0-17)</label>
              </div>  
              

              <div class="d-flex justify-content-center" style="margin-top:1rem;">
              <a href="#" class="search">Search</a>
              </div>
            </div>
          </form>
        </div>
      </div>

  </div>
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



