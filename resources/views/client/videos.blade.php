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
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/5l1XEGXFsvc"
                            title="Authentic Morocco Holidays : Morocco Vacations -Private Tour‎" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h5>Authentic Morocco Holidays : Morocco Vacations
                            -Private Tour‎ </h5>
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/VZjIZHn3GGk"
                            title="Unforgettable Trips to Desert , day trips from Marrakech to  Sahara desert , merzouga an erg Chegaga"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h5>Trips to Desert , day trips from Marrakech to
                            Sahara desert </h5>
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/LCYEsOAsdV0"
                            title="highlights on our Morocco school tours include a Marrakech city" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h5>highlights on our Morocco school tours include a
                            Marrakech city </h5>
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/H6ptbcnLR1E"
                            title="High Atlas Hiking and trekking / Randonnée dans le haut atlas" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h5>TOUR OF ESSAOUIRA MOROCCO, TOUR D&#8217;ESSAOUIRA
                            MAROC</h5>
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/zlOVg0FWkfU"
                            title="Voyage à ski de randonnée  Maroc" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h5>High Atlas Hiking and trekking </h5><br />
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/8kObhX34CC4"
                            title="Tourisme équitable, écotourisme et tourisme solidaire" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                        <h5>Adventure Morocco</h5>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
</x-clientLayout>