<x-clientLayout>

    <body class="body">
        <div class="itlabspro-container">
            <x-menu />
            {{-- {{ "asset('assets/clientsite/images/randonnees-excursions-maroc.jpg') }}", "{{ asset('assets/clientsite/images/randonnees-excursions-maroc.jpg') }}"--}}
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
                                <div class="row" style="height: 75px;">
                                    <div class="col-3 itlabspro-border mt-2">
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
                                    <div class="col-4 itlabspro-border mt-2 ">
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
                                    <div class="col-3 itlabspro-border mt-2">
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
                                    <div class="col-2 row">
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
            <h5 class="trip-h5">TRIP INSPIRATIONS</h5>
            <hr id="gold">
            <div class="itlabspro-center">
                <div class="row">
                    @foreach ($trips as $trip)
                <div class="col-4" style="width: 350px;">
                    <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}" alt="Card image cap">
                    <div class="card-body mt-4" style="text-align: left;">
                        <h6 style="color: #B6935C">{{ $trip->title }}</h6>
                        <p class="card-text">Overview: {{ $trip->overview }} </p>
                        <hr id="card">

                    </div>
                    <div class="row" class="card-bottom">
                        <div class="col-4 ">
                            <p class="ml-5 trip-price">$ 300.00</p>
                        </div>
                        <div class="col-8 ">
                            <button id="more" onclick="location.href = '';">Read more ></button>
                        </div>

                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="excellence">
            <h5 class="excellence-h5">ONE AIM . . EXCELLENCE</h5>
            <hr id="gold" style="color: #fff !important;">
            <div class="container" style="width: 1300px ;">
                <div class="row">
                    <div class="col-4 row">
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
                    <div class="col-4 row">
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
                    <div class="col-4 row">
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
            <p class="itlabspro-category-p">BROWSE BY CATEGORY</p>
            <h1 id="font">Find Inspiration For Your Next Trip</h1>
            <hr id="orange">
            <div class="container" style="width: 1300px;">
                <div class="row">
                    <div class="col-2">
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
                    <div class="col-2">
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
                    <div class="col-2">
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
                    <div class="col-2">
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
                    <div class="col-2">
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
                    <div class="col-2">
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
        <div class="itlabspro-testimonials height">
            <div class="width itlabspro-testimonials-div">
                <h5 class="h5-font">Testimonials</h5>
                <h1>What Our happy Clients Say</h1>
                <div class="container" style="padding-top:60px ;">
                    <div class="row">
                        <div class="col-6 itlabspro-col">
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
                        <div class="col-6 itlabspro-col">
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
        <div class="itlabspro-about">
            <div class="container about-div1">
                <div class="row">

                    <div class="col-8 about-div2">
                        <p style="color: #ffffff;">ATLAS OUTDOOR</p>
                        <h5 class="about-h5">HELPING TRAVELERS MAKE GOOD MEMORIES SINCE
                            1996
                            </h6>
                            <div class="row about-div3">
                                <div class="col-6" style="text-align: left;">
                                    <p class="about-p">Atlas Outdoor is a family owned
                                        incoming DMC based in Marrakech.
                                        The company was founded by Youssef and Mohamed, both experienced Mountain
                                        guides
                                        with a great passion for travel and attention to Detail.</p>
                                </div>
                                <div class="col-6" style="text-align: left;">
                                    <p class="about-p">Youssef’s passion for travel
                                        revealed itself when he started his mountain guide
                                        training adventure in the Atlas Mountains in 1996. Driven by his sense of
                                        discovery and fearless spirit ...</p>
                                </div>
                            </div>
                            <a href=""><button class="about-button">READ MORE</button></a>
                    </div>
                    <div class="col-4" style=" padding-left: 50px;">
                        <img src="{{ asset('assets/clientsite/images/about.png') }}" alt="" class="about-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="itlabspro-blog height2">
            <div class="width blog-div">
                <h5 class="h5-font">Our Blog</h5>
                <h1>Travel Tips And Advice</h1>
                <p class="blog-p">Sed ut perspiciatis unde omnis iste natus error
                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab</p>
                <div class="container" style="padding-top:60px ;">
                    <div class="row">
                        <div class="col-4 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="images/tip1.png" alt="Card image cap">
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
                                    <a href="" class="blog-a">Read
                                        More →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="images/tip2.png" alt="Card image cap">
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
                                    <a href="" class="blog-a">Read
                                        More →</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 itlabspro-col2" style="float:left">
                            <div class="blog-cards">
                                <img class="card-img-top blog-card-img" src="images/tip3.png" alt="Card image cap">
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
                                    <a href="" class="blog-a">Read
                                        More →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <x-footer />
</x-clientLayout>