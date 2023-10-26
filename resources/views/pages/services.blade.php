<x-main>
    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= Page Header ======= -->
        <div class="page-header d-flex align-items-center">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Services</h2>
                <p>"Benvenuti nella pagina dedicata ai servizi."</p>

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

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
          <div class="container">

            <div class="row gy-4">
                @foreach ($services as $service)
              <div class="col-xl-4 col-md-6 d-flex">
                <div class="service-item position-relative rounded">
                  <div class="flex-nowrap ">
                  <i class="bi bi-code-slash"></i>
                  <h3><a href=" {{ route('service-detail', ['uri' => $service['uri']]) }}" class="stretched-link">{{$service['name']}}</a></h3>
                  </div>
                  <p>{{$service['descrizione']}}</p>
                  <h4>{{$service['costo']}}€</h4>
                  <h5>{{$service['tempo_di_realizzazione']}}</h5>
                </div>
              </div>
              @endforeach
            </div>

          </div>
        </section><!-- End Services Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
          <div class="container">

            <div class="section-header">
              <h2>Prices</h2>
              <p>My pricing</p>
            </div>

            <div class="row gy-4 gx-lg-5">
                @foreach ($services as $detail)
              <div class="col-lg-6">
                <div class="pricing-item d-flex justify-content-between">
                  <h3>{{$detail['name']}}</h3>
                  <h4>a partire da {{$detail['costo']}}€</h4>
                </div>
              </div>
              @endforeach<!-- End Pricing Item -->

              <!-- End Pricing Item -->

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
          <div class="container">

            <div class="section-header">
              <h2>Testimonials</h2>
              <p>What they are saying</p>
            </div>

            <div class="slides-3 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        "Ho assunto Emanuele per un progetto web complesso e sono rimasto incredibilmente impressionato dal suo livello di competenza. Ha dimostrato una conoscenza approfondita di tutti gli aspetti dello sviluppo web, dall'interfaccia utente al back-end. Il risultato finale ha superato di gran lunga le mie aspettative. Grazie mille per il tuo straordinario lavoro!"
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets\img\testimonials\testimonials-1.jfif" class="testimonial-img" alt="">
                      <h3>Davide Cariola</h3>
                      <h4>Coding Teacher "Aulab srl"</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        "Sono rimasto senza parole dal talento di Emanuele. Ha trasformato la mia visione in un sito web funzionale e accattivante. È stato paziente nel rispondere a tutte le mie domande e si è assicurato che il sito fosse esattamente come lo volevo. Non vedo l'ora di collaborare nuovamente in futuro."
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets\img\testimonials\testimonials-2.jfif" class="testimonial-img" alt="">
                      <h3>Mattia Marino</h3>
                      <h4>Ceo &amp; Founder - Javascript Teacher</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        "Se state cercando un Full Stack Developer competente e professionale, Emanuele è la scelta perfetta. Ha completato il nostro progetto in modo tempestivo e ha superato tutte le sfide tecniche che abbiamo incontrato lungo il percorso. È stato un piacere lavorare con lui e lo consiglio vivamente a chiunque abbia bisogno di servizi di sviluppo web di alta qualità."
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets\img\testimonials\testimonials-3.jfif" class="testimonial-img" alt="">
                      <h3>Francesco Mansi</h3>
                      <h4>PHP/Laravel (Back-end) Teacher</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        "Non avrei potuto chiedere di più da Emanuele. La sua abilità nel combinare design e funzionalità è eccezionale. Il mio sito web ora ha un aspetto incredibile e funziona alla perfezione su tutte le piattaforme. È stato disponibile per risolvere i problemi e apportare modifiche quando necessario. Lo consiglio senza riserve!"
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets\img\testimonials\testimonials-4.jfif" class="testimonial-img" alt="">
                      <h3>Antonio Buttiglione</h3>
                      <h4>HTML/CSS/UI/UX Teacher - Freelancer</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                        "Sono rimasto estremamente soddisfatto del lavoro di Emanuele. È un vero professionista con una vasta conoscenza dei linguaggi di programmazione e dei framework. Ha reso il processo di sviluppo del mio sito web un'esperienza senza stress ed è stato sempre pronto a ascoltare le mie idee. Grazie a lui, ora ho un sito web di cui sono fiero!"
                    </p>
                    <div class="profile mt-auto">
                      <img src="assets\img\testimonials\testimonials-5.jfif" class="testimonial-img" alt="">
                      <h3>Leonardo Loddo</h3>
                      <h4>Js teacher - Consulente informatico</h4>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section><!-- End Testimonials Section -->

      </main><!-- End #main -->

</x-main>
