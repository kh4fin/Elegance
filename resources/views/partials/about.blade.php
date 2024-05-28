
        <section class="section about" id="about" aria-label="about">
            @foreach ($about as $item)
                
            <div class="container">
                <div
                    class="about-banner img-holder"
                    style="--width: 720; --height: 960"
                >
                    <img
                        src="{{ asset('storage/' . $item->image) }}"
                        width="720"
                        height="960"
                        loading="lazy"
                        alt="{{ $item->companny_name }}"
                        class="img-cover"
                    />

                </div>

                <div class="about-content">
                    <h2 class="h2 section-title">{{ $item->title }}</h2>

                    <p class="section-text">
                        {!! $item->description !!}
                    </p>
                </div>
            </div>

            @endforeach

        </section>

