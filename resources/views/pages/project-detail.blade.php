<x-main>
    <x-navbar/>
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>{{ $project['name'] }}</h2>
                        <p>{{ $project['uri'] }}</p>

                        <button class='glowing-btn'>
                            <a href="{{ route('contact') }}" class="cta-btn"
                                style="background: #2cbc85; box-shadow: 0 0 2rem #2cbc85;"><span
                                    class='faulty-letter'>C</span>o<span class='faulty-letter'>n</span>tac<span
                                    class='faulty-letter'>t</span> m<span class='faulty-letter'>e</span></a>
                        </button>

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= Gallery Single Section ======= -->
        <section id="gallery-single" class="gallery-single">
            <div class="container">
                <div class="row justify-content-between gy-4 mt-4">

                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            *per visualizzare questo e/o altri miei progetti, esplorate il mio Github.         <a href="https://github.com/EmanuelePasquale?tab=repositories" class="github"><i class="bi bi-github"></i></i></a>


                            <h5 style="color:#2cbc85;">Descrizione del Progetto:</h5>

                            <p>{{ $project['descrizione-progetto'] }}</p>

                            <h5 style="color:#2cbc85;">Caratteristiche Principali:</h5>

                            <h6 class="text-warning">Registrazione e Login:</h6>
                            <p>{{ $project['caratteristica_1'] }}</p>

                            <h6 class="text-warning">Ricerca Avanzata:</h6>
                            <p>{{ $project['caratteristica_2'] }}</p>

                            <h6 class="text-warning">Design Accattivante:</h6>
                            <p>{{ $project['caratteristica_3'] }}</p>

                            <h6 class="text-warning">Invio di Contatti:</h6>
                            <p>{{ $project['caratteristica_4'] }}</p>

                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    La vostra capacità di coniugare creatività e funzionalità ha prodotto un risultato
                                    eccezionale. La navigazione fluida, il design accattivante e le innovative
                                    funzionalità dimostrano un impegno straordinario verso l'eccellenza.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <div>
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>

                            <h5 style="color:#2cbc85;">Tecnologie Utilizzate:</h5>

                            <h6 class="text-warning">Front-End:</h6>
                            <p>{{ $project['tecnologia_1'] }}</p>

                            <h6 class="text-warning">Interattività:</h6>
                            <p>{{ $project['tecnologia_2'] }}</p>

                            <h6 class="text-warning">Database:</h6>
                            <p>{{ $project['tecnologia_3'] }}</p>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>{{ $project['name'] }}</h3>
                            <ul>
                                <li><strong>Tipo</strong> <span>{{ $project['tipo'] }}</span></li>
                                <li><strong>Linguaggi/Framework/Librerie</strong>
                                    <span>{{ $project['Linguaggi/Framework/Librerie'] }}</span>
                                </li>
                                <li><strong>Database</strong> <span>{{ $project['Database'] }}</span></li>
                                <li><strong>Descrizione</strong> <span>{{ $project['descrizione'] }}</span>
                                </li>
                                <li><a href="{{ route('homepage') }}" class="btn-visit align-self-start">Visit
                                        Website</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Single Section -->

    </main><!-- End #main -->
    {{-- <!-- ======= Gallery All projects ======= -->
    <section id="gallery-single" class="gallery-single d-flex flex-column">
        <hr>
        <div class="container">
            <div class="position-relative h-100">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gallery\Project_2\Fluid_2.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gallery\Project_2\Fluid_3.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gallery\Project_2\Fluid_4.png') }}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('assets\img\gallery\Project_2\Fluid_5.png') }}" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </section> --}}
    <x-footer/>
</x-main>
