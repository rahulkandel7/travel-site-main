<div id="nav-bar" class="container-fluid" style="padding: 0">
   <div class="container-fluid" style="background-color: white">
    <div class="container" style="width:89% !important">
        <div class="row" style="margin-bottom:0">
            <div class="col-md-12">
                <div class="logo">
                    <a href="/">
                        <img src="{{URL::asset('img/logo.png')}}" alt="Pangolin Travel" class="img-logo">
                    </a>
                </div>
                <div class="info">
                    <span class="helpline">24 &#215; 7 Customer Service Helpline </span>
                    <span class="call-logo"> <i class="fab fa-viber" style="color:#665CAC;"></i> <i class="fab fa-whatsapp" style="color:#25D366;"></i></span>
                    <span class="number">+977-9851118863</span>
                    <span class="country-map">
                        <img src="{{ asset( 'img/nepal.svg' ) }}" alt="Nepal Flag" class="img-fluid nepal">
                    </span>
                    <span class="country-name">Nepal</span>
    
                    <div class="dropdown mbl-down" style="float:right; margin-top:0.5rem; ">
                        <button class="option dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-alt person" ></i><span class="sign">Sign In</span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item lists slidein" href="#"> <i class="fas fa-chevron-right"></i> Log In</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item lists slidein" href="#"> <i class="fas fa-chevron-right"></i> Sign Up</a></li>
                        </ul>
                      </div>
    
                </div>
            </div>
        </div>
    </div>
   </div>
    <div class="container-fluid side-info-mobile" style="background-color: grey;">
        <div class="container d-flex justify-content-center">
            <div class="sideinfos">
                <span class="side-call-logo"> <i class="fab fa-viber" style="color:#665CAC;"></i>  
                <i class="fab fa-whatsapp" style="color:#25D366;"></i>
                </span>
                    <span class="side-number">+977-9851118863</span>
            </div>
        </div>
    </div>
    {{-- NavBar --}}
    
    <div class="container-fluid navbar-desk hei">
        <div class="container">
            <nav class="nav-mains"  >
                <div class="nav-wrapper nav-mains">
                  <a href="#" data-target="mobile-demo" class="sidenav-trigger ham">
                  <div class="menu-iccon"></div>
<div class="second menu-iccon"></div>
<div class="third menu-iccon"></div>
                  </a>
                  <ul class="left hide-on-med-and-down">
                    <li class=" menu-item " style="background-color:#f51616"><a href="{{url('/')}}" class="menu-item "> <i class="fas fa-home active-home"></i> </a></li>
                    <li class="menu-item"><a href="{{url('/flights')}}" class="menu-item">Flights</a></li>
                    <li class="menu-item"><a href="{{url('/hotel')}}" class="menu-item">Hotel</a></li>
                    <li class="menu-item"><a href="{{url('/holiday')}}" class="menu-item">Holiday</a></li>
                    <li class="menu-item"><a href="{{url('/forex')}}" class="menu-item">Forex</a></li>
                    <li class="menu-item"><a href="{{url('/visa')}}" class="menu-item">Visa</a></li>
                    <li class="menu-item"><a href="{{url('/insurance')}}" class="menu-item">Insurance</a></li>
                    <li class="menu-item"><a href="{{url('/travel-diaries')}}" class="menu-item">Travel Diaries</a></li>
                    <li class="desk-btn-manage"><a href="" class="menu-item desmanage">Manage Booking</a></li>

                  </ul>
                </div>
              </nav>
              <ul class="sidenav" id="mobile-demo">
                <li><a href="{{url('/')}}" class="sidemenu-item"> <i class="fas fa-home"></i> </a></li>
                <li><a href="{{url('/flights')}}" class="sidemenu-item">Flights</a></li>
                <li><a href="{{url('/hotel')}}" class="sidemenu-item">Hotel</a></li>
                <li><a href="{{url('/holiday')}}" class="sidemenu-item">Holiday</a></li>
                <li><a href="{{url('/forex')}}" class="sidemenu-item">Forex</a></li>
                <li><a href="{{url('/visa')}}" class="sidemenu-item">Visa</a></li>
                <li><a href="{{url('/insurance')}}" class="sidemenu-item">Insurance</a></li>
                <li><a href="{{url('/travel-diaries')}}" class="sidemenu-item">Travel Diaries</a></li>
                <li class="btn-manage"><a href="" class="sidemenu-item ">Manage Booking</a></li>
              </ul>
              
              
        </div>
    </div>
</div>

