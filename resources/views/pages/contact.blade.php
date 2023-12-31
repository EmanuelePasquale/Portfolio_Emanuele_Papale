<x-main>
    <x-navbar/>

    <main id="main" data-aos="fade" data-aos-delay="1500">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <!-- ======= End Page Header ======= -->
        <div class="page-header d-flex align-items-center">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Contact</h2>
                        <p>"Se hai domande, suggerimenti o vuoi semplicemente condividere una tazza di caffè virtuale
                            per discutere di progetti entusiasmanti, non esitare a contattarmi. Sono sempre pronto per
                            nuove sfide!"</p>

                    </div>
                </div>
            </div>
        </div><!-- End Page Header -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Bellona (CE), Italy</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>emanuelep.papale@gmail.com</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-lg-3">
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+39 320 791 3190</p>
                            </div>
                        </div>
                    </div><!-- End Info Item -->

                </div>

                <div class="row justify-content-center mt-4">

                    <div class="col-lg-9">

                        <form action="{{route('send')}}" method="POST" role="form" class="php-email-form">
                            @method('POST')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control"  name="email" value="{{old('email')}}" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" value="{{old('subject')}}" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{old('message')}}</textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Il tuo messaggio è stato inviato. Grazie!</div>
                            </div>
                            <div class="text-center"><button type="submit"
                                    style="background: #3566f8; box-shadow: 0 0 2rem #3566f8;">Send Message</button>
                            </div>
                        </form>

                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->
        <x-footer/>
    </main>

</x-main>
