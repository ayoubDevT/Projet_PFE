<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            @if (Session::get('lang') == 'en')
            <div>
                <div id="demo-about"
                    style="background-image: url('{{ asset('storage/'.$trip->thumbnail) }}'); background-size: cover;">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 class="text-uppercase" id="about">{{ $trip->title_en }}</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="about">
            <div class="contain-contact">
                <h5 class="trip-h5">Description</h5>
                <hr id="gold">
                <div class="container">
                    <div class="row">
                        <div class="col-12 py-5" style="text-align: left">
                            {!! $trip->content_en == null ? 'kein Inhalt auf Deutsch für diese Seite' : $trip->content_en !!}
                        </div>
                    </div>
                </div>


            </div>

            <div class="container mb-4" style="border: 1px solid #B6935C; height: fit-content;">
                <div class="row">
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->days }} days</p>
                    </div>
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->min_age }} Years+</p>
                    </div>
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M621.16 54.46C582.37 38.19 543.55 32 504.75 32c-123.17-.01-246.33 62.34-369.5 62.34-30.89 0-61.76-3.92-92.65-13.72-3.47-1.1-6.95-1.62-10.35-1.62C15.04 79 0 92.32 0 110.81v317.26c0 12.63 7.23 24.6 18.84 29.46C57.63 473.81 96.45 480 135.25 480c123.17 0 246.34-62.35 369.51-62.35 30.89 0 61.76 3.92 92.65 13.72 3.47 1.1 6.95 1.62 10.35 1.62 17.21 0 32.25-13.32 32.25-31.81V83.93c-.01-12.64-7.24-24.6-18.85-29.47zM48 132.22c20.12 5.04 41.12 7.57 62.72 8.93C104.84 170.54 79 192.69 48 192.69v-60.47zm0 285v-47.78c34.37 0 62.18 27.27 63.71 61.4-22.53-1.81-43.59-6.31-63.71-13.62zM320 352c-44.19 0-80-42.99-80-96 0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96zm272 27.78c-17.52-4.39-35.71-6.85-54.32-8.44 5.87-26.08 27.5-45.88 54.32-49.28v57.72zm0-236.11c-30.89-3.91-54.86-29.7-55.81-61.55 19.54 2.17 38.09 6.23 55.81 12.66v48.89z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->price }} $</p>
                    </div>
                    <div class="py-3 col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                        </svg>

                        <pre>
                            <p style="font-weight: 600">{{ $trip->months_en }}</p>
                        </pre>
                    </div>
                </div>
            </div>

            <form action="{{ route('client.booking.store', ['trip'=>$trip->id]) }}" method="post">
                @csrf
                <h5 class="trip-h5">Booking</h5>
                <hr id="gold">
                <div class=" py-4">
                    <input class="input-contact" type="text" placeholder="Full Name *" value="{{ old('name') }}"
                        name="name" required>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="email" placeholder="E-Mail *" value="{{ old('email') }}"
                        name="email" required>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="text" placeholder="Your Phone Number *"
                        value="{{ old('phone') }}" name="phone" required>
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="number" placeholder="Number of persons*"
                        value="{{ old('person') }}" name="person" required>
                    @error('person')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <label for="arrival" class="py-3"> Arrival date*</label><br>
                    <input class="input-contact" type="date" name="arrival" value="{{ old('arrival') }}" id="arrival"
                        required>
                    @error('arrival')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <label for="departure" class="py-3">Departure date*</label><br>
                    <input class="input-contact" type="date" name="departure" value="{{ old('departure') }}"
                        id="departure" required>
                    @error('departure')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
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
            <div id="demo-about"
                style="background-image: url('{{ asset('storage/'.$trip->thumbnail) }}'); background-size: cover;">
                <div class="itlabspro-position-about">
                    <div class="demo-inner-about">
                        <h1 class="text-uppercase" id="about">{{ $trip->title_de }}</h1>
                    </div>
                </div>
            </div>

        </div>

        </div>

        <div class="about">
            <div class="contain-contact">
                <h5 class="trip-h5">Beschreibung</h5>
                <hr id="gold">
                <div class="container">
                    <div class="row">
                        <div class="col-12 py-5" style="text-align: left">
                            {!! $trip->content_de == null ? 'kein Inhalt auf Deutsch für diese Seite' : $trip->content_de !!}
                        </div>
                    </div>
                </div>


            </div>

            <div class="container mb-4" style="border: 1px solid #B6935C; height: fit-content;">
                <div class="row">
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->days }} tage</p>
                    </div>
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->min_age }} Jahre+</p>
                    </div>
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M621.16 54.46C582.37 38.19 543.55 32 504.75 32c-123.17-.01-246.33 62.34-369.5 62.34-30.89 0-61.76-3.92-92.65-13.72-3.47-1.1-6.95-1.62-10.35-1.62C15.04 79 0 92.32 0 110.81v317.26c0 12.63 7.23 24.6 18.84 29.46C57.63 473.81 96.45 480 135.25 480c123.17 0 246.34-62.35 369.51-62.35 30.89 0 61.76 3.92 92.65 13.72 3.47 1.1 6.95 1.62 10.35 1.62 17.21 0 32.25-13.32 32.25-31.81V83.93c-.01-12.64-7.24-24.6-18.85-29.47zM48 132.22c20.12 5.04 41.12 7.57 62.72 8.93C104.84 170.54 79 192.69 48 192.69v-60.47zm0 285v-47.78c34.37 0 62.18 27.27 63.71 61.4-22.53-1.81-43.59-6.31-63.71-13.62zM320 352c-44.19 0-80-42.99-80-96 0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96zm272 27.78c-17.52-4.39-35.71-6.85-54.32-8.44 5.87-26.08 27.5-45.88 54.32-49.28v57.72zm0-236.11c-30.89-3.91-54.86-29.7-55.81-61.55 19.54 2.17 38.09 6.23 55.81 12.66v48.89z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->price }} $</p>
                    </div>
                    <div class="py-3 col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                        </svg>

                        <pre>
                            <p style="font-weight: 600">{{ $trip->months_de }}</p>
                        </pre>
                    </div>
                </div>
            </div>

            <form action="{{ route('client.booking.store', ['trip'=>$trip->id]) }}" method="post">
                @csrf
                <h5 class="trip-h5">Buchung</h5>
                <hr id="gold">
                <div class=" py-4">
                    <input class="input-contact" type="text" placeholder="Name und Vorname *" value="{{ old('name') }}"
                        name="name" required>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="email" placeholder="E-Mail *" value="{{ old('email') }}"
                        name="email" required>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="text" placeholder="Telefonnummer *"
                        value="{{ old('phone') }}" name="phone" required>
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="number" placeholder="Anzahl der Personen*"
                        value="{{ old('person') }}" name="person" required>
                    @error('person')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <label for="arrival" class="py-3"> Datum der Ankunft*</label><br>
                    <input class="input-contact" type="date" name="arrival" value="{{ old('arrival') }}" id="arrival"
                        required>
                    @error('arrival')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <label for="departure" class="py-3">Datum der Abreise*</label><br>
                    <input class="input-contact" type="date" name="departure" value="{{ old('departure') }}"
                        id="departure" required>
                    @error('departure')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
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
            <div id="demo-about"
                style="background-image: url('{{ asset('storage/'.$trip->thumbnail) }}'); background-size: cover;">
                <div class="itlabspro-position-about">
                    <div class="demo-inner-about">
                        <h1 class="text-uppercase" id="about">{{ $trip->title_fr }}</h1>
                    </div>
                </div>
            </div>

        </div>

        </div>

        <div class="about">
            <div class="contain-contact">
                <h5 class="trip-h5">Description</h5>
                <hr id="gold">
                <div class="container">
                    <div class="row">
                        <div class="col-12 py-5" style="text-align: left">
                            {!! $trip->content_fr == null ? 'kein Inhalt auf Deutsch für diese Seite' : $trip->content_fr !!}
                        </div>
                    </div>
                </div>


            </div>

            <div class="container mb-4" style="border: 1px solid #B6935C; height: fit-content;">
                <div class="row">
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->days }} jours</p>
                    </div>
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M192 256c61.9 0 112-50.1 112-112S253.9 32 192 32 80 82.1 80 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C51.6 288 0 339.6 0 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zM480 256c53 0 96-43 96-96s-43-96-96-96-96 43-96 96 43 96 96 96zm48 32h-3.8c-13.9 4.8-28.6 8-44.2 8s-30.3-3.2-44.2-8H432c-20.4 0-39.2 5.9-55.7 15.4 24.4 26.3 39.7 61.2 39.7 99.8v38.4c0 2.2-.5 4.3-.6 6.4H592c26.5 0 48-21.5 48-48 0-61.9-50.1-112-112-112z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->min_age }} annees+</p>
                    </div>
                    <div class="py-3 col-12 col-xl-2 col-md-2 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M621.16 54.46C582.37 38.19 543.55 32 504.75 32c-123.17-.01-246.33 62.34-369.5 62.34-30.89 0-61.76-3.92-92.65-13.72-3.47-1.1-6.95-1.62-10.35-1.62C15.04 79 0 92.32 0 110.81v317.26c0 12.63 7.23 24.6 18.84 29.46C57.63 473.81 96.45 480 135.25 480c123.17 0 246.34-62.35 369.51-62.35 30.89 0 61.76 3.92 92.65 13.72 3.47 1.1 6.95 1.62 10.35 1.62 17.21 0 32.25-13.32 32.25-31.81V83.93c-.01-12.64-7.24-24.6-18.85-29.47zM48 132.22c20.12 5.04 41.12 7.57 62.72 8.93C104.84 170.54 79 192.69 48 192.69v-60.47zm0 285v-47.78c34.37 0 62.18 27.27 63.71 61.4-22.53-1.81-43.59-6.31-63.71-13.62zM320 352c-44.19 0-80-42.99-80-96 0-53.02 35.82-96 80-96s80 42.98 80 96c0 53.03-35.83 96-80 96zm272 27.78c-17.52-4.39-35.71-6.85-54.32-8.44 5.87-26.08 27.5-45.88 54.32-49.28v57.72zm0-236.11c-30.89-3.91-54.86-29.7-55.81-61.55 19.54 2.17 38.09 6.23 55.81 12.66v48.89z" />
                        </svg>
                        <p style="font-weight: 600">{{ $trip->price }} $</p>
                    </div>
                    <div class="py-3 col-12 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-filter" height="40px">
                            <!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) -->
                            <path
                                d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                        </svg>

                        <pre>
                            <p style="font-weight: 600">{{ $trip->months_fr }}</p>
                        </pre>
                    </div>
                </div>
            </div>

            <form action="{{ route('client.booking.store', ['trip'=>$trip->id]) }}" method="post">
                @csrf
                <h5 class="trip-h5">Booking</h5>
                <hr id="gold">
                <div class=" py-4">
                    <input class="input-contact" type="text" placeholder="Nom Complet *" value="{{ old('name') }}"
                        name="name" required>
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="email" placeholder="E-Mail *" value="{{ old('email') }}"
                        name="email" required>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="text" placeholder="Numero de telephone *"
                        value="{{ old('phone') }}" name="phone" required>
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <input class="input-contact" type="number" placeholder="Nombre des personnes*"
                        value="{{ old('person') }}" name="person" required>
                    @error('person')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <label for="arrival" class="py-3"> Date d'arrivee*</label><br>
                    <input class="input-contact" type="date" name="arrival" value="{{ old('arrival') }}" id="arrival"
                        required>
                    @error('arrival')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="  py-4">
                    <label for="departure" class="py-3">Date de depart*</label><br>
                    <input class="input-contact" type="date" name="departure" value="{{ old('departure') }}"
                        id="departure" required>
                    @error('departure')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
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