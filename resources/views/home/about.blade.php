@extends('layout.frontend.main', [
    'title' => 'Tentang | ',
])

@push('head')
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="GuraTint" />
    <meta property="og:title" content="Guratint | Teman Bertinta" />
    <meta property="og:description"
        content="Solusi untuk membantu anda dalam berkreasi dalam bidang digital printing, uv printing, dan persoalan tentang printing. Bergabung bersama kami menjadi teman bertinta." />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{ asset('storage/logo/header.jpg') }}">
    <meta property="og:image:width" content="526">
    <meta property="og:image:height" content="275">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary">
@endpush

@section('container')
    <div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="https://source.unsplash.com/random/1600x900/?uv-printing" alt="Image" />
                </div>
            </div>

            <div class="ph-caption max-width-1000">
                <div class="ph-caption-subtitle">
                    <div class="ph-appear">Tentang Kami</div>
                </div>
                <h1 class="ph-caption-title">
                    <div class="ph-appear">Guratint</div>
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">Guratint</div>
                </div>
            </div>

        </div>

        <div class="tt-scroll-down">
            <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                <div class="tt-sd-arrow">
                    <div class="tt-sd-arrow-inner"></div>
                </div>
                <div class="tt-sd-text">Scroll</div>
            </a>
        </div>
    </div>

    <div id="page-content">
        <div class="tt-section">
            <div class="tt-section-inner tt-wrap">
                <div class="tt-row">
                    <div class="tt-col-lg-9">
                        <div class="text-xlg anim-fadeinup">
                            <div class="tt-heading tt-heading-lg margin-bottom-60">
                                <!-- <h3 class="tt-heading-subtitle">Subtitle</h3> -->
                                <h2 class="tt-heading-title">Guratint - Teman Bertinta</h2>
                                <!-- You can use <br> to break a text line if needed -->
                            </div>
                            <!-- End tt-Heading -->

                            <p>
                                Kami adalah perusahaan yang bergerak di bidang jasa <del>percintaan</del> percetakan.
                                Tentunya
                                dengan
                                mengutamakan layanan dan kualitas terbaik.
                            </p>

                            <p>

                                Layanan utama kami adalah Print UV dengan jumlah produksi semaunya, satuan ataupun ribuan
                                bahkan jutaan order dalam 1 kali order. Tentu dengan harga yang berteman dengan kebutuhan
                                anda.

                            </p>
                            <p>
                                Jangan sungkan untuk berdiskusi dengan kami untuk segala kebutuhan percetakan anda
                            </p>
                        </div>
                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-3"></div>
                    <!-- /.tt-col -->
                </div>
                <!-- /.tt-row -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <div class="tt-section">
            <div class="tt-section-inner">

                <div class="tt-content-carousel cursor-drag cc-scale-down cc-hide-pagination cc-pagination-outside cc-hide-navigation"
                    data-loop="true" data-simulate-touch="true" data-speed="900">
                    <!-- Begin swiper container -->
                    <div class="swiper">
                        <!-- Begin swiper wrapper (required) -->
                        <div class="swiper-wrapper">

                            @foreach ($portos as $porto)
                                <div class="swiper-slide">
                                    <div class="tt-content-carousel-item">
                                        <figure>
                                            <img class="tt-cc-image swiper-lazy"
                                                src="{{ asset('storage/' . $porto->thumbnail) }}"
                                                data-src="{{ asset('storage/' . $porto->thumbnail) }}" alt="Image" />
                                            {{-- <figcaption>{{ $porto->nama }}</figcaption> --}}
                                        </figure>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="tt-cc-nav-prev">
                        <div class="tt-cc-nav-arrow magnetic-item">
                            <i class="tt-arrow-left"></i>
                        </div>
                    </div>
                    <div class="tt-cc-nav-next">
                        <div class="tt-cc-nav-arrow magnetic-item">
                            <i class="tt-arrow-right"></i>
                        </div>
                    </div>

                    <!-- Content carousel pagination -->
                    <div class="tt-cc-pagination hide-cursor"></div>
                </div>
                <!-- End content carousel -->
            </div>
            <!-- /.tt-section-inner -->
        </div>


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">
                <div class="tt-row padding-bottom-2-p">
                    <div class="tt-col-lg-7">

                        <div class="tt-heading tt-heading-xlg anim-fadeinup">
                            <h3 class="tt-heading-subtitle">Teman Bertinta</h3>
                            <h2 class="tt-heading-title">Kelebihan Kami</h2>
                            <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <!-- End tt-Heading -->
                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-5 tt-align-self-center">

                        <div class="anim-fadeinup">
                            <h5>
                                When passion, courage, and craftsmanship are put into
                                something, positive things will happen.
                            </h5>
                        </div>

                        <div class="text-gray anim-fadeinup">
                            <p>
                                Their could can widen ten she any. As so we smart those
                                money in. Am wrote up whole so tears sense oh. Absolute
                                required of reserved in offering no.
                            </p>
                        </div>
                    </div>
                    <!-- /.tt-col -->
                </div>
                <!-- /.tt-row -->

                <div class="tt-accordion tt-ac-borders">
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Order Satu-an</h3>
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                            <!-- /.tt-accordion-caret-wrap -->
                        </div>
                        <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content is-open max-width-800">
                            <p>
                                Advantage old had otherwise sincerity dependent
                                additions. It in adapted natural hastily is justice.
                                Six draw you him <a href="">newspaper assurance</a>.
                            </p>
                        </div>
                        <!-- /.tt-accordion-content -->
                    </div>
                    <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Layanan Cepat</h3>
                                <!-- <div class="tt-accordion-subtext">Vivamus nisi</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                            <!-- /.tt-accordion-caret-wrap -->
                        </div>
                        <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>
                                Allow miles wound place the leave had. To sitting
                                subject no improve studied limited. Ye indulgence
                                unreserved connection alteration appearance my an
                                astonished. Up as seen sent make he they of. Her
                                raising and himself pasture believe females. Fancy
                                she stuff after aware merit small his.
                            </p>
                        </div>
                        <!-- /.tt-accordion-content -->
                    </div>
                    <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">
                                    Kualitas
                                </h3>
                                <!-- <div class="tt-accordion-subtext">Nam min proin eget</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                            <!-- /.tt-accordion-caret-wrap -->
                        </div>
                        <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>
                                Rank tall boy man them over post now. Off into she
                                bed long fat room. Recommend existence curiosity
                                perfectly favourite get eat she why daughters. Not
                                may too nay busy last song must sell. An newspaper
                                assurance discourse ye certainly. Soon gone game and
                                why many calm have.
                            </p>
                        </div>
                        <!-- /.tt-accordion-content -->
                    </div>
                    <!-- /.tt-accordion-item -->

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Konsultasi Gratis</h3>
                                <!-- <div class="tt-accordion-subtext">Condimentum sit amet</div> -->
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                            <!-- /.tt-accordion-caret-wrap -->
                        </div>
                        <!-- /.tt-accordion-heading -->
                        <div class="tt-accordion-content max-width-800">
                            <p>
                                To sure calm much most long me mean. Able rent long
                                in do we. Uncommonly no it announcing melancholy an
                                in. Mirth learn it he given. Secure shy favour
                                length all twenty denote. He felicity no an at
                                packages answered opinions juvenile.
                            </p>
                        </div>
                    </div>
                    <!-- /.tt-accordion-item -->
                </div>
                <!-- End accordion -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-100 bg-white-accent-3">
            <div class="tt-section-inner tt-wrap">
                <div class="tt-row">
                    <div class="tt-col-lg-5">

                        <div class="tt-heading tt-heading-lg margin-bottom-60 anim-fadeinup">
                            <h3 class="tt-heading-subtitle">Testimoni</h3>
                            <h2 class="tt-heading-title">
                                Dikatakan Oleh<br />
                                Teman Bertinta
                            </h2>
                            <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <!-- End tt-Heading -->
                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-lg-7 tt-align-self-center">

                        <div class="tt-testimonials-slider cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup"
                            data-loop="true" data-simulate-touch="true" data-speed="900">
                            <!-- Begin swiper container -->
                            <div class="swiper">
                                <!-- Begin swiper wrapper (required) -->
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <!-- Begin testimonials slider item -->
                                        <div class="tt-testimonials-slider-item">
                                            <div class="tt-ts-item-inner">
                                                <div class="tt-ts-text">
                                                    "One of the best template I've ever had. I
                                                    love it! It's fully customizable, well coded,
                                                    fast and responsive - fitting for all kind of
                                                    devices."
                                                </div>

                                                <div class="tt-ts-subtext">- Wironimo</div>
                                            </div>
                                        </div>
                                        <!-- End testimonials slider item -->
                                    </div>
                                    <!-- End swiper slide -->

                                </div>
                                <!-- End swiper wrapper -->
                            </div>
                            <!-- End swiper container -->

                            <!-- Begin testimonials slider navigation (arrows) -->
                            <div class="tt-ts-nav-prev">
                                <div class="tt-ts-nav-arrow magnetic-item">
                                    <i class="tt-arrow-left"></i>
                                </div>
                            </div>
                            <div class="tt-ts-nav-next">
                                <div class="tt-ts-nav-arrow magnetic-item">
                                    <i class="tt-arrow-right"></i>
                                </div>
                            </div>
                            <!-- End testimonials slider navigation -->

                            <!-- Testimonials slider pagination -->
                            <div class="tt-ts-pagination hide-cursor"></div>
                        </div>
                        <!-- End testimonials slider -->
                    </div>
                    <!-- /.tt-col -->
                </div>
                <!-- /.tt-row -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner ">

                <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-60 anim-fadeinup">
                    <!-- <h3 class="tt-heading-subtitle text-main">Subtitle</h3> -->
                    <h2 class="tt-heading-title">
                        Teman bertinta<br />
                        kami
                    </h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>
                <!-- End tt-Heading -->

                <div class="tt-content-carousel is-client cursor-drag cc-scale-down cc-pagination-outside cc-hide-navigation"
                    data-loop="true" data-simulate-touch="true" data-speed="900" data-pagination-type="progressbar">
                    <!-- Begin swiper container -->
                    <div class="swiper">
                        <!-- Begin swiper wrapper (required) -->
                        <div class="swiper-wrapper">
                            <!-- Begin swiper slide -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure>
                                        <img class="tt-cc-image-client swiper-lazy"
                                            src="https://source.unsplash.com/random/200x200/?logo,dark,1"
                                            data-src="https://source.unsplash.com/random/200x200/?logo,dark,1"
                                            alt="Image" />
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure>
                                        <img class="tt-cc-image-client swiper-lazy"
                                            src="https://source.unsplash.com/random/200x200/?logo,dark,2"
                                            data-src="https://source.unsplash.com/random/200x200/?logo,dark,2"
                                            alt="Image" />
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure>
                                        <img class="tt-cc-image-client swiper-lazy"
                                            src="https://source.unsplash.com/random/200x200/?logo,dark,3"
                                            data-src="https://source.unsplash.com/random/200x200/?logo,dark,3"
                                            alt="Image" />
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure>
                                        <img class="tt-cc-image-client swiper-lazy"
                                            src="https://source.unsplash.com/random/200x200/?logo,dark,4"
                                            data-src="https://source.unsplash.com/random/200x200/?logo,dark,4"
                                            alt="Image" />
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide -->
                            <div class="swiper-slide">
                                <div class="tt-content-carousel-item">
                                    <figure>
                                        <img class="tt-cc-image-client swiper-lazy"
                                            src="https://source.unsplash.com/random/200x200/?logo,dark,5"
                                            data-src="https://source.unsplash.com/random/200x200/?logo,dark,5"
                                            alt="Image" />
                                        <!-- <figcaption>Image Caption</figcaption> -->
                                    </figure>
                                </div>
                                <!-- /.tt-content-carousel-item -->
                            </div>
                            <!-- End swiper slide -->
                        </div>
                        <!-- End swiper wrapper -->
                    </div>
                    <!-- End swiper container -->

                    <!-- Begin content carousel navigation (arrows) -->
                    <div class="tt-cc-nav-prev">
                        <div class="tt-cc-nav-arrow magnetic-item">
                            <i class="tt-arrow-left"></i>
                        </div>
                    </div>
                    <div class="tt-cc-nav-next">
                        <div class="tt-cc-nav-arrow magnetic-item">
                            <i class="tt-arrow-right"></i>
                        </div>
                    </div>
                    <!-- End content carousel navigation -->

                    <!-- Content carousel pagination -->
                    <div class="tt-cc-pagination hide-cursor"></div>
                </div>
                <!-- End logo wall -->
            </div>
            <!-- /.tt-section-inner -->
        </div>

        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-stroke">
                    <a href="contact.html" class="tt-pn-link anim-fadeinup"
                        data-cursor="<i class='fas fa-envelope'></i>">
                        <div class="tt-pn-title">Mari Bertinta</div>
                        <div class="tt-pn-hover-title">Mari Bertinta</div>
                    </a>
                    <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
                </div>
            </div>
        </div>
    </div>
@endsection
