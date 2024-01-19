<x-layout>
    <Header class="pb-lg-5 bgSecondary">
        <div data-aos="zoom-out" data-aos-duration="1500"
            class="container-fluid bgHeader d-flex flex-column justify-content-center pb-lg-4 ">
            <div class="row justify-content-center bgPrimaryT">
                <div class="col-md-8 col-12 col-lg-7 d-flex justify-content-center">
                    <h1 class="title fw-semibold display-2 secondary ">Edil Mancino</h1>
                </div>
            </div>
            <div class="row justify-content-center bgPrimaryT">
                <div class="col-md-8 col-12 col-lg-7 d-flex justify-content-center">
                    <h2 class="title fs-3 fw-semibold secondary mb-lg-4">Di Mancino Vincenzo</h2>
                </div>
            </div>
            <div class="row justify-content-center bgPrimaryT">
                <div class="col-md-8 col-12 col-lg-7 d-flex justify-content-center mt-md-3">
                    <h2 class="title fs-6 fw-semibold secondary mb-lg-5 text-center">
                        "Cercare la qualità in ogni lavoro è come aggiungere un tocco di perfezione a ogni momento,
                        trasformando tutto in un'opera d'arte in continuo progresso."</h2>
                </div>
            </div>
        </div>
    </header>

    {{-- ? sezione 1 --}}

    <section class="py-5 bgSecondary" id="section1">
        <div class="container-fluid bgSecondary py-md-5">
            <div class="row justify-content-around">
                <div data-aos="fade-right" data-aos-duration="2500"
                    class="col-12  col-md-6 col-lg-5 bgStoria d-flex justify-content-center align-items-center transition1">
                    <p class="title fs-1 fw-semibold text-white mb-lg-4">Chi siamo</p>
                </div>
                <div data-aos="fade-left" data-aos-duration="2500"
                    class="title col-12 col-lg-5 col-md-6 bg-white chiSiamo d-flex align-items-center ">
                    <p class="py-3 px-lg-5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem
                        quia, ipsa ratione accusamus modi consectetur mollitia unde est facilis a, totam officiis
                        aspernatur provident voluptatem, sint dolorem similique atque! Consectetur. Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Quisquam, ipsam expedita? Qui ducimus ab quam impedit
                        commodi earum magnam quidem, voluptatibus accusamus asperiores nemo quaerat libero cupiditate
                        nulla sit doloribus!</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ? sezione 2 --}}

    <!-- Swiper -->
    <div class="swiper mySwiper" id="swiper1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

</x-layout>
