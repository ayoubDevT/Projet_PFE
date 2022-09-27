<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            @if (Session::get('lang') == 'en')
            <div>
                <div id="demo-about"
                    style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 class="text-uppercase" id="about">{{ $sub->name_en }}</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        {!! $page->body_en == null ? 'no content in english for this page' : $page->body_en !!}
                    </div>
                    @foreach ($trips as $trip)
                    <div class="col-4" style="width: 350px;">
                        <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}"
                            alt="Card image cap">
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
                                <button id="more"
                                    onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id, 'lang'=>Session::get('lang')]) }}';">Read
                                    more ></button>
                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        @endif

        @if (Session::get('lang') == 'de')
        <div>
            <div id="demo-about"
                style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;">
                <div class="itlabspro-position-about">
                    <div class="demo-inner-about">
                        <h1 class="text-uppercase" id="about">{{ $sub->name_de }}</h1>
                    </div>
                </div>
            </div>

        </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        {!! $page->body_de == null ? 'kein Inhalt auf Deutsch für diese Seite' : $page->body_de !!}
                    </div>
                    @foreach ($trips as $trip)
                    <div class="col-4" style="width: 350px;">
                        <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}"
                            alt="Card image cap">
                        <div class="card-body mt-4" style="text-align: left;">
                            <h6 style="color: #B6935C">{{ $trip->title_de }}</h6>
                            <p class="card-text">Overview: {{ $trip->overview_de }} </p>
                            <hr id="card">

                        </div>
                        <div class="row" class="card-bottom">
                            <div class="col-4 ">
                                <p class="ml-5 trip-price">$ {{ $trip->price }}</p>
                            </div>
                            <div class="col-8 ">
                                <button id="more"
                                    onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id, 'lang'=>Session::get('lang')]) }}';">mehr lesen ></button>
                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        @endif

        @if (Session::get('lang') == 'fr')
        <div>
            <div id="demo-about"
                style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;">
                <div class="itlabspro-position-about">
                    <div class="demo-inner-about">
                        <h1 class="text-uppercase" id="about">{{ $sub->name_fr }}</h1>
                    </div>
                </div>
            </div>

        </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        {!! $page->body_fr == null ? 'pas de contenu en francais pour cette page' : $page->body_fr !!}
                    </div>
                    @foreach ($trips as $trip)
                    <div class="col-4" style="width: 350px;">
                        <img class="card-img-top trip-img" src="{{ asset('storage/'.$trip->thumbnail ) }}"
                            alt="Card image cap">
                        <div class="card-body mt-4" style="text-align: left;">
                            <h6 style="color: #B6935C">{{ $trip->title_fr }}</h6>
                            <p class="card-text">Overview: {{ $trip->overview_fr }} </p>
                            <hr id="card">

                        </div>
                        <div class="row" class="card-bottom">
                            <div class="col-4 ">
                                <p class="ml-5 trip-price">$ {{ $trip->price }}</p>
                            </div>
                            <div class="col-8 ">
                                <button id="more"
                                    onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id, 'lang'=>Session::get('lang')]) }}';">Lire plus ></button>
                            </div>

                        </div>
                    </div>
                    @endforeach


                </div>
            </div>
        </div>
        @endif


        <x-footer />
</x-clientLayout>

