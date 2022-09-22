<div class="itlabspro-bar">
    <div class="itlabspro-top">
        <div class="row">
            <div class="col-3 pt-2">
                <a href="{{ route('client.home') }}"><img src="{{ asset('assets/clientsite/images/logo.png') }}" alt="" class="logo"></a>
            </div>
            <div class="col-9 " style="margin-left: auto; ">
                <div class="row">
                    <div class="col-12 d-inline-flex " style=" padding-left: 150px;">
                        <p><i class="fas fa-language"></i></p>
                        <p class="px-3"><a class="{{ Session::get('lang')=='de'? 'itlabspro-active':'' }}" href="{{ route('client.homeLang', ['lang'=>'de']) }}" style="font-weight: bolder;">DE</a>
                            -
                            <a class="{{ Session::get('lang')=='en'? 'itlabspro-active':'' }}" href="{{ route('client.homeLang', ['lang'=>'en']) }}" style="font-weight: bolder;">EN</a>
                            -
                            <a class="{{ Session::get('lang')=='fr'? 'itlabspro-active':'' }}" href="{{ route('client.homeLang', ['lang'=>'fr']) }}" style="font-weight: bolder;">FR</a>
                            
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
                                <a class="{{ (request()->is('/')) ? 'itlabspro-active' : ((request()->is('language*')) ? 'itlabspro-active' : '') }}"
                                    href="{{ route('client.homeLang', ['lang'=>Session::get('lang')]) }}">
                                    HOME
                                </a>
                            </li>
                            <li class="px-2">
                                <a class="{{ (request()->is(Session::get('lang').'/about')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.about', ['lang'=>Session::get('lang')]) }}">
                                    ABOUT US
                                </a>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">CULTURAL
                                        ENCOUNTERS</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        @foreach ($categoriesPage as $categoryPage)
                                        @if ($categoryPage->category->name == 'Cultural Encounters')
                                        <a href="{{ route('client.tripsCat', ['slug' => $categoryPage->slug, 'lang'=>Session::get('lang')]) }}" class="dropdown-item  text-uppercase {{ request()->is(Session::get('lang').'/trips/'.$categoryPage->slug)  ? 'itlabspro-active' : '' }}">{{ $categoryPage->name_en }}</a>
                                        @endif
                  
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">TREKS &
                                        ADVENTURES</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        @foreach ($categoriesPage as $categoryPage)
                                        @if ($categoryPage->category->name == 'Treks & Adventures')
                                        <a href="{{ route('client.tripsCat', ['slug' => $categoryPage->slug, 'lang'=>Session::get('lang')]) }}" class="dropdown-item  text-uppercase {{ request()->is(Session::get('lang').'/trips/'.$categoryPage->slug)  ? 'itlabspro-active' : '' }}">{{ $categoryPage->name_en }}</a>
                                        @endif
                  
                                        @endforeach

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">LUXURY &
                                        MICE</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        @foreach ($categoriesPage as $categoryPage)
                                        @if ($categoryPage->category->name == 'Luxury & MICE')
                                        <a href="{{ route('client.tripsCat', ['slug' => $categoryPage->slug, 'lang'=>Session::get('lang')]) }}" class="dropdown-item  text-uppercase {{ request()->is(Session::get('lang').'/trips/'.$categoryPage->slug)  ? 'itlabspro-active' : '' }}">{{ $categoryPage->name_en }}</a>
                                        @endif
                  
                                        @endforeach

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#" class=" dropdown-toggle " data-toggle="dropdown">WELLNESS</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        @foreach ($categoriesPage as $categoryPage)
                                        @if ($categoryPage->category->name == 'Wellness')
                                        <a href="{{ route('client.tripsCat', ['slug' => $categoryPage->slug, 'lang'=>Session::get('lang')]) }}" class="dropdown-item  text-uppercase {{ request()->is(Session::get('lang').'/trips/'.$categoryPage->slug)  ? 'itlabspro-active' : '' }}">{{ $categoryPage->name_en }}</a>
                                        @endif
                  
                                        @endforeach
                                    </div>
                                </div>
                            </li>

                            <li class="px-2">
                                <a class="{{ (request()->is(Session::get('lang').'/our_social_projects')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.osp', ['lang'=>Session::get('lang')]) }}">
                                    OUR SOCIAL PROJECTS
                                </a>
                            </li>
                            <li class="px-2">
                                <div class="nav-item dropdown">
                                    <a href="#"
                                        class=" dropdown-toggle {{ (request()->is(Session::get('lang').'/prepare_your_travel_to_morocco'))||(request()->is(Session::get('lang').'/general_advices'))||(request()->is(Session::get('lang').'/faqs'))||(request()->is(Session::get('lang').'/videos')) ? 'itlabspro-active' : '' }}"
                                        data-toggle="dropdown">MORE</a>
                                    <div class="dropdown-menu border-0 rounded-0 m-0">
                                        <a href="{{ route('client.prepareTravel', ['lang'=>Session::get('lang')]) }}"
                                            class="dropdown-item  {{ (request()->is(Session::get('lang').'/prepare_your_travel_to_morocco')) ? 'itlabspro-active' : '' }}">PREPARE
                                            YOUR TRAVEL TO
                                            MOROCCO</a>
                                        <a href="{{ route('client.general_a', ['lang'=>Session::get('lang')]) }}"
                                            class="dropdown-item  text-uppercase {{ (request()->is(Session::get('lang').'/general_advices')) ? 'itlabspro-active' : '' }}">GENERAL
                                            ADVICES</a>
                                        <a href="{{ route('client.faqs', ['lang'=>Session::get('lang')]) }}"
                                            class="dropdown-item  text-uppercase {{ (request()->is(Session::get('lang').'/faqs')) ? 'itlabspro-active' : '' }}">FAQS</a>
                                        <a href="{{ route('client.videos', ['lang'=>Session::get('lang')]) }}"
                                            class="dropdown-item  text-uppercase {{ (request()->is(Session::get('lang').'/videos')) ? 'itlabspro-active' : '' }}">VIDEOS</a>

                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <a class="{{ (request()->is(Session::get('lang').'/contact')) ? 'itlabspro-active' : '' }}"
                                    href="{{ route('client.contact', ['lang'=>Session::get('lang')]) }}">
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