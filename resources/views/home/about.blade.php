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
                    <div class="tt-col-lg-3"></div>
                </div>
            </div>
        </div>


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">
                <div class="tt-row padding-bottom-2-p">
                    <div class="tt-col-lg-7">

                        <div class="tt-heading tt-heading-xlg anim-fadeinup">
                            <h3 class="tt-heading-subtitle">Kenapa Guratint</h3>
                            <h2 class="tt-heading-title">Sahabat Tinta</h2>
                            <!-- You can use <br> to break a text line if needed -->
                        </div>
                    </div>

                    <div class="tt-col-lg-5 tt-align-self-center">

                        <div class="anim-fadeinup">
                            <h5>
                                Jangan sungkan untuk berdiskusi dengan kami untuk segala kebutuhan Anda.
                            </h5>
                        </div>
                    </div>

                </div>

                <div class="tt-accordion tt-ac-borders">
                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Tanpa Minimal Order</h3>
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>

                        </div>

                        <div class="tt-accordion-content is-open max-width-800">
                            <p>
                                Hantu terseram bagi customer printing adalah "MINIMAL ORDER" !! Berbeda dengan kami,
                                GURATINT menyediakan layanan TANPA MINIMAL ORDER, order satuan kami akan kerjakan
                                dengan memberikan kualitas terbaik. Tentu dengan penyesuain harga yang berteman
                                dengan harga produksi.
                            </p>
                        </div>

                    </div>

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Kualitas Terbaik</h3>
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tt-accordion-content max-width-800">
                            <p>
                                Didukung dengan teknologi terkini seperti Print UV, DTF, DTG, Offsett hingga digital
                                printing lainnya. Kami akan memberikan kualitas terbaik sesuai dengan kebutuhan
                                anda.
                            </p>
                        </div>
                    </div>

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">
                                    Konsultasi Gratis
                                </h3>
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                        </div>

                        <div class="tt-accordion-content max-width-800">
                            <p>
                                Dengan trend yang berubah begitu cepat, anda tentu saja membutuhkan TEMAN diskusi
                                tentang eksekusi ide cemerlang anda. Jangan sungkan untuk konsultasi atau diskusi
                                untuk saling mendukung satu sama lain demi melahirkan sebuah produk atau karya yang
                                terbaik.
                            </p>
                        </div>
                    </div>

                    <div class="tt-accordion-item anim-fadeinup">
                        <div class="tt-accordion-heading">
                            <div class="tt-ac-head cursor-alter">
                                <h3 class="tt-ac-head-title">Proses Cepat</h3>
                            </div>

                            <div class="tt-accordion-caret-wrap">
                                <div class="tt-accordion-caret-inner magnetic-item">
                                    <div class="tt-accordion-caret"></div>
                                </div>
                            </div>
                        </div>

                        <div class="tt-accordion-content max-width-800">
                            <p>
                                Pesanan anda akan menjadi prioritas kami, dengan Same Day Process kami berharap bisa
                                membantu anda dalam project yang membutuhkan waktu cepat. Sangkuriang dengan
                                Tangkuban Perahu nya yang gagal meminang Dayang Sumbi, namun kami akan buktikan
                                cinta kami untuk anda dalam bentuk Same Day Process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                        </div>
                    </div>

                    <div class="tt-col-lg-7 tt-align-self-center">

                        <div class="tt-testimonials-slider cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup"
                            data-loop="true" data-simulate-touch="true" data-speed="900">
                            <div class="swiper">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide">
                                        <div class="tt-testimonials-slider-item">
                                            <div class="tt-ts-item-inner">
                                                <div class="tt-ts-text">
                                                    "Kualitas UV printing mereka luar biasa. Warna dan detailnya membuat
                                                    produk terlihat sangat profesional. Layanan pelanggan yang responsif
                                                    juga membuat pengalaman menyenangkan."
                                                </div>

                                                <div class="tt-ts-subtext">- AganGege</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tt-testimonials-slider-item">
                                            <div class="tt-ts-item-inner">
                                                <div class="tt-ts-text">
                                                    "Pilihan terbaik untuk digital printing. Hasilnya selalu melebihi
                                                    harapan kami. Teknologi UV printing mereka tahan lama. Tim yang terampil
                                                    dan kreatif."
                                                </div>

                                                <div class="tt-ts-subtext">- Edward</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="tt-testimonials-slider-item">
                                            <div class="tt-ts-item-inner">
                                                <div class="tt-ts-text">
                                                    "Pengalaman luar biasa dengan digital printing UV ini. Cepat, andal, dan
                                                    produk akhirnya mengesankan. Terima kasih kepada tim yang berdedikasi."
                                                </div>

                                                <div class="tt-ts-subtext">- Dikry</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

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

                            <div class="tt-ts-pagination hide-cursor"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner ">

                <div class="tt-heading tt-heading-lg tt-heading-center margin-bottom-60 anim-fadeinup">

                    <h2 class="tt-heading-title">
                        Teman bertinta<br />
                        kami
                    </h2>

                </div>

                <div class="tt-content-carousel is-client cursor-drag cc-scale-down cc-pagination-outside cc-hide-navigation"
                    data-loop="true" data-simulate-touch="true" data-speed="900" data-pagination-type="progressbar">

                    <div class="swiper">
                        <div class="swiper-wrapper">

                            @if ($clients)
                                @foreach ($clients as $client)
                                    <div class="swiper-slide">
                                        <div class="tt-content-carousel-item">
                                            <figure>
                                                <img class="tt-cc-image-client swiper-lazy"
                                                    src="{{ asset('storage/' . $client->logo) }}"
                                                    data-src="{{ asset('storage/' . $client->logo) }}" alt="Image" />

                                            </figure>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

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

                    <div class="tt-cc-pagination hide-cursor"></div>
                </div>
            </div>
        </div>

        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-stroke">
                    <a href="https://wa.me/+6285174173451?text=Hallo%20Admin%20GuraTint" class="tt-pn-link anim-fadeinup"
                        data-cursor="<i class='fab fa-whatsapp'></i>">
                        <div class="tt-pn-title">Mari Bertinta</div>
                        <div class="tt-pn-hover-title">Mari Bertinta</div>
                    </a>
                    <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
                </div>
            </div>
        </div>
    </div>
@endsection
