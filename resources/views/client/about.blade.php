<x-clientLayout>

    <body>
        <div class="itlabspro-container-about">
            <x-menu />
            <div>
                <div id="demo-about"
                {{ $numItems = count($images)}}
                {{ $i = 0}}
                    data-zs-src='[@foreach ($images as $image)
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
                        {!! $page->body !!}
                    </div>
                </div>

            </div>
        </div>
        <x-footer />
</x-clientLayout>