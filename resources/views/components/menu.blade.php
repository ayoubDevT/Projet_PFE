<div class="itlabspro-bar">
    <div class="itlabspro-top">
        <div class="row">
            <div class="col-3 pt-2">
                <img src="{{ asset('assets/clientsite/images/logo.png') }}" alt="" class="logo">
            </div>
            <div class="col-9 " style="margin-left: auto; ">
                <div class="row">
                    <div class="col-12 d-inline-flex " style=" padding-left: 150px;">
                        <p><i class="fas fa-language"></i></p>
                        <p class="px-3"><a href="" style="font-weight: bolder;">DE</a>
                            -
                            <a class="itlabspro-active" href="" style="font-weight: bolder;">EN</a>
                            -
                            <a href="" style="font-weight: bolder;">FR</a>
                        </p>

                        <p class="px-3"><i class="far fa-envelope"></i>
                            <a href="mailto:contact@atlas-outdoor.com">contact@atlas-outdoor.com</a>
                        </p>
                        <p class="px-3"><i class="fas fa-mobile-alt"></i>
                            <a href="tel:06 66 91 45 65">+212(0) 6 66 91 45 65</a>
                        </p>
                        <p class="px-3"><i class="fas fa-phone-alt"></i>
                            <a href="tel:05 24 42 29 48">+212(0)5 24 42 29 48</a>
                        </p>
                        <a href="https://www.facebook.com/Atlas.Outdoor.morocco/"><img class="icon"
                                src="{{ asset('assets/clientsite/images/facebook-logo.png') }}" alt=""></a>
                        <a href="https://www.twitter.com/atlaoutdoor"><img class="icon"
                                src="{{ asset('assets/clientsite/images/twitter.png') }}" alt=""></a>
                        <a href="https://www.instagram.com/atlasoutdoor_morocco/"><img class=" instagram"
                                src="{{ asset('assets/clientsite/images/instagram.png') }}" alt=""></a>
                        <a href="https://www.youtube.com/c/AtlasoutdoorMorocco"><img class="icon"
                                src="{{ asset('assets/clientsite/images/youtube.png') }}" alt=""></a>

                        <!--<a href=""  style="width: 10px; height: 10px;" class="px-2 m"><p class=" cercle" style="background: #3D52A6;"><i class="fas fa-hotel"></i></p></a>
                                <a href=""  style="width: 10px; height: 10px;" class="px-2 m"><p class=" cercle" style="background: #58B1F7;"><i class="fas fa-phone-alt"></i></p></a>
                                <a href=""  style="width: 10px; height: 10px;" class="px-2 m"><p class=" cercle" style="background: #DF669E;"><i class="fas fa-phone-alt"></i></p></a>
                                <a href=""  style="width: 10px; height: 10px;" class="px-2 m"><p class=" cercle" style="background: #F44350;"><i class="fas fa-phone-alt"></i></p></a>
                                -->
                    </div>
                    <div class="col-12 ">
                        <ul class="d-inline-flex" style="max-width: 100%;">
                            <li class="px-2">
                                <a class="{{ (request()->is('/')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.home') }}">
                                    HOME
                                </a>
                            </li>
                            <li class="px-2">
                                <a class="{{ (request()->is('about')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.about') }}">
                                    ABOUT US
                                </a>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">CULTURAL
                                        ENCOUNTERS</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        <a href="./cultural_roundtrips.html" class="dropdown-item  ">CULTURAL
                                            ROUNDTRIPS</a>
                                        <a href="./self_drive_trips.html" class="dropdown-item  text-uppercase">SELF
                                            DRIVE TRIPS</a>

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">TREKS &
                                        ADVENTURES</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        <a href="./family_adventure.html" class="dropdown-item  ">
                                            FAMILY ADVENTURE</a>
                                        <a href="./atlas_sahara_hiking.html" class="dropdown-item  text-uppercase">ATLAS
                                            & SAHARA HIKING</a>
                                        <a href="./cycling_skiing.html" class="dropdown-item  text-uppercase">BIKING &
                                            SKIING</a>
                                        <a href="./school_trips.html" class="dropdown-item  text-uppercase">SCHOOL
                                            TRIPS</a>
                                        <a href="./solidatity_travels.html"
                                            class="dropdown-item  text-uppercase">SOLIDARITY TRAVELS</a>

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">LUXURY &
                                        MICE</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        <a href="./luxury_private_holidays.html" class="dropdown-item  ">LUXURY PRIVATE
                                            HOLIDAYS</a>
                                        <a href="./mice.html" class="dropdown-item  text-uppercase">M.I.C.E</a>
                                        <a href="./golf.html" class="dropdown-item  text-uppercase">GOLF</a>

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">WELLNESS</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        <a href="./spa_in_marrakech.html" class="dropdown-item  ">SPA IN MARRAKECH</a>
                                        <a href="./spa_in_desert.html" class="dropdown-item  text-uppercase">SPA
                                            EXPERIENCE IN THE DESERT OR IN THE MONTAINS</a>

                                        <a href="./yoga_classes_in_marrakech.html"
                                            class="dropdown-item  text-uppercase">YOGA
                                            CLASSES IN MARRAKECH</a>
                                        <a href="./yoga_escape_in_the_desert.html"
                                            class="dropdown-item  text-uppercase">YOGA
                                            ESCAPE IN THE DESERT</a>
                                        <a href="./roses_valley_hiking_with_yoga.html"
                                            class="dropdown-item  text-uppercase">ROSES VALLEY HIKING WITH YOGA
                                            SESSIONS</a>
                                        <a href="./yoga_ocean_waves.html" class="dropdown-item  text-uppercase">YOGA
                                            OCEAN WAVES</a>
                                        <a href="./meditation_breaks.html"
                                            class="dropdown-item  text-uppercase">MEDITATION BREAKS</a>
                                    </div>
                                </div>
                            </li>

                            <li class="px-2">
                                <a class="{{ (request()->is('our_social_projects')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.osp') }}">
                                    OUR SOCIAL PROJECTS
                                </a>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#"
                                        class=" dropdown-toggle {{ (request()->is('prepare_your_travel_to_morocco'))||(request()->is('general_advices'))||(request()->is('faqs'))||(request()->is('videos')) ? 'itlabspro-active' : '' }}"
                                        data-toggle="dropdown">MORE</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        <a href="{{ route('client.prepareTravel') }}"
                                            class="dropdown-item  {{ (request()->is('prepare_your_travel_to_morocco')) ? 'itlabspro-active' : '' }}">PREPARE
                                            YOUR TRAVEL TO
                                            MOROCCO</a>
                                        <a href="{{ route('client.general_a') }}"
                                            class="dropdown-item  text-uppercase {{ (request()->is('general_advices')) ? 'itlabspro-active' : '' }}">GENERAL
                                            ADVICES</a>
                                        <a href="{{ route('client.faqs') }}"
                                            class="dropdown-item  text-uppercase {{ (request()->is('faqs')) ? 'itlabspro-active' : '' }}">FAQS</a>
                                        <a href="{{ route('client.videos') }}"
                                            class="dropdown-item  text-uppercase {{ (request()->is('videos')) ? 'itlabspro-active' : '' }}">VIDEOS</a>

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <a class="{{ (request()->is('contact')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.contact') }}">
                                    CONTACT US
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>