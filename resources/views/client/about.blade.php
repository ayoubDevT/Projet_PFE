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
                        {!!  $page->body_en == null ? 'no content in english for this page' : $page->body_en !!}
                    </div>
                </div>

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
                            <h1 id="about">Über uns</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">

                <div class="row">
                    <div class="col-sm-12" style="text-align: left;">
                        {!!  $page->body_de == null ? 'kein Inhalt auf Deutsch für diese Seite' : $page->body_de !!}
                    </div>
                </div>

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
                            <h1 id="about">A propos</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">

                <div class="row">
                    <div class="col-sm-12" style="text-align: left;">
                        {!!  $page->body_fr == null ? 'pas de contenu en francais pour cette page' : $page->body_fr !!}
                    </div>
                </div>

            </div>
        </div>
        @endif

        <x-footer />
</x-clientLayout>