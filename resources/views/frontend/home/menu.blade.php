@extends('frontend.layouts.includes')
@section('content')


<div class="w3l-menublock py-5">
    <!-- menu block -->
    <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2">Check it below</h5>
                <h3 class="title-big text-center mb-5">Our Menu Items</h3>
            </div>

            <input id="tab1" type="radio" name="tabs" checked>
            <label class="tabtle" for="tab1">All</label>

            <input id="tab2" type="radio" name="tabs">
            <label class="tabtle" for="tab2">Hot Beverages</label>

            <input id="tab3" type="radio" name="tabs">
            <label class="tabtle" for="tab3">Cold Beverages</label>

            <section id="content1" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Coffee - <span>We make the delicious coffee</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-12 menu-section pr-lg-5">

              @foreach ($menu as $men)

                        <!-- Item starts -->
                        <div class="menu-item">
                            <img src="{{asset('frontend/assets/images/middle.png')}}" alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>{{$men->title}} </h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>Rs. {{$men->price}}</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>{!! substr($men->description,0,250) !!}</p>
                                </div>
                            </div>
                        </div>
                 @endforeach
                    </div>
                    <!-- Section ends: Appetizers -->


            </section>



            <section id="content2" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Hot Beverages - <span>Coffee and Cappuccino</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Drinks -->
                    <div class="col-lg-12 menu-section pr-lg-5">
                        <!-- Item starts -->
                        <div class="menu-item">
                            <img src="assets/images/middle3.png" alt="" class="radius-image img-fluid">
                            <div>
                            <div class="row border-dot no-gutters">
                                <div class="col-8 menu-item-name">
                                    <h6>Caramel Macchiato</h6>
                                </div>
                                <div class="col-4 menu-item-price text-right">
                                    <h6>$20</h6>
                                </div>
                            </div>
                            <div class="menu-item-description">
                                <p>Fresh Brewed coffee and steamed milk</p>
                            </div>
                            </div>
                        </div>
                        <!-- Item ends -->

                    </div>
                    <!-- Section ends: Drinks -->

                
                </div>
            </section>

     


            <section id="content3" class="tab-content text-left">
                <!-- <h3 class="title-small text-center">Cold Beverages - <span>Coffee and Cappuccino</span></h3> -->
                <div class="row menu-body">
                    <!-- Section starts: Appetizers -->
                    <div class="col-lg-12 menu-section pr-lg-5">
                        <!-- Item starts -->
                        <div class="menu-item">
                            <img src="assets/images/middle.png" alt="" class="radius-image img-fluid">
                            <div>
                                <div class="row border-dot no-gutters">
                                    <div class="col-8 menu-item-name">
                                        <h6>Single Cup Brew </h6>
                                    </div>
                                    <div class="col-4 menu-item-price text-right">
                                        <h6>$19.50</h6>
                                    </div>
                                </div>
                                <div class="menu-item-description">
                                    <p>Fresh Brewed coffee and steamed milk</p>
                                </div>
                            </div>
                        </div>
                        <!-- Item ends -->
              
            </section>

        </div>
    </div>
    <!-- menu block -->
</div>
@endsection
