
        <section class="section contact" id="contact" aria-label="contact">
            <div class="container">
                <h2 class="h2 section-title">Let's Contact With Us</h2>

                <p class="section-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua.
                </p>

                <form action="" class="contact-form">
                    <div class="input-wrapper">
                        <input
                            type="text"
                            name="name"
                            aria-label="name"
                            placeholder="Your name*"
                            required
                            class="input-field"
                        />

                        <input
                            type="email"
                            name="email_address"
                            aria-label="email"
                            placeholder="Email address*"
                            required
                            class="input-field"
                        />
                    </div>

                    <div class="input-wrapper">
                        <input
                            type="text"
                            name="subject"
                            aria-label="subject"
                            placeholder="Subject"
                            class="input-field"
                        />

                        <input
                            type="number"
                            name="phone"
                            aria-label="phone"
                            placeholder="Phone number"
                            class="input-field"
                        />
                    </div>

                    <textarea
                        name="message"
                        aria-label="message"
                        placeholder="Your message...*"
                        required
                        class="input-field"
                    ></textarea>

                    <div class="checkbox-wrapper">
                        <input
                            type="checkbox"
                            name="terms_and_policy"
                            id="terms"
                            required
                            class="checkbox"
                        />

                        <label for="terms" class="label">
                            Accept
                            <a href="#" class="label-link">Terms of Services</a>
                            and
                            <a href="#" class="label-link">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send Message
                    </button>
                </form>

                <ul class="contact-list">
                    @foreach ($medsos as $item)
                        
                        <li class="contact-item">
                            <div class="contact-card">
                                <div class="card-icon">
                                    <ion-icon
                                        name="logo-instagram"
                                        aria-hidden="true"
                                    ></ion-icon>
                                </div>

                                <div class="card-content">
                                    <h3 class="h3 card-title">Follow Me</h3>

                                    <a
                                        href="{{$item->instagram}}"
                                        class="card-link"
                                        >{{$item->instagram}}</a
                                    >
                                </div>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-card">
                                <div class="card-icon">
                                    <ion-icon
                                        name="mail-outline"
                                        aria-hidden="true"
                                    ></ion-icon>
                                </div>

                                <div class="card-content">
                                    <h3 class="h3 card-title">Mail Here</h3>

                                    <a
                                        href="{{$item->email}}"
                                        class="card-link"
                                        >{{$item->email}}</a
                                    >
                                </div>
                            </div>
                        </li>

                        <li class="contact-item">
                            <div class="contact-card">
                                <div class="card-icon">
                                    <ion-icon
                                        name="map-outline"
                                        aria-hidden="true"
                                    ></ion-icon>
                                </div>

                                <div class="card-content">
                                    <h3 class="h3 card-title">Visit Here</h3>

                                    <address class="card-address">
                                        {{$item->location}}
                                    </address>
                                </div>
                            </div>
                        </li>

                        <li class="contact-item">
                            <div class="contact-card">
                                <div class="card-icon">
                                    <ion-icon
                                        name="headset-outline"
                                        aria-hidden="true"
                                    ></ion-icon>
                                </div>

                                <div class="card-content">
                                    <h3 class="h3 card-title">Call Here</h3>

                                    <a href="tel:{{$item->phone_number}}" class="card-link"
                                        >{{$item->phone_number}}</a
                                    >
                                </div>
                            </div>
                        </li>
                        <li class="contact-item">
                            <div class="contact-card">
                                <div class="card-icon">
                                    <ion-icon
                                        name="logo-facebook"
                                        aria-hidden="true"
                                    ></ion-icon>
                                </div>

                                <div class="card-content">
                                    <h3 class="h3 card-title">Follow Here</h3>

                                    <a href="{{$item->facebook}}" class="card-link"
                                        >{{$item->facebook}}</a
                                    >
                                </div>
                            </div>
                        </li>
                    @endforeach
                
                </ul>
            </div>
        </section>

