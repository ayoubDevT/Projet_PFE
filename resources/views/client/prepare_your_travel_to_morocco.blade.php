<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            <div>
                <div id="demo-about"
                    style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 class="text-uppercase" id="about">{{ $page->name }}</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        <h4>Get ready !</h4>
                        <p>Before you embark on your first travel to Morocco, it’s important to prepare prudently. In
                            the
                            excitement leading up to a big trip, many accidentally forget to consider the most basic
                            packing
                            and preparation tips.</p>
                        <p>For adventure travelers, Start a conditioning program to ready your body for a long outdoor
                            trip.
                            You’ll need to be in excellent physical condition for your hiking adventure.</p>
                        <h4>Your Guide &amp; his team</h4>
                        <p>Atlas Outdoor team is made up of a family of English-speaking tour leaders, passionate about
                            travel and known for Team spirit, trust, easy and quick communication, which gives
                            exceptional
                            strength to our organization, we are extremely proud of our team of excellent leaders. You
                            choose the itinerary and they make it happen.</p>
                        <h4>Welcome to Morocco</h4>
                        <p>Once you landed, Your Atlas Outdoor leader meets you at the airport holding a panel of your
                            name
                            and provides a free transfer for you to the hotel or Riad. At night, he gives you a general
                            briefing about your tour. In case of a loss of your luggage: it is necessary to make
                            declaration
                            of loss in the office of the complaints which is located in the enclosure of the airport. If
                            you
                            had suddenly left the airport, you flight company will refuse your request. Our company will
                            not
                            be able intervene in this case.</p>
                        <h4>Formalities</h4>
                        <p>Check the validity of your passport; it must be valid up to 3 months after your trip. If you
                            are
                            a British citizen, or from the EU, you do not need a visa.</p>
                        <h4>Basic First Aid Kit for adventure travellers</h4>
                        <p>If you or someone in your friends gets hurt or injured during an adventure tour, chances are
                            you
                            will be far from the nearest hospital or clinic. Carry a basic first aid kit that includes;
                            Plasters, in a variety of different sizes and shapes, Triangular bandages.</p>
                        <p>Crêpe rolled bandages. , Safety pins. Tweezers. Scissors.</p>
                        <p>Alcohol-free cleansing wipes. Skin rash cream such as hydrocortisone or calendula.</p>
                        <p>Cream or spray to relieve insect bites and stings. Antiseptic cream.</p>
                        <p>Painkillers such as paracetamol (or infant paracetamol for children), aspirin (not to be
                            given to
                            children under 16), or ibuprofen.</p>
                        <p>Cough medicine. Decongestant tablets or nasal spray. Antihistamine tablets.</p>
                        <p>Distilled water, for cleaning wounds and as an eye bath.</p>
                        <h4>Essential Gear</h4>
                        <p>Day pack, Rucksack, Warm Sleeping Bag, Water-purification tablets, Water bottle</p>
                        <p>Headlamp or Flashlight, First-aid kit, Knife/Multi-purpose Tool,</p>
                        <p>Sunscreen, shampoo, soap. Sunglasses, Whistle, Insect repellent</p>
                        <h4>Clothing</h4>
                        <p>Convertible nylon pants/shorts, Fleece jacket</p>
                        <p>Polypropylene underwear (shirt &amp; pants), Wide-brimmed hat, Long-sleeved shirt</p>
                        <p>Hooded rain jacket and pants, Gloves, Resealable plastic bags, Toilet paper</p>
                        <p>Lip balm (with sunscreen), Repair/sewing kit, Pencil and paper, notebook,</p>
                        <p>Charger for cameras and phone, Extra film or memory card</p>
                        <h4>Papers and documents to remember</h4>
                        <p>The credit card, cash. There are machine tellers in Marrakech, Ouarzazate and Azilal.</p>
                        <ul>
                            <li>Passport-Airline tickets</li>
                            <li>Driving licence-Photocopies of all official papers (passport, drivering licence, airline
                                ticket).</li>
                            <li>The phone numbers of your insurance / assistance / repatriation</li>
                            <li>One or two photographs (in case).</li>
                        </ul>
                        <h4>Accommodation</h4>
                        <p>We know that hotels aren’t the main reason for travelling. But it happens that good
                            accommodation
                            can enhance your overall tour experience – and great accommodations can contribute to a
                            great
                            trip. So we select those hotels that we believe are the best for a particular trip and
                            experience – those that will offer our guests the best combination of quality, value, and
                            atmosphere for each destination. We suggest small authentic Riads in Marrakech and different
                            hotel categories according to your wishes.</p>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
</x-clientLayout>