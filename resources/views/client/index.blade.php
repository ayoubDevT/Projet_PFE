<x-clientLayout>

    <body class="body">
        <div class="itlabspro-container">
            <x-menu />
            @if (Session::get('lang') == 'en')
            <div class="contain">
                <div id="demo-1"
                {{ $numItems = count($images)}}
                {{ $i = 0}}
                    data-zs-src='[@foreach ($images as $image)
                    @if (++$i == $numItems)
                        "{{ asset('storage/' . $image->path) }}"
                    @else
                        "{{ asset('storage/' . $image->path) }}",
                    @endif

                    @endforeach]'
                    data-zs-overlay="dots">
                    <div class="itlabspro-position">
                        <div class="demo-inner-content">
                            <form action="" class="px-3">
                                <div class="row itchoice" style="height: 75px;">
                                    <div class="col-md-3 col-12 itlabspro-border mt-2">
                                        <div class="row">
                                            <div class="col-2 py-2">
                                                <img src="{{ asset('assets/clientsite/images/location.png') }}" alt="" class="slider-icon">
                                            </div>
                                            <div class="col-10">
                                                <label for="destination">Destination</label><br>
                                                <input type="text" style="border: none;" name="destination"
                                                    id="destination" placeholder="Where are you going ?">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-4 col-12  itlabspro-border mt-2 ">
                                        <div class="row">
                                            <div class="col-2 py-2">
                                                <img src="{{ asset('assets/clientsite/images/calendar.png') }}" alt="" class="slider-icon">
                                            </div>
                                            <div class="col-10">
                                                <label for="checkin">Check In-Out</label>
                                                <div class="d-inline-flex">
                                                    <input type="date" class="input-date" name="checkin" id="checkin">
                                                    <p class="px-1" style="color: #B6935C;">-</p>
                                                    <input type="date" class="input-date" name="checkin" id="checkin">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-3 col-12 itlabspro-border mt-2">
                                        <div class="row">
                                            <div class="col-2 py-2">
                                                <img src="{{ asset('assets/clientsite/images/guest_hotel_icon.png') }}" alt="" class="slider-icon">
                                            </div>
                                            <div class="col-10">
                                                <label for="guests">Guests</label><br>
                                                <select class="select" style="outline: none" name="" id="">
                                                    <option value=""  selected>1 Adult - 0 Child</option>
                                                    <option value="">2 Adult - 0 Child</option>
                                                    <option value="">1 Adult - 1 Child</option>
                                                    <option value="">2 Adult - 1 Child</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-2 col-12  row">
                                        <!--<div class="col-6 mt-2">
                                        <label for="advance">Advance</label>
                                        <div class="nav-item dropdown">
                                            <a href="#" class=" dropdown-toggle itlabspro-active"
                                                style="font-weight: bolder;" data-toggle="dropdown">More</a>
                                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                                <a href="/tour_souk.html" class="dropdown-item  ">SOUK &
                                                    MEDINA</a>
                                                <a href="/tour_majorelle.html" class="dropdown-item  text-uppercase">le
                                                    jardin
                                                    majorelle & YSL Museum</a>
                                                <a href="/tour_romantic.html"
                                                    class="dropdown-item  text-uppercase">private
                                                    romantic</a>
                                                <a href="/tour_jewish.html" class="dropdown-item  text-uppercase">jewish
                                                    heritage</a>
                                                <a href="/tour_culinary.html" class="dropdown-item  text-uppercase"
                                                    style='color: red !important'>CULINARY ARTS</a>
                                                <a href="/tour_customize.html"
                                                    class="dropdown-item  text-uppercase">design
                                                    your
                                                    own
                                                    tour</a>
                                            </div>
                                        </div>
                                    </div>-->
                                        <div class=" py-2 mt-2 px-5">
                                            <button type="submit" id="search">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="trip">
            <h5 class="trip-h5-index">TRIP INSPIRATIONS</h5>
            <hr id="gold">
            <div class="itlabspro-center">
                <div class="row">
                  @php
                    $nbtrips=0;
                  @endphp
                    @foreach ($trips as $trip)
                <div class="col-md-4 col-12 mb-4 fade-ani fade-@php if($nbtrips==0){echo 'left';$nbtrips++;}else if($nbtrips==1){echo 'down';$nbtrips++;}else{echo 'right';$nbtrips=0;} @endphp">
                    <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}" alt="Card image cap">
                    <div class="card-body mt-4" style="text-align: left;">
                        <h6 style="color: #B6935C">{{ $trip->title_en }}</h6>
                        <p class="card-text">Overview: {{ $trip->overview_en }} </p>
                        <hr id="card">

                    </div>
                    <div class="row" class="card-bottom">
                        <div class="col-4 ">
                            <p class="ml-5 trip-price">$ {{ $trip->price }}</p>
                        </div>
                        <div class="col-8 ">
                            <button id="more" onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id, 'lang'=>Session::get('lang')]) }}';">Read more ></button>
                        </div>

                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="excellence">
            <h5 class="excellence-h5 fade-ani fade-left">ONE AIM . . EXCELLENCE</h5>
            <hr id="gold" style="color: #fff !important;">
            <div class="container itthecontainer" style="width: 1300px ;">
                <div class="row m-0 p-0">
                    <div class="col-md-4 col-12 row  fade-ani fade-right m-0 p-0">
                        <div class="col-12">
                            <i class="fas fa-users excellence-icon py-4"></i>
                        </div>
                        <div class="col-12">
                            <h4 class="excellence-h4">Responsiveness & Reliability</h4>
                            <div style="text-align: left;">
                                <p class="excellence-p">Our experienced team members are passionate about
                                    the trip destinations and sharing this
                                    beautiful country with others. You will communicate directly with tour guides and
                                    travel
                                    experts
                                    as you design your Morocco tours. We design a custom itinerary for each client,
                                    taking
                                    into
                                    account travel wishes and accommodation preferences before offering recommendations
                                    for
                                    places
                                    and experiences that best fit your style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 row fade-ani fade-down m-0 p-0">
                        <div class="col-12">
                            <i class="far fa-handshake excellence-icon py-4"></i>
                        </div>
                        <div class="col-12">
                            <h4 class="excellence-h4">Trusted Partner</h4>
                            <div style="text-align: left;">
                                <p class="excellence-p">We’ve spent over 20 years crafting and refining
                                    tour itineraries full of must-see sites and off-the-beaten path experiences you
                                    won’t
                                    find on other tours. We offer options for every budget and travel style. Our
                                    packages
                                    include walking adventure holidays, cultural roundtrips, M.I.C.E, business and
                                    Private
                                    luxury travel, Cycling and Skiing…</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 row fade-ani fade-left m-0 p-0">
                        <div class="col-12">
                            <i class="fas fa-seedling excellence-icon py-4"></i>
                        </div>
                        <div class="col-12">
                            <h4 class="excellence-h4">Responsible Corporate Citizen</h4>
                            <div style="text-align: left;">
                                <p class="excellence-p">We believe that there is a perfect balance when it
                                    comes to travel. Large group travel can be restrictive and impersonal. Our groups
                                    are
                                    small – usually less than 16 people! This allows our guests to be fully immersed in
                                    the
                                    local culture. Small groups experience places that large groups aren’t allowed visit
                                    and
                                    see areas that the tour buses cannot navigate to…</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-category">
            <p class="itlabspro-category-p fade-ani fade-left">BROWSE BY CATEGORY</p>
            <h1 id="font" class=" fade-ani fade-left">Find Inspiration For Your Next Trip</h1>
            <hr id="orange" class=" fade-ani fade-left">
            <div class="container itthecontainer" style="width: 1300px;">
                <div class="row">
                    <div class="col-md-2 col-12  fade-ani fade-left">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/mountains.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Adventure</h2>
                            <p style="font-weight: bold;">10 Tours+</p>
                            <span class="itlabspro-category-span">from</span><span class="itlabspro-category-price">
                                $250</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-up">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/beach.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Beaches</h2>
                            <p style="font-weight: bold;">2 Tours+</p>
                            <span class="itlabspro-category-span">from</span><span class="itlabspro-category-price">
                                $150</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-right">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/city.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">City Tours</h2>
                            <p style="font-weight: bold;">7 Tours+</p>
                            <span class="itlabspro-category-span">from</span><span class="itlabspro-category-price">
                                $195</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-left">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/trees.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Hiking</h2>
                            <p style="font-weight: bold;">8 Tours+</p>
                            <span class="itlabspro-category-span">from</span><span class="itlabspro-category-price">
                                $175</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-up">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/honeymoon.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Honeymoon</h2>
                            <p style="font-weight: bold;">3 Tours+</p>
                            <span class="itlabspro-category-span">from</span><span class="itlabspro-category-price">
                                $325</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-right">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/museum.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Museum Tours</h2>
                            <p style="font-weight: bold;">10 Tours+</p>
                            <span class="itlabspro-category-span">from</span><span class="itlabspro-category-price">
                                $405</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-testimonials height itthecontainerh">
            <div class="width itlabspro-testimonials-div itthecontainer">
                <h5 class="h5-font fade-ani fade-left">Testimonials</h5>
                <h1 class=" fade-ani fade-left">What Our happy Clients Say</h1>
                <div class="container fade-ani fade-right pb-4" style="padding-top:60px ;">
                    <div class="row">
                        <div class="col-md-6 col-12 itlabspro-col">
                            <div class="testi-cards" style="padding: 30px;">
                                <div style="text-align: left;">
                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, the
                                        master-builder of human happiness."</p>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-inline-flex">
                                        <div class="mt-3 ">
                                            <img src="{{ asset('assets/clientsite/images/avatar.png') }}" alt="" class="testimonials-avatar">
                                        </div>
                                        <div class="mt-4 ml-3">
                                            <p class="testimonials-name">Jenny
                                                Wilson</p>
                                            <p class="testimonials-job">UI/UX
                                                Designer</p>
                                        </div>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <img src="{{ asset('assets/clientsite/images/rating.png') }}" alt="" class="stars">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 itlabspro-col">
                            <div class="testi-cards" style="padding: 30px;">
                                <div style="text-align: left;">
                                    <p>"But I must explain to you how all this mistaken idea of denouncing pleasure and
                                        praising pain was born and I will give you a complete account of the system, the
                                        master-builder of human happiness."</p>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-inline-flex">
                                        <div class="mt-3 ">
                                            <img src="{{ asset('assets/clientsite/images/avatar.png') }}" alt="" class="testimonials-avatar">
                                        </div>
                                        <div class="mt-4 ml-3">
                                            <p class="testimonials-name">Jenny
                                                Wilson</p>
                                            <p class="testimonials-job">UI/UX
                                                Designer</p>
                                        </div>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <img src="{{ asset('assets/clientsite/images/rating.png') }}" alt="" class="stars">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="itlabspro-about itthecontainerh">
            <div class="container about-div1">
                <div class="row">

                    <div class="col-md-8 col-12 about-div2">
                        <p class=" fade-ani fade-left" style="color: #ffffff;">ATLAS OUTDOOR</p>
                        <h5 class="about-h5 fade-ani fade-left">HELPING TRAVELERS MAKE GOOD MEMORIES SINCE
                            1996
                          </h5>
                            <div class="row about-div3">
                                <div class="col-6 fade-ani fade-left" style="text-align: left;">
                                    <p class="about-p">Atlas Outdoor is a family owned
                                        incoming DMC based in Marrakech.
                                        The company was founded by Youssef and Mohamed, both experienced Mountain
                                        guides
                                        with a great passion for travel and attention to Detail.</p>
                                </div>
                                <div class="col-6 fade-ani fade-right" style="text-align: left;">
                                    <p class="about-p">Youssef’s passion for travel
                                        revealed itself when he started his mountain guide
                                        training adventure in the Atlas Mountains in 1996. Driven by his sense of
                                        discovery and fearless spirit ...</p>
                                </div>
                            </div>
                            <a href="" class=" fade-ani fade-left"><button class="about-button">READ MORE</button></a>
                    </div>
                    <div class="col-md-4 col-12 fade-ani fade-down ittheimgabout" style=" padding-left: 50px;">
                        <img src="{{ asset('assets/clientsite/images/about.png') }}" alt="" class="about-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-blog height2 itthecontainerh">
            <div class="width blog-div itthecontainer">
                <h5 class="h5-font fade-ani fade-left">Our Blog</h5>
                <h1>Travel Tips And Advice</h1>
                <p class="blog-p fade-ani fade-left">Sed ut perspiciatis unde omnis iste natus error
                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                <div class="container fade-ani fade-right pb-4" style="padding-top:60px ;">
                    <div class="row">
                        <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip1.png') }}" alt="Card image cap">
                                <div class="blog-div1">
                                    <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">Alani</span>
                                    <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">July 1, 2022</span>
                                    <h5 style="padding-top: 20px;">How To Travel With Paper Map</h5>
                                    <p class="blog-card-p">Some quick example text
                                        to build on the card title and make up the bulk of the
                                        card's content make up the bulk of the
                                        card's content.</p>
                                    <a href="{{ route('client.undeCon') }}" class="blog-a">Read
                                        More →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip2.png') }}" alt="Card image cap">
                                <div class="blog-div1">
                                    <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">Alani</span>
                                    <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">July 1, 2022</span>
                                    <h5 style="padding-top: 20px;">Pack Wisely Before Traveling</h5>
                                    <p class="blog-card-p">Some quick example text
                                        to build on the card title and make up the bulk of the
                                        card's content make up the bulk of the
                                        card's content.</p>
                                    <a href="{{ route('client.undeCon') }}" class="blog-a">Read
                                        More →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip3.png') }}" alt="Card image cap">
                                <div class="blog-div1">
                                    <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">Alani</span>
                                    <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">July 1, 2022</span>
                                    <h5 style="padding-top: 20px;">Introducing This Amazing Tour</h5>
                                    <p class="blog-card-p">Some quick example text
                                        to build on the card title and make up the bulk of the
                                        card's content make up the bulk of the
                                        card's content.</p>
                                    <a href="{{ route('client.undeCon') }}" class="blog-a">Read
                                        More →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
            @endif

            @if (Session::get('lang') == 'de')
            
                <div class="contain">
                    <div id="demo-1"
                    {{ $numItems = count($images)}}
                    {{ $i = 0}}
                        data-zs-src='[@foreach ($images as $image)
                        @if (++$i == $numItems)
                            "{{ asset('storage/' . $image->path) }}"
                        @else
                            "{{ asset('storage/' . $image->path) }}",
                        @endif
    
                        @endforeach]'
                        data-zs-overlay="dots">
                        <div class="itlabspro-position">
                            <div class="demo-inner-content">
                                <form action="" class="px-3">
                                    <div class="row itchoice" style="height: 75px;">
                                        <div class="col-md-3 col-12 itlabspro-border mt-2">
                                            <div class="row">
                                                <div class="col-2 py-2">
                                                    <img src="{{ asset('assets/clientsite/images/location.png') }}" alt="" class="slider-icon">
                                                </div>
                                                <div class="col-10">
                                                    <label for="destination">Reiseziel</label><br>
                                                    <input type="text" style="border: none;" name="destination"
                                                        id="destination" placeholder="Wohin gehst du ?">
                                                </div>
                                            </div>
    
    
                                        </div>
                                        <div class="col-md-4 col-12  itlabspro-border mt-2 ">
                                            <div class="row">
                                                <div class="col-2 py-2">
                                                    <img src="{{ asset('assets/clientsite/images/calendar.png') }}" alt="" class="slider-icon">
                                                </div>
                                                <div class="col-10">
                                                    <label for="checkin">Einchecken-Auschecken</label>
                                                    <div class="d-inline-flex">
                                                        <input type="date" class="input-date" name="checkin" id="checkin">
                                                        <p class="px-1" style="color: #B6935C;">-</p>
                                                        <input type="date" class="input-date" name="checkin" id="checkin">
                                                    </div>
                                                </div>
                                            </div>
    
    
                                        </div>
                                        <div class="col-md-3 col-12 itlabspro-border mt-2">
                                            <div class="row">
                                                <div class="col-2 py-2">
                                                    <img src="{{ asset('assets/clientsite/images/guest_hotel_icon.png') }}" alt="" class="slider-icon">
                                                </div>
                                                <div class="col-10">
                                                    <label for="guests">Gäste</label><br>
                                                    <select class="select" style="outline: none" name="" id="">
                                                        <option value=""  selected>1 Adult - 0 Child</option>
                                                        <option value="">2 Adult - 0 Child</option>
                                                        <option value="">1 Adult - 1 Child</option>
                                                        <option value="">2 Adult - 1 Child</option>
                                                    </select>
                                                </div>
                                            </div>
    
    
                                        </div>
                                        <div class="col-md-2 col-12  row">
                                            <!--<div class="col-6 mt-2">
                                            <label for="advance">Advance</label>
                                            <div class="nav-item dropdown">
                                                <a href="#" class=" dropdown-toggle itlabspro-active"
                                                    style="font-weight: bolder;" data-toggle="dropdown">More</a>
                                                <div class="dropdown-menu border-0 rounded-0 m-0">
                                                    <a href="/tour_souk.html" class="dropdown-item  ">SOUK &
                                                        MEDINA</a>
                                                    <a href="/tour_majorelle.html" class="dropdown-item  text-uppercase">le
                                                        jardin
                                                        majorelle & YSL Museum</a>
                                                    <a href="/tour_romantic.html"
                                                        class="dropdown-item  text-uppercase">private
                                                        romantic</a>
                                                    <a href="/tour_jewish.html" class="dropdown-item  text-uppercase">jewish
                                                        heritage</a>
                                                    <a href="/tour_culinary.html" class="dropdown-item  text-uppercase"
                                                        style='color: red !important'>CULINARY ARTS</a>
                                                    <a href="/tour_customize.html"
                                                        class="dropdown-item  text-uppercase">design
                                                        your
                                                        own
                                                        tour</a>
                                                </div>
                                            </div>
                                        </div>-->
                                            <div class=" py-2 mt-2 px-5">
                                                <button type="submit" id="search">Suche</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    
                </div>
    
    
    
            </div>
    
            <div class="trip">
                <h5 class="trip-h5-index">REISEINSPIRATIONEN</h5>
                <hr id="gold">
                <div class="itlabspro-center">
                    <div class="row">
                      @php
                        $nbtrips=0;
                      @endphp
                        @foreach ($trips as $trip)
                    <div class="col-md-4 col-12 mb-4 fade-ani fade-@php if($nbtrips==0){echo 'left';$nbtrips++;}else if($nbtrips==1){echo 'down';$nbtrips++;}else{echo 'right';$nbtrips=0;} @endphp">
                        <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}" alt="Card image cap">
                        <div class="card-body mt-4" style="text-align: left;">
                            <h6 style="color: #B6935C">{{ $trip->title_de }}</h6>
                            <p class="card-text">Übersicht: {{ $trip->overview_de }} </p>
                            <hr id="card">
    
                        </div>
                        <div class="row" class="card-bottom">
                            <div class="col-4 ">
                                <p class="ml-5 trip-price">$ {{ $trip->price }}</p>
                            </div>
                            <div class="col-8 ">
                                <button id="more" onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id, 'lang'=>Session::get('lang')]) }}';">Read more ></button>
                            </div>
    
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="excellence">
                <h5 class="excellence-h5 fade-ani fade-left">EIN ZIEL . . EXZELLENZ</h5>
                <hr id="gold" style="color: #fff !important;">
                <div class="container itthecontainer" style="width: 1300px ;">
                    <div class="row m-0 p-0">
                        <div class="col-md-4 col-12 row  fade-ani fade-right m-0 p-0">
                            <div class="col-12">
                                <i class="fas fa-users excellence-icon py-4"></i>
                            </div>
                            <div class="col-12">
                                <h4 class="excellence-h4">Reaktionsschnelligkeit und Verlässlichkeit</h4>
                                <div style="text-align: left;">
                                    <p class="excellence-p">Unsere erfahrenen Teammitglieder sind leidenschaftlich über
                                        die Reiseziele und das Teilen dieses
                                        schönen Land mit anderen zu teilen. Sie kommunizieren direkt mit den Reiseleitern und
                                        Reise
                                        Experten
                                        während Sie Ihre Marokko-Reisen planen. Wir entwerfen eine maßgeschneiderte Reiseroute für jeden Kunden,
                                        unter
                                        in
                                        Reisewünsche und Unterkunftspräferenzen berücksichtigen, bevor wir Empfehlungen
                                        für
                                        Orte
                                        und Erlebnisse, die am besten zu Ihrem Stil passen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 row fade-ani fade-down m-0 p-0">
                            <div class="col-12">
                                <i class="far fa-handshake excellence-icon py-4"></i>
                            </div>
                            <div class="col-12">
                                <h4 class="excellence-h4">Vertrauter Partner</h4>
                                <div style="text-align: left;">
                                    <p class="excellence-p">Wir haben über 20 Jahre damit verbracht, Reiserouten zu entwickeln
                                        Reisepläne zu erstellen und zu verfeinern, die voller Sehenswürdigkeiten und Erlebnisse abseits der
                                        nicht
                                        auf anderen Touren finden. Wir bieten Optionen für jedes Budget und jeden Reisestil. Unser
                                        Pakete
                                        umfassen Wanderabenteuerreisen, kulturelle Rundreisen, M.I.C.E., Geschäfts- und
                                        Privat
                                        Luxusreisen, Radfahren und Skifahren...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 row fade-ani fade-left m-0 p-0">
                            <div class="col-12">
                                <i class="fas fa-seedling excellence-icon py-4"></i>
                            </div>
                            <div class="col-12">
                                <h4 class="excellence-h4">Verantwortungsvoller Unternehmensbürger</h4>
                                <div style="text-align: left;">
                                    <p class="excellence-p">Wir glauben, dass es eine perfekte Balance gibt, wenn es
                                        wenn es ums Reisen geht. Reisen in großen Gruppen können einschränkend und unpersönlich sein. Unsere Gruppen
                                        sind
                                        klein - normalerweise weniger als 16 Personen! So können unsere Gäste voll und ganz eintauchen in
                                        die
                                        lokale Kultur eintauchen. Kleine Gruppen erleben Orte, die große Gruppen nicht besuchen dürfen
                                        und
                                        sehen Gegenden, zu denen die Reisebusse nicht fahren können...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itlabspro-category">
                <p class="itlabspro-category-p fade-ani fade-left">NACH KATEGORIE SUCHEN</p>
                <h1 id="font" class=" fade-ani fade-left">Inspiration für Ihre nächste Reise finden</h1>
                <hr id="orange" class=" fade-ani fade-left">
                <div class="container itthecontainer" style="width: 1300px;">
                    <div class="row">
                        <div class="col-md-2 col-12  fade-ani fade-left">
                            <div class="cat-cards">
                                <a href="">
                                    <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/mountains.png') }}"
                                            alt="">
                                    </div>
                                </a>
                                <h2 class="h2-font">Abenteuer</h2>
                                <p style="font-weight: bold;">10 Touren+</p>
                                <span class="itlabspro-category-span">aus</span><span class="itlabspro-category-price">
                                    $250</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 fade-ani fade-up">
                            <div class="cat-cards">
                                <a href="">
                                    <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/beach.png') }}"
                                            alt="">
                                    </div>
                                </a>
                                <h2 class="h2-font">Strände</h2>
                                <p style="font-weight: bold;">2 Touren+</p>
                                <span class="itlabspro-category-span">aus</span><span class="itlabspro-category-price">
                                    $150</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 fade-ani fade-right">
                            <div class="cat-cards">
                                <a href="">
                                    <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/city.png') }}"
                                            alt="">
                                    </div>
                                </a>
                                <h2 class="h2-font">Stadtführungen</h2>
                                <p style="font-weight: bold;">7 Touren+</p>
                                <span class="itlabspro-category-span">aus</span><span class="itlabspro-category-price">
                                    $195</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 fade-ani fade-left">
                            <div class="cat-cards">
                                <a href="">
                                    <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/trees.png') }}"
                                            alt="">
                                    </div>
                                </a>
                                <h2 class="h2-font">Wandern</h2>
                                <p style="font-weight: bold;">8 Touren+</p>
                                <span class="itlabspro-category-span">aus</span><span class="itlabspro-category-price">
                                    $175</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 fade-ani fade-up">
                            <div class="cat-cards">
                                <a href="">
                                    <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/honeymoon.png') }}"
                                            alt="">
                                    </div>
                                </a>
                                <h2 class="h2-font">Flitterwochen</h2>
                                <p style="font-weight: bold;">3 Touren+</p>
                                <span class="itlabspro-category-span">aus</span><span class="itlabspro-category-price">
                                    $325</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-12 fade-ani fade-right">
                            <div class="cat-cards">
                                <a href="">
                                    <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/museum.png') }}"
                                            alt="">
                                    </div>
                                </a>
                                <h2 class="h2-font">Museumstouren</h2>
                                <p style="font-weight: bold;">10 Touren+</p>
                                <span class="itlabspro-category-span">aus</span><span class="itlabspro-category-price">
                                    $405</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="itlabspro-testimonials height itthecontainerh">
                <div class="width itlabspro-testimonials-div itthecontainer">
                    <h5 class="h5-font fade-ani fade-left">Testimonials</h5>
                    <h1 class=" fade-ani fade-left">Was unsere zufriedenen Kunden sagen</h1>
                    <div class="container fade-ani fade-right pb-4" style="padding-top:60px ;">
                        <div class="row">
                            <div class="col-md-6 col-12 itlabspro-col">
                                <div class="testi-cards" style="padding: 30px;">
                                    <div style="text-align: left;">
                                        <p>"Aber ich muss Ihnen erklären, wie all diese irrige Idee, das Vergnügen zu verurteilen und
                                            und den Schmerz zu preisen, entstanden ist, und ich werde Ihnen einen vollständigen Bericht über das System, den
                                            Meistererbauer des menschlichen Glücks."</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 d-inline-flex">
                                            <div class="mt-3 ">
                                                <img src="{{ asset('assets/clientsite/images/avatar.png') }}" alt="" class="testimonials-avatar">
                                            </div>
                                            <div class="mt-4 ml-3">
                                                <p class="testimonials-name">Jenny
                                                    Wilson</p>
                                                <p class="testimonials-job">UI/UX
                                                    Designer</p>
                                            </div>
                                        </div>
    
                                        <div class="col-6 mt-3">
                                            <img src="{{ asset('assets/clientsite/images/rating.png') }}" alt="" class="stars">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 itlabspro-col">
                                <div class="testi-cards" style="padding: 30px;">
                                    <div style="text-align: left;">
                                        <p>"Aber ich muss Ihnen erklären, wie all diese irrige Idee, das Vergnügen zu verurteilen und
                                            und den Schmerz zu preisen, entstanden ist, und ich werde Ihnen einen vollständigen Bericht über das System, den
                                            Meistererbauer des menschlichen Glücks."</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 d-inline-flex">
                                            <div class="mt-3 ">
                                                <img src="{{ asset('assets/clientsite/images/avatar.png') }}" alt="" class="testimonials-avatar">
                                            </div>
                                            <div class="mt-4 ml-3">
                                                <p class="testimonials-name">Jenny
                                                    Wilson</p>
                                                <p class="testimonials-job">UI/UX
                                                    Designer</p>
                                            </div>
                                        </div>
    
                                        <div class="col-6 mt-3">
                                            <img src="{{ asset('assets/clientsite/images/rating.png') }}" alt="" class="stars">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
            <div class="itlabspro-about itthecontainerh">
                <div class="container about-div1">
                    <div class="row">
    
                        <div class="col-md-8 col-12 about-div2">
                            <p class=" fade-ani fade-left" style="color: #ffffff;">ATLAS OUTDOOR</p>
                            <h5 class="about-h5 fade-ani fade-left">REISENDEN ZU GUTEN ERINNERUNGEN VERHELFEN, SEIT
                                1996
                              </h5>
                                <div class="row about-div3">
                                    <div class="col-6 fade-ani fade-left" style="text-align: left;">
                                        <p class="about-p">Atlas Outdoor ist ein Familienunternehmen
                                            DMC mit Sitz in Marrakech.
                                            Das Unternehmen wurde von Youssef und Mohamed gegründet, beide erfahrene Berg
                                            Bergführer
                                            mit einer großen Leidenschaft für Reisen und Liebe zum Detail.</p>
                                    </div>
                                    <div class="col-6 fade-ani fade-right" style="text-align: left;">
                                        <p class="about-p">Youssef's Leidenschaft für das Reisen
                                            zeigte sich, als er seine Ausbildung zum Bergführer
                                            Ausbildung zum Bergführer im Atlasgebirge im Jahr 1996 begann. Angetrieben von seinem Sinn für
                                            Entdeckergeist und Furchtlosigkeit ...</p>
                                    </div>
                                </div>
                                <a href="" class=" fade-ani fade-left"><button class="about-button">MEHR LESEN</button></a>
                        </div>
                        <div class="col-md-4 col-12 fade-ani fade-down ittheimgabout" style=" padding-left: 50px;">
                            <img src="{{ asset('assets/clientsite/images/about.png') }}" alt="" class="about-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="itlabspro-blog height2 itthecontainerh">
                <div class="width blog-div itthecontainer">
                    <h5 class="h5-font fade-ani fade-left">Unser Blog</h5>
                    <h1>Reisetipps und Ratschläge</h1>
                    <p class="blog-p fade-ani fade-left">Sed ut perspiciatis unde omnis iste natus error
                        sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                    <div class="container fade-ani fade-right pb-4" style="padding-top:60px ;">
                        <div class="row">
                            <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                                <div class="blog-cards">
                                    <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip1.png') }}" alt="Card image cap">
                                    <div class="blog-div1">
                                        <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                            class="blog-span">Alani</span>
                                        <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                            class="blog-span">July 1, 2022</span>
                                        <h5 style="padding-top: 20px;">Wie man mit einer Papierkarte reist</h5>
                                        <p class="blog-card-p">Some quick example text
                                            to build on the card title and make up the bulk of the
                                            card's content make up the bulk of the
                                            card's content.</p>
                                        <a href="{{ route('client.undeCon') }}" class="blog-a">Read
                                            More →</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                                <div class="blog-cards">
                                    <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip2.png') }}" alt="Card image cap">
                                    <div class="blog-div1">
                                        <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                            class="blog-span">Alani</span>
                                        <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                            class="blog-span">July 1, 2022</span>
                                        <h5 style="padding-top: 20px;">Vor der Reise vernünftig packen</h5>
                                        <p class="blog-card-p">Some quick example text
                                            to build on the card title and make up the bulk of the
                                            card's content make up the bulk of the
                                            card's content.</p>
                                        <a href="{{ route('client.undeCon') }}" class="blog-a">Read
                                            More →</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                                <div class="blog-cards">
                                    <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip3.png') }}" alt="Card image cap">
                                    <div class="blog-div1">
                                        <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                            class="blog-span">Alani</span>
                                        <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                            class="blog-span">July 1, 2022</span>
                                        <h5 style="padding-top: 20px;">Einführung in diese erstaunliche Tour</h5>
                                        <p class="blog-card-p">Some quick example text
                                            to build on the card title and make up the bulk of the
                                            card's content make up the bulk of the
                                            card's content.</p>
                                        <a href="{{ route('client.undeCon') }}" class="blog-a">Read
                                            More →</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
            @endif

            @if (Session::get('lang') == 'fr')
            <div class="contain">
                <div id="demo-1"
                {{ $numItems = count($images)}}
                {{ $i = 0}}
                    data-zs-src='[@foreach ($images as $image)
                    @if (++$i == $numItems)
                        "{{ asset('storage/' . $image->path) }}"
                    @else
                        "{{ asset('storage/' . $image->path) }}",
                    @endif

                    @endforeach]'
                    data-zs-overlay="dots">
                    <div class="itlabspro-position">
                        <div class="demo-inner-content">
                            <form action="" class="px-3">
                                <div class="row itchoice" style="height: 75px;">
                                    <div class="col-md-3 col-12 itlabspro-border mt-2">
                                        <div class="row">
                                            <div class="col-2 py-2">
                                                <img src="{{ asset('assets/clientsite/images/location.png') }}" alt="" class="slider-icon">
                                            </div>
                                            <div class="col-10">
                                                <label for="destination">Destination</label><br>
                                                <input type="text" style="border: none;" name="destination"
                                                    id="destination" placeholder="Où allez-vous ?">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-4 col-12  itlabspro-border mt-2 ">
                                        <div class="row">
                                            <div class="col-2 py-2">
                                                <img src="{{ asset('assets/clientsite/images/calendar.png') }}" alt="" class="slider-icon">
                                            </div>
                                            <div class="col-10">
                                                <label for="checkin">Check In-Out</label>
                                                <div class="d-inline-flex">
                                                    <input type="date" class="input-date" name="checkin" id="checkin">
                                                    <p class="px-1" style="color: #B6935C;">-</p>
                                                    <input type="date" class="input-date" name="checkin" id="checkin">
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-3 col-12 itlabspro-border mt-2">
                                        <div class="row">
                                            <div class="col-2 py-2">
                                                <img src="{{ asset('assets/clientsite/images/guest_hotel_icon.png') }}" alt="" class="slider-icon">
                                            </div>
                                            <div class="col-10">
                                                <label for="guests">Guests</label><br>
                                                <select class="select" style="outline: none" name="" id="">
                                                    <option value=""  selected>1 Adult - 0 Child</option>
                                                    <option value="">2 Adult - 0 Child</option>
                                                    <option value="">1 Adult - 1 Child</option>
                                                    <option value="">2 Adult - 1 Child</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-md-2 col-12  row">
                                        <!--<div class="col-6 mt-2">
                                        <label for="advance">Advance</label>
                                        <div class="nav-item dropdown">
                                            <a href="#" class=" dropdown-toggle itlabspro-active"
                                                style="font-weight: bolder;" data-toggle="dropdown">More</a>
                                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                                <a href="/tour_souk.html" class="dropdown-item  ">SOUK &
                                                    MEDINA</a>
                                                <a href="/tour_majorelle.html" class="dropdown-item  text-uppercase">le
                                                    jardin
                                                    majorelle & YSL Museum</a>
                                                <a href="/tour_romantic.html"
                                                    class="dropdown-item  text-uppercase">private
                                                    romantic</a>
                                                <a href="/tour_jewish.html" class="dropdown-item  text-uppercase">jewish
                                                    heritage</a>
                                                <a href="/tour_culinary.html" class="dropdown-item  text-uppercase"
                                                    style='color: red !important'>CULINARY ARTS</a>
                                                <a href="/tour_customize.html"
                                                    class="dropdown-item  text-uppercase">design
                                                    your
                                                    own
                                                    tour</a>
                                            </div>
                                        </div>
                                    </div>-->
                                        <div class=" py-2 mt-2 px-5">
                                            <button type="submit" id="search">chercher</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>



        </div>

        <div class="trip">
            <h5 class="trip-h5-index">INSPIRATIONS DE VOYAGE</h5>
            <hr id="gold">
            <div class="itlabspro-center">
                <div class="row">
                  @php
                    $nbtrips=0;
                  @endphp
                    @foreach ($trips as $trip)
                <div class="col-md-4 col-12 mb-4 fade-ani fade-@php if($nbtrips==0){echo 'left';$nbtrips++;}else if($nbtrips==1){echo 'down';$nbtrips++;}else{echo 'right';$nbtrips=0;} @endphp">
                    <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}" alt="Card image cap">
                    <div class="card-body mt-4" style="text-align: left;">
                        <h6 style="color: #B6935C">{{ $trip->title_fr }}</h6>
                        <p class="card-text">Aperçu: {{ $trip->overview_fr }} </p>
                        <hr id="card">

                    </div>
                    <div class="row" class="card-bottom">
                        <div class="col-4 ">
                            <p class="ml-5 trip-price">$ {{ $trip->price }}</p>
                        </div>
                        <div class="col-8 ">
                            <button id="more" onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id, 'lang'=>Session::get('lang')]) }}';">Read more ></button>
                        </div>

                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="excellence">
            <h5 class="excellence-h5 fade-ani fade-left">UN OBJECTIF . . EXCELLENCE</h5>
            <hr id="gold" style="color: #fff !important;">
            <div class="container itthecontainer" style="width: 1300px ;">
                <div class="row m-0 p-0">
                    <div class="col-md-4 col-12 row  fade-ani fade-right m-0 p-0">
                        <div class="col-12">
                            <i class="fas fa-users excellence-icon py-4"></i>
                        </div>
                        <div class="col-12">
                            <h4 class="excellence-h4">Réactivité et fiabilité</h4>
                            <div style="text-align: left;">
                                <p class="excellence-p">Les membres de notre équipe expérimentée sont passionnés par
                                    les destinations des voyages et de partager ce
                                    ce beau pays avec d'autres. Vous communiquerez directement avec les guides touristiques et les
                                    voyage
                                    experts en voyages
                                    lors de la conception de vos circuits au Maroc. Nous concevons un itinéraire personnalisé pour chaque client,
                                    en prenant
                                    en
                                    les souhaits de voyage et les préférences d'hébergement avant de proposer des recommandations
                                    pour
                                    lieux
                                    et les expériences qui correspondent le mieux à votre style.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 row fade-ani fade-down m-0 p-0">
                        <div class="col-12">
                            <i class="far fa-handshake excellence-icon py-4"></i>
                        </div>
                        <div class="col-12">
                            <h4 class="excellence-h4">Partenaire de confiance</h4>
                            <div style="text-align: left;">
                                <p class="excellence-p">Nous avons passé plus de 20 ans à élaborer et à affiner
                                    des itinéraires pleins de sites à voir absolument et d'expériences hors des sentiers battus que vous
                                    que vous ne
                                    que vous ne trouverez pas sur d'autres circuits. Nous proposons des options pour tous les budgets et tous les styles de voyage. Notre site
                                    forfaits
                                    comprennent des vacances d'aventure à pied, des circuits culturels, des M.I.C.E., des voyages d'affaires et des voyages privés.
                                    Privé
                                    voyages de luxe, cyclisme et ski...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 row fade-ani fade-left m-0 p-0">
                        <div class="col-12">
                            <i class="fas fa-seedling excellence-icon py-4"></i>
                        </div>
                        <div class="col-12">
                            <h4 class="excellence-h4">Entreprise citoyenne responsable</h4>
                            <div style="text-align: left;">
                                <p class="excellence-p">Nous pensons qu'il existe un équilibre parfait lorsqu'il s'agit de
                                    en matière de voyage. Les voyages en grand groupe peuvent être restrictifs et impersonnels. Nos groupes
                                    sont
                                    petits - généralement moins de 16 personnes ! Cela permet à nos clients de s'immerger totalement dans la vie de l'entreprise.
                                    le site
                                    culture locale. Les petits groupes découvrent des endroits que les grands groupes ne sont pas autorisés à visiter.
                                    et
                                    voir des zones que les bus de tourisme ne peuvent pas atteindre...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-category">
            <p class="itlabspro-category-p fade-ani fade-left">PARCOURIR PAR CATÉGORIE</p>
            <h1 id="font" class=" fade-ani fade-left">Trouvez l'inspiration pour votre prochain voyage</h1>
            <hr id="orange" class=" fade-ani fade-left">
            <div class="container itthecontainer" style="width: 1300px;">
                <div class="row">
                    <div class="col-md-2 col-12  fade-ani fade-left">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/mountains.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Aventure</h2>
                            <p style="font-weight: bold;">10 Tours+</p>
                            <span class="itlabspro-category-span">de</span><span class="itlabspro-category-price">
                                $250</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-up">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/beach.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Plages</h2>
                            <p style="font-weight: bold;">2 Tours+</p>
                            <span class="itlabspro-category-span">de</span><span class="itlabspro-category-price">
                                $150</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-right">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/city.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Ville Tours</h2>
                            <p style="font-weight: bold;">7 Tours+</p>
                            <span class="itlabspro-category-span">de</span><span class="itlabspro-category-price">
                                $195</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-left">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/trees.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Randonnée</h2>
                            <p style="font-weight: bold;">8 Tours+</p>
                            <span class="itlabspro-category-span">de</span><span class="itlabspro-category-price">
                                $175</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-up">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/honeymoon.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Honeymoon</h2>
                            <p style="font-weight: bold;">3 Tours+</p>
                            <span class="itlabspro-category-span">de</span><span class="itlabspro-category-price">
                                $325</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-12 fade-ani fade-right">
                        <div class="cat-cards">
                            <a href="">
                                <div style="margin-bottom: 50px;"><img class="cat-cards-img" src="{{ asset('assets/clientsite/images/museum.png') }}"
                                        alt="">
                                </div>
                            </a>
                            <h2 class="h2-font">Visites de musées</h2>
                            <p style="font-weight: bold;">10 Tours+</p>
                            <span class="itlabspro-category-span">de</span><span class="itlabspro-category-price">
                                $405</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-testimonials height itthecontainerh">
            <div class="width itlabspro-testimonials-div itthecontainer">
                <h5 class="h5-font fade-ani fade-left">Témoignages</h5>
                <h1 class=" fade-ani fade-left">Ce que disent nos heureux clients</h1>
                <div class="container fade-ani fade-right pb-4" style="padding-top:60px ;">
                    <div class="row">
                        <div class="col-md-6 col-12 itlabspro-col">
                            <div class="testi-cards" style="padding: 30px;">
                                <div style="text-align: left;">
                                    <p>"Mais je dois vous expliquer comment est née cette idée erronée de dénoncer le plaisir et de louer la douleur.
                                        de dénoncer le plaisir et de louer la douleur, et je vous donnerai un compte rendu complet du système, le
                                        maître d'oeuvre du bonheur humain."</p>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-inline-flex">
                                        <div class="mt-3 ">
                                            <img src="{{ asset('assets/clientsite/images/avatar.png') }}" alt="" class="testimonials-avatar">
                                        </div>
                                        <div class="mt-4 ml-3">
                                            <p class="testimonials-name">Jenny
                                                Wilson</p>
                                            <p class="testimonials-job">UI/UX
                                                Designer</p>
                                        </div>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <img src="{{ asset('assets/clientsite/images/rating.png') }}" alt="" class="stars">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 itlabspro-col">
                            <div class="testi-cards" style="padding: 30px;">
                                <div style="text-align: left;">
                                    <p>"Mais je dois vous expliquer comment est née cette idée erronée de dénoncer le plaisir et de louer la douleur.
                                        de dénoncer le plaisir et de louer la douleur, et je vous donnerai un compte rendu complet du système, le
                                        maître d'oeuvre du bonheur humain."</p>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-inline-flex">
                                        <div class="mt-3 ">
                                            <img src="{{ asset('assets/clientsite/images/avatar.png') }}" alt="" class="testimonials-avatar">
                                        </div>
                                        <div class="mt-4 ml-3">
                                            <p class="testimonials-name">Jenny
                                                Wilson</p>
                                            <p class="testimonials-job">UI/UX
                                                Designer</p>
                                        </div>
                                    </div>

                                    <div class="col-6 mt-3">
                                        <img src="{{ asset('assets/clientsite/images/rating.png') }}" alt="" class="stars">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="itlabspro-about itthecontainerh">
            <div class="container about-div1">
                <div class="row">

                    <div class="col-md-8 col-12 about-div2">
                        <p class=" fade-ani fade-left" style="color: #ffffff;">ATLAS OUTDOOR</p>
                        <h5 class="about-h5 fade-ani fade-left">AIDER LES VOYAGEURS À SE CRÉER DE BONS SOUVENIRS DEPUIS
                            1996
                          </h5>
                            <div class="row about-div3">
                                <div class="col-6 fade-ani fade-left" style="text-align: left;">
                                    <p class="about-p">Atlas Outdoor est une entreprise familiale
                                        DMC réceptif basé à Marrakech.
                                        La société a été fondée par Youssef et Mohamed, tous deux guides de montagne expérimentés.
                                        guides de montagne
                                        avec une grande passion pour le voyage et l'attention au détail.</p>
                                </div>
                                <div class="col-6 fade-ani fade-right" style="text-align: left;">
                                    <p class="about-p">La passion de Youssef pour les voyages
                                        s'est révélée lorsqu'il a commencé sa formation de guide de montagne
                                        dans les montagnes de l'Atlas en 1996. Poussé par son sens de la
                                        découverte et son esprit intrépide ...</p>
                                </div>
                            </div>
                            <a href="" class=" fade-ani fade-left"><button class="about-button">LIRE PLUS</button></a>
                    </div>
                    <div class="col-md-4 col-12 fade-ani fade-down ittheimgabout" style=" padding-left: 50px;">
                        <img src="{{ asset('assets/clientsite/images/about.png') }}" alt="" class="about-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-blog height2 itthecontainerh">
            <div class="width blog-div itthecontainer">
                <h5 class="h5-font fade-ani fade-left">Notre Blog</h5>
                <h1>Conseils et astuces de voyage</h1>
                <p class="blog-p fade-ani fade-left">Sed ut perspiciatis unde omnis iste natus error
                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                <div class="container fade-ani fade-right pb-4" style="padding-top:60px ;">
                    <div class="row">
                        <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip1.png') }}" alt="Card image cap">
                                <div class="blog-div1">
                                    <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">Alani</span>
                                    <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">July 1, 2022</span>
                                    <h5 style="padding-top: 20px;">Comment voyager avec une carte en papier</h5>
                                    <p class="blog-card-p">Some quick example text
                                        to build on the card title and make up the bulk of the
                                        card's content make up the bulk of the
                                        card's content.</p>
                                    <a href="{{ route('client.undeCon') }}" class="blog-a">Lire Plus →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip2.png') }}" alt="Card image cap">
                                <div class="blog-div1">
                                    <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">Alani</span>
                                    <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">July 1, 2022</span>
                                    <h5 style="padding-top: 20px;">Faites vos bagages avant de partir en voyage</h5>
                                    <p class="blog-card-p">Some quick example text
                                        to build on the card title and make up the bulk of the
                                        card's content make up the bulk of the
                                        card's content.</p>
                                    <a href="{{ route('client.undeCon') }}" class="blog-a">Lire Plus →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="{{ asset('assets/clientsite/images/tip3.png') }}" alt="Card image cap">
                                <div class="blog-div1">
                                    <img src="{{ asset('assets/clientsite/images/user.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">Alani</span>
                                    <img src="{{ asset('assets/clientsite/images/calendar-gray.png') }}" alt="" class="blog-icons"><span
                                        class="blog-span">July 1, 2022</span>
                                    <h5 style="padding-top: 20px;">Présentation de cette incroyable visite</h5>
                                    <p class="blog-card-p">Some quick example text
                                        to build on the card title and make up the bulk of the
                                        card's content make up the bulk of the
                                        card's content.</p>
                                    <a href="{{ route('client.undeCon') }}" class="blog-a">Lire Plus →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
            @endif
            {{-- {{ "asset('assets/clientsite/images/randonnees-excursions-maroc.jpg') }}", "{{ asset('assets/clientsite/images/randonnees-excursions-maroc.jpg') }}"--}}
            
        <x-footer />
</x-clientLayout>