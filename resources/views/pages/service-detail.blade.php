<x-main>
    <x-navbar/>
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>{{ $service['name'] }}</h2>
                        <p>{{ $service['uri'] }}</p>

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
                            <h2 style="color:#2cbc85;">Descrizione:</h2>
                            <p>
                                {{$service['descrizione_dettaglio1']}}
                            </p>
                            <h4 style="color:#2cbc85;"> Cosa Offro:</h4>
                            <h5 class="text-warning">   Esperienza in Progetti Reali:</h5>
                            <p>
                                {{$service['descrizione_dettaglio2']}}
                            </p>
                            <h5 class="text-warning">   Il Mio Corso di Formazione:</h5>
                            <p>
                                {{$service['descrizione_dettaglio3']}}
                            </p>
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    {{$service['t-reference']}}
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <div>
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>{{$service['t-name']}}</h3>
                                    <h4>{{$service['t-position']}}</h4>
                                </div>
                            </div>
                            <h5 class="text-warning">   Supporto e Consulenza:</h5>
                            <p>
                                {{$service['descrizione_dettaglio4']}}
                            </p>
                            <h5 class="text-warning">   Perché Scegliere Me:</h5>
                            <p>
                                {{$service['descrizione_dettaglio5']}}
                            </p>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <h3>{{ $service['name'] }}</h3>
                            <ul>
                                <li><strong>Nome</strong> <span>{{ $service['name'] }}</span></li>
                                <li><strong>Costo</strong> <span>{{ $service['costo'] }}€</span></li>
                                <li><strong>Tempo di realizzazione</strong>
                                    <span>{{ $service['tempo_di_realizzazione'] }}</span></li>
                                <li><strong>Descrizione</strong> <span>{{ $service['descrizione'] }}</span></li>
                                <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Single Section -->

    </main><!-- End #main -->
    <x-footer/>
</x-main>
