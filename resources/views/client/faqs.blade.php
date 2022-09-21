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
                        {!! $page->body !!}
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
</x-clientLayout>