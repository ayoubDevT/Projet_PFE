<x-clientLayout>

<body>
    <div class="itlabspro-container-about">
        <x-menu />
        <div>
            <div id="demo-about"
                style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;">
                <div class="itlabspro-position-about">
                    <div class="demo-inner-about">
                        <h1 class="text-uppercase" id="about">{{ $sub->name }}</h1>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="about">
        <div class="itlabspro-center">
            <div class="row">
                <div class="col-sm-12 py-5" style="text-align: left;">
                    {!! $page->body !!}
                </div>
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
                            <p class="ml-5 trip-price">$ {{ $trip->price }}</p>
                        </div>
                        <div class="col-8 ">
                            <button id="more" onclick="location.href = '{{ route('client.trip', ['id'=>$trip->id]) }}';">Read more ></button>
                        </div>

                    </div>
                </div>
                @endforeach
                
                
            </div>
        </div>
    </div>

    <x-footer />
</x-clientLayout>
