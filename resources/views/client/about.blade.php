<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            <div>
                <div id="demo-about"
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
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 id="about">About Us</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">

                <div class="row">
                    <div class="col-sm-12" style="text-align: left;">

                        <h2 class="ppb_title" style="text-align: center;">1996&#8230;Our Adventure Begins</h2>
                        <hr id="gold">
                        <p>Atlas Outdoor is a family owned incoming DMC based in Marrakech.</p>
                        <p>The company was founded by Youssef and Mohamed, both experienced Mountain guides with a great
                            passion for travel and attention to Detail.</p>
                        <p>Youssef’s passion for travel revealed itself when he started his mountain guide training
                            adventure in the Atlas Mountains in 1996. Driven by his sense of discovery and fearless
                            spirit,
                            he continues to explore the world…In 2002, Youssef founded <a
                                href="https://www.amaris-voyages.com/">Amaris Voyages</a> which will become Atlas
                            Outdoor in
                            2007. Under his leadership, the company has grown to be one of the leading incoming Agencies
                            in
                            Morocco for small group travel..A DMC that has helped tens of thousands of people better
                            enjoy
                            their travel.</p>
                        <p>In 2008, other family members joined the company, Mohamed, Ahmed and Moha.. a team that
                            shares
                            the same values and passions. A young, rigorous, professional and dynamic team that puts in
                            all
                            its knowledge to give you a service of Excellence.</p>
                        <p>&nbsp;</p>

                        <h2 style="text-align: center;">Our Incoming Services</h2>
                        <hr id="gold">
                        <p>As a professional incoming DMC, Atlas Outdoor provides creative and
                            custom-made travel solutions. Our goal is to deliver first class quality and to guarantee
                            the
                            best services to meet your high expectations.</p>
                        <p>We know what makes a good Destination Management Company! It is destination know-how and our
                            eagerness to improve every day and with every request. It is our ability to meet your needs
                            and
                            the desire to move in new directions! It is our emphasis on good quality, perfect service,
                            and
                            the setting of standards and procedures that enables us to do this for:</p>
                        <ul>
                            <li><a href="https://www.atlas-outdoor.com/family-adventure-in-morocco/">Adventure travels
                                    for
                                    groups and families</a></li>
                            <li>Hotels</li>
                            <li><a href="https://www.atlas-outdoor.com/contact-us/">Transfers &amp; Transportation</a>
                            </li>
                            <li><a href="https://www.atlas-outdoor.com/self-drive-trips/">Car Rental</a></li>
                            <li>FIT</li>
                            <li><a href="https://www.atlas-outdoor.com/luxury-private-holidays/">Tailor Made</a></li>
                            <li><a href="https://www.atlas-outdoor.com/cultural-roundtrips/">Group Travel</a></li>
                            <li><a href="https://www.atlas-outdoor.com/m-i-c-e/">MICE</a></li>
                            <li><a href="https://www.atlas-outdoor.com/luxury-private-holidays/">Luxury Travel-Beach
                                    Holidays</a></li>
                            <li><a href="https://www.atlas-outdoor.com/spa-in-marrakech/">Spa &amp; Wellness Tourism</a>
                            </li>
                            <li><a href="https://www.atlas-outdoor.com/cycling-skiing/">Skiing</a></li>
                            <li><a href="https://www.atlas-outdoor.com/golf-in-morocco/">Golf</a></li>
                            <li><a href="https://www.atlas-outdoor.com/school-trips/">School Travels</a></li>
                        </ul>
                        <p>Over the years, strong relationships with suppliers have been built up, and Atlas Outdoor has
                            become a reliable partner for them, guaranteeing the delivery of excellent services through
                            our
                            motivated team.</p>
                    </div>
                </div>

            </div>
        </div>
        <x-footer />
</x-clientLayout>