
        <section class="section about" id="about" aria-label="about">
                
            <div class="container">
                <div
                    class="about-banner img-holder"
                    style="--width: 720; --height: 960"
                >
                    <img
                        src="{{ asset('storage/' . $product->image) }}"
                        width="720"
                        height="960"
                        loading="lazy"
                        alt="{{ $product->companny_name }}"
                        class="img-cover"
                    />

                </div>

                <div class="about-content">
                    <h2 class="h2 section-title">{{ $product->title }}</h2>

                    <p class="section-text">
                        {!! $product->description !!}
                    </p>
                </div>
            </div>


        </section>

