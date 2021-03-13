<div class="container" style="margin-top:2rem;">
    <div class="ourservice-text hidden slideinUp">
        <p class="our">Our <span class="servicess">Holidays Pack</span></p>
        <p class="text-servess"> Enjoy Your holiday with us.</p>
    </div>
        @for ($i=0; $i<5; $i++)
            <div class="row" style="margin-left:0 !important; margin-right:0 !important">
                <div class="col-md-4">
                    <div class="card mb-3" style="width: auto">
                        <img src="{{asset('img/1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title holiday-title"> Sauraha Tour</h5>
                            <div class="holidayy">
                                <p class="card-text holiday-text">2 days 1 Night</p>
                                <p class="card-text holiday-price"> Rs 10000</p>
                            </div>
                            <p class="book-now"><a href="#" class="book-now-btn"> Book Now </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="width: auto">
                        <img src="{{asset('img/1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title holiday-title"> Sauraha Tour</h5>
                            <div class="holidayy">
                                <p class="card-text holiday-text">2 days 1 Night</p>
                                <p class="card-text holiday-price"> Rs 10000</p>
                            </div>
                            <p class="book-now"><a href="#" class="book-now-btn"> Book Now </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="width: auto">
                        <img src="{{asset('img/1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title holiday-title"> Sauraha Tour</h5>
                            <div class="holidayy">
                                <p class="card-text holiday-text">2 days 1 Night</p>
                                <p class="card-text holiday-price"> Rs 10000</p>
                            </div>
                            <p class="book-now"><a href="#" class="book-now-btn"> Book Now </a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    
</div>