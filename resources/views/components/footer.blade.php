<div class="itlabspro-footer">
    <div class="container footer-div1">
        <div class="row">
            @if (Session::get('lang') == 'en')
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12" style="text-align: left;">
                <img src="{{ asset('assets/clientsite/images/logo-white.png') }}" class="mw-100" alt="" style="padding-bottom: 20px;">
                <p style="color: #ffffff;">Atlas Outdoor is a Moroccan travel agency based in Marrakech,
                    Adventure and cultural holidays
                    in Morocco</p>
                <div class="py-4">
                    <a href="https://www.twitter.com/atlaoutdoor" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/twitter-white.png') }}"
                            alt=""></a>
                    <a href="https://www.facebook.com/Atlas.Outdoor.morocco/" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/facebook-white.png') }}"
                            alt=""></a>
                    <a href="https://www.instagram.com/atlasoutdoor_morocco/" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/instagram-white.png') }}"
                            alt=""></a>
                    <a href="" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/pintrest.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">Support</span><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Customer Support</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Privacy & Policy</a><br><br>
                <a href="{{ route('client.contact', ['lang'=>Session::get('lang')]) }}" class="footer-a">Contact Channels</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">About Us</span><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Our Story</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Travel Blog &
                    Tips</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Working With Us</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Be Our Partner</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div3">
                <span class="footer-span">Contact Info</span><br><br>
                <a href="https://goo.gl/maps/qj52co8iPeixCNuX6" target="_blank" class="footer-a">Square Allal Ben Ahmed street
                    Villa Elabbassia N° 10, Guéliz
                    40 000 Marrakech</a><br><br>
                <a href="tel:05 24 42 29 48" class="footer-a">+212(0)5 24
                    42
                    29 48</a><br><br>
                <a href="mailto:contact@atlas-outdoor.com" class="footer-a">contact@atlas-outdoor.com</a>

            </div>
            @endif

            @if (Session::get('lang') == 'de')
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12" style="text-align: left;">
                <img src="{{ asset('assets/clientsite/images/logo-white.png') }}" class="mw-100" alt="" style="padding-bottom: 20px;">
                <p style="color: #ffffff;">Atlas Outdoor ist ein marokkanisches Reisebüro mit Sitz in Marrakech,
                    Abenteuer- und Kulturreisen
                    in Marokko</p>
                <div class="py-4">
                    <a href="https://www.twitter.com/atlaoutdoor" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/twitter-white.png') }}"
                            alt=""></a>
                    <a href="https://www.facebook.com/Atlas.Outdoor.morocco/" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/facebook-white.png') }}"
                            alt=""></a>
                    <a href="https://www.instagram.com/atlasoutdoor_morocco/" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/instagram-white.png') }}"
                            alt=""></a>
                    <a href="" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/pintrest.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">Unterstützung</span><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Kundenbetreuung</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Datenschutz & Politik</a><br><br>
                <a href="{{ route('client.contact', ['lang'=>Session::get('lang')]) }}" class="footer-a">Kontakt-Kanäle</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">Über uns</span><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Unsere Geschichte</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Reise-Blog &
                    Tipps</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Mit uns arbeiten</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Werden Sie unser Partner</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div3">
                <span class="footer-span">Kontaktinformationen</span><br><br>
                <a href="https://goo.gl/maps/qj52co8iPeixCNuX6" target="_blank" class="footer-a">Square Allal Ben Ahmed street
                    Villa Elabbassia N° 10, Guéliz
                    40 000 Marrakech</a><br><br>
                <a href="tel:05 24 42 29 48" class="footer-a">+212(0)5 24
                    42
                    29 48</a><br><br>
                <a href="mailto:contact@atlas-outdoor.com" class="footer-a">contact@atlas-outdoor.com</a>

            </div>
            @endif

            @if (Session::get('lang') == 'fr')
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12" style="text-align: left;">
                <img src="{{ asset('assets/clientsite/images/logo-white.png') }}" class="mw-100" alt="" style="padding-bottom: 20px;">
                <p style="color: #ffffff;">Atlas Outdoor est une agence de voyage marocaine basée à Marrakech,
                    Vacances d'aventure et culturelles
                    au Maroc</p>
                <div class="py-4">
                    <a href="https://www.twitter.com/atlaoutdoor" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/twitter-white.png') }}"
                            alt=""></a>
                    <a href="https://www.facebook.com/Atlas.Outdoor.morocco/" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/facebook-white.png') }}"
                            alt=""></a>
                    <a href="https://www.instagram.com/atlasoutdoor_morocco/" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/instagram-white.png') }}"
                            alt=""></a>
                    <a href="" class="px-2"><img class="footer-social" src="{{ asset('assets/clientsite/images/pintrest.png') }}" alt=""></a>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">Support</span><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Support client</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Vie privée et politique</a><br><br>
                <a href="{{ route('client.contact', ['lang'=>Session::get('lang')]) }}" class="footer-a">Canaux de contact</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div2">
                <span class="footer-span">A propos de nous</span><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Notre histoire</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Blogue de voyage et
                    Conseils</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Travail avec nous</a><br><br>
                <a href="{{ route('client.undeCon') }}" class="footer-a">Devenez notre partenaire</a>
            </div>
            <div class="col-12 col-xl-3 col-md-3 col-sm-12 col-xs-12 footer-div3">
                <span class="footer-span">Contact Info</span><br><br>
                <a href="https://goo.gl/maps/qj52co8iPeixCNuX6" target="_blank" class="footer-a">Square Allal Ben Ahmed street
                    Villa Elabbassia N° 10, Guéliz
                    40 000 Marrakech</a><br><br>
                <a href="tel:05 24 42 29 48" class="footer-a">+212(0)5 24
                    42
                    29 48</a><br><br>
                <a href="mailto:contact@atlas-outdoor.com" class="footer-a">contact@atlas-outdoor.com</a>

            </div>
            @endif
            
        </div>
        <hr id="white">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12" style="text-align: left;">
                <p style="color: #ffffff;">© 2022 Atlas outdoor All Rights Reserved</p>
            </div>
            <div class="col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12" style="text-align: right;">
                <img src="{{ asset('assets/clientsite/images/banks.png') }}" class="mw-100" alt="">
            </div>
        </div>
    </div>
</div>
