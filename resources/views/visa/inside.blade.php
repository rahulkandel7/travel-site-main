<div class="container" style="margin-top:2rem;">
    <div class="ourservice-text hidden slideinUp">
        <p class="our">Our <span class="servicess">Visa Price</span></p>
        <p class="text-servess"> Enjoy Your holiday with us.</p>
    </div>
        @for ($i=0; $i<5; $i++)
            <div class="row" style="margin-left:0 !important; margin-right:0 !important">
                <div class="col-md-4">
                    <div class="card mb-3" style="width: auto">
                        <img src="{{asset('img/1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title holiday-title"> Japan</h5>
                            <div class="holidayy">
                                <p class="card-text holiday-price" style="float:none;"> Rs 10000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="width: auto">
                        <img src="{{asset('img/1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title holiday-title"> Africa</h5>
                            <div class="holidayy">
                                <p class="card-text holiday-price" style="float:none;"> Rs 10000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="width: auto">
                        <img src="{{asset('img/1.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title holiday-title"> India</h5>
                            <div class="holidayy">
                                <p class="card-text holiday-price" style="float:none;"> Rs 10000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    
</div>