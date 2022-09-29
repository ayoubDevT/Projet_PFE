<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            @if (Session::get('lang') == 'en')
            <div>
                <div id="demo-about"
                    style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;background-position: center;">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 class="text-uppercase" id="about">{{ $page->name_en }}</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        {!!  $page->body_en == null ? 'no content in english for this page' : $page->body_en !!}
                    </div>
                </div>
            </div>
        </div>
            @endif

            @if (Session::get('lang') == 'de')
            <div>
                <div id="demo-about"
                    style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;background-position: center;">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 class="text-uppercase" id="about">HÄUFIG GESTELLTE FRAGEN</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        {!!  $page->body_de == null ? 'kein Inhalt auf Deutsch für diese Seite' : $page->body_de !!}
                    </div>
                </div>
            </div>
        </div>
            @endif

            @if (Session::get('lang') == 'fr')
            <div>
                <div id="demo-about"
                    style="background-image: url('{{ asset(is_null($image) ? 'storage/': 'storage/' . $image->path) }}'); background-size: cover;background-position: center;">
                    <div class="itlabspro-position-about">
                        <div class="demo-inner-about">
                            <h1 class="text-uppercase" id="about">questions-réponses</h1>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="about">
            <div class="itlabspro-center">
                <div class="row">
                    <div class="col-sm-12 py-5" style="text-align: left;">
                        {!!  $page->body_fr == null ? 'pas de contenu en francais pour cette page' : $page->body_fr !!}
                    </div>
                </div>
            </div>
        </div>
            @endif

            
        <x-footer />
</x-clientLayout>