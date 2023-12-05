<x-main>

    <main id="main" data-aos="fade" data-aos-delay="1500">
     @csrf
        <!-- ======= Page Header ======= -->
        <div class="page-header d-flex align-items-center">
          <div class="container position-relative">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-6 text-center">
                <h2>Projects</h2>
                <p>"Il mio obiettivo è creare esperienze web straordinarie, dalla progettazione all'implementazione, garantendo soluzioni tecnologicamente avanzate su misura per le tue esigenze."</p>

                <button class='glowing-btn'>
                    <a href="{{ route('contact') }}" class="cta-btn"
                        style="background: #e0a6f2; box-shadow: 0 0 2rem #e0a6f2;"><span
                            class='faulty-letter'>C</span>o<span class='faulty-letter'>n</span>tac<span
                            class='faulty-letter'>t</span> m<span class='faulty-letter'>e</span></a>
                </button>

              </div>
            </div>
          </div>
        </div><!-- End Page Header -->

        <!-- ======= Projects Section ======= -->
        <section id="projects" class="projects">
          <div class="container">

            <div class="row gy-4 d-flex justify-content-center">
                @foreach ($projects as $project)
              <div class="col-xl-3 col-md-6 d-flex border border-success rounded border-2 gy-3 mx-2" style="max-width:95%;">
                <div class="project-item position-relative">
                  <div class="flex-nowrap">
                  <h3><a href="{{ route('project-detail', ['uri' => $project['uri']]) }}" class="link">{{$project['name']}}</a></h3>
                  <hr width="100%" color="" size="5">
                </div>
                  <img class="card-img-top img-fluid" style="width:18rem;"
                   src="assets\img\gallery\{{($project['immagine']) }}" class="card-img-top" alt="{{ $project['name'] }}">
                  <div class="links d-flex align-items-center">
                    <button class="btn btn-outline-success mt-3"><a href="{{ route('project-detail', ['uri' => $project['uri']]) }}" class="align-self-start">Dettagli</a></button>
                  </div>
                  <h6 style="color:#2cbc85;">Tipo: </h6><h6>{{$project['tipo']}}</h6>
                  <h6 style="color:#2cbc85;">Linguaggi/Framework/Librerie: </h6><h6>{{$project['Linguaggi/Framework/Librerie']}}</h6>
                  <h6 style="color:#2cbc85;">Database: </h6><h6>{{$project['Database']}}</h6>
                </div>
              </div>
              @endforeach
            </div>

          </div>
        </section><!-- End Services Section -->

      </main><!-- End #main -->
</x-main>
