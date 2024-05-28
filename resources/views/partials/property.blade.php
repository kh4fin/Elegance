
        <section class="section project" id="project" aria-label="project">
            <div class="container">
                <h2 class="h2 section-title">Our Recent Projects</h2>

                <p class="section-text">
                    Explore our latest projects that showcase our expertise and commitment to delivering high-quality solutions.
                </p>
                {{-- <p>Explore the wide array of products we offer, designed to meet your needs.</p> --}}

                <ul class="grid-list">
                    @foreach ($product as $item)
                        
                    <li>
                        <div class="project-card">
                            <figure
                                class="card-banner img-holder"
                                style="--width: 510; --height: 700"
                            >
                                <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    width="510"
                                    height="700"
                                    loading="lazy"
                                    alt="{{ $item->name }}"
                                    class="img-cover"
                                />
                            </figure>

                            <div class="card-content">

                                <h3 class="h3">
                                    <a href="#" class="card-title"
                                        >{{ $item->name }}</a
                                    >
                                </h3>

                                <a href="/products/{{$item->id}}" class="btn btn-primary"
                                    >View Details</a
                                >
                            </div>
                        </div>
                    </li>

                    @endforeach

                </ul>
            </div>
        </section>

