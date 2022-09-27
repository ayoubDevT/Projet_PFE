<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            @if (Session::get('lang') == 'en')
            <div>
                <div id="demo-about" {{ $numItems=count($images)}} {{ $i=0}} data-zs-src='[@foreach ($images as $image)
                    @if (++$i == $numItems)
                        "{{ asset('storage/' . $image->path) }}"
                    @else
                    "{{ asset('storage/' . $image->path) }}",
                    @endif

                    @endforeach]'
                    data-zs-overlay="dots">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 id="about">Contact Us</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="contain-contact">
                <h5 class="trip-h5">Atlas Outdoor is a travel agency approved by the Moroccan Ministry of Tourism, based
                    in
                    Marrakech</h5>
                <hr id="gold">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.7770379669046!2d-8.016916685076572!3d31.639954548393465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe9535e932ea7%3A0x645169624be72099!2sAtlas%20Outdoor%20Marrakech%3A%20Morocco%20tours-Adventure%20holidays!5e0!3m2!1sen!2sma!4v1662995394605!5m2!1sen!2sma"
                    width="100%" height="500" style="border:0;padding-top: 40px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-4">

                            <h4>Adress :</h4>
                            <p>Atlas Outdoor square Allal Ben Ahmed street villa Elabbassia N° 10, Guéliz 40 000
                                Marrakech
                                Morocco</p>


                        </div>
                        <div class="col-lg-4">
                            <h4>Telephone :</h4>
                            <p>Tel/Fax. + 212(0)5 24 42 29 48</p>
                            <p>Fax. +212(0)5 24 42 28 35</p>
                            <p>Mobile. +212(0) 6 66 91 45 65</p>
                            <p>Mobile. +212(0) 6 67 64 60 61</p>
                        </div>
                        <div class="col-lg-4">
                            <h4>Follow Us :</h4>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/facebook-logo.png') }}" alt=""></a>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/twitter.png') }}" alt=""></a>
                            <a href=""><img class=" instagram" src="{{ asset('assets/clientsite/images/instagram.png') }}" alt=""></a>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/youtube.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('client.message.store') }}" method="post">
                    @csrf
                    <h4>Send Us</h4>
                    <div class=" py-4">
                        <input class="input-contact" type="text" value="{{ old('name') }}" placeholder="Full Name *" name="name" required>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="email" value="{{ old('email') }}" placeholder="E-Mail *" name="email" required>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="text" value="{{ old('phone') }}" placeholder="Your Phone Number *" name="phone"
                            required>
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="text" value="{{ old('subject') }}" placeholder="Subject" name="subject">
                    </div>
                    <div class=" py-4">
                        <textarea style="height: 150px !important;" class="input-contact" placeholder="Message *"
                            name="message" required>{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class=" py-4">
                        <button type="submit" class="button-contact" class="btn-primary-line">Send</button>
                    </div>


                </form>
            </div>
        </div>
            @endif

            @if (Session::get('lang') == 'de')
            <div>
                <div id="demo-about" {{ $numItems=count($images)}} {{ $i=0}} data-zs-src='[@foreach ($images as $image)
                    @if (++$i == $numItems)
                        "{{ asset('storage/' . $image->path) }}"
                    @else
                    "{{ asset('storage/' . $image->path) }}",
                    @endif

                    @endforeach]'
                    data-zs-overlay="dots">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 id="about">Kontakt</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="contain-contact">
                <h5 class="trip-h5">Atlas Outdoor ist ein vom marokkanischen Ministerium für Tourismus zugelassenes Reisebüro mit Sitz
                    in
                    Marrakech</h5>
                <hr id="gold">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.7770379669046!2d-8.016916685076572!3d31.639954548393465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe9535e932ea7%3A0x645169624be72099!2sAtlas%20Outdoor%20Marrakech%3A%20Morocco%20tours-Adventure%20holidays!5e0!3m2!1sen!2sma!4v1662995394605!5m2!1sen!2sma"
                    width="100%" height="500" style="border:0;padding-top: 40px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-4">

                            <h4>Adresse :</h4>
                            <p>Atlas Outdoor square Allal Ben Ahmed street villa Elabbassia N° 10, Guéliz 40 000
                                Marrakech
                                Marokko</p>


                        </div>
                        <div class="col-lg-4">
                            <h4>Telefon :</h4>
                            <p>Tel/Fax. + 212(0)5 24 42 29 48</p>
                            <p>Fax. +212(0)5 24 42 28 35</p>
                            <p>Mobil. +212(0) 6 66 91 45 65</p>
                            <p>Mobil. +212(0) 6 67 64 60 61</p>
                        </div>
                        <div class="col-lg-4">
                            <h4>Folgen Sie uns :</h4>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/facebook-logo.png') }}" alt=""></a>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/twitter.png') }}" alt=""></a>
                            <a href=""><img class=" instagram" src="{{ asset('assets/clientsite/images/instagram.png') }}" alt=""></a>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/youtube.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('client.message.store') }}" method="post">
                    @csrf
                    <h4>Senden Sie uns</h4>
                    <div class=" py-4">
                        <input class="input-contact" type="text" value="{{ old('name') }}" placeholder="Name und Vorname *" name="name" required>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="email" value="{{ old('email') }}" placeholder="E-Mail *" name="email" required>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="text" value="{{ old('phone') }}" placeholder="Telefonnummer *" name="phone"
                            required>
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="text" value="{{ old('subject') }}" placeholder="Thema" name="subject">
                    </div>
                    <div class=" py-4">
                        <textarea style="height: 150px !important;" class="input-contact" placeholder="Nachricht *"
                            name="message" required>{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class=" py-4">
                        <button type="submit" class="button-contact" class="btn-primary-line">Senden Sie</button>
                    </div>


                </form>
            </div>
        </div>
            @endif

            @if (Session::get('lang') == 'fr')
            <div>
                <div id="demo-about" {{ $numItems=count($images)}} {{ $i=0}} data-zs-src='[@foreach ($images as $image)
                    @if (++$i == $numItems)
                        "{{ asset('storage/' . $image->path) }}"
                    @else
                    "{{ asset('storage/' . $image->path) }}",
                    @endif

                    @endforeach]'
                    data-zs-overlay="dots">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 id="about">Contacter nous</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="contain-contact">
                <h5 class="trip-h5">Atlas Outdoor est une agence de voyage agréée par le ministère marocain du tourisme, basée
                    à
                    Marrakech</h5>
                <hr id="gold">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3396.7770379669046!2d-8.016916685076572!3d31.639954548393465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafe9535e932ea7%3A0x645169624be72099!2sAtlas%20Outdoor%20Marrakech%3A%20Morocco%20tours-Adventure%20holidays!5e0!3m2!1sen!2sma!4v1662995394605!5m2!1sen!2sma"
                    width="100%" height="500" style="border:0;padding-top: 40px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="container">
                    <div class="row py-5">
                        <div class="col-lg-4">

                            <h4>Adresse :</h4>
                            <p>Atlas Outdoor square Allal Ben Ahmed street villa Elabbassia N° 10, Guéliz 40 000
                                Marrakech
                                Maroc</p>


                        </div>
                        <div class="col-lg-4">
                            <h4>Telephone :</h4>
                            <p>Tel/Fax. + 212(0)5 24 42 29 48</p>
                            <p>Fax. +212(0)5 24 42 28 35</p>
                            <p>Mobile. +212(0) 6 66 91 45 65</p>
                            <p>Mobile. +212(0) 6 67 64 60 61</p>
                        </div>
                        <div class="col-lg-4">
                            <h4>Follow Us :</h4>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/facebook-logo.png') }}" alt=""></a>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/twitter.png') }}" alt=""></a>
                            <a href=""><img class=" instagram" src="{{ asset('assets/clientsite/images/instagram.png') }}" alt=""></a>
                            <a href=""><img class="icon" src="{{ asset('assets/clientsite/images/youtube.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>

                <form action="{{ route('client.message.store') }}" method="post">
                    @csrf
                    <h4>Send Us</h4>
                    <div class=" py-4">
                        <input class="input-contact" type="text" value="{{ old('name') }}" placeholder="Nom complet *" name="name" required>
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="email" value="{{ old('email') }}" placeholder="E-Mail *" name="email" required>
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="text" value="{{ old('phone') }}" placeholder="Numero de telephone *" name="phone"
                            required>
                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="  py-4">
                        <input class="input-contact" type="text" value="{{ old('subject') }}" placeholder="Sujet" name="subject">
                    </div>
                    <div class=" py-4">
                        <textarea style="height: 150px !important;" class="input-contact" placeholder="Message *"
                            name="message" required>{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class=" py-4">
                        <button type="submit" class="button-contact" class="btn-primary-line">Envoyer</button>
                    </div>


                </form>
            </div>
        </div>
            @endif
            

        <x-footer />
</x-clientLayout>