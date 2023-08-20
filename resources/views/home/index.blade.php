@extends('layout.frontend.main', [
    'title' => '',
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

@push('css')
    <link rel="stylesheet" href="/assets/vendor/sweetalert2/sweetalert2.css">
@endpush

@section('container')
    <!-- Begin page header -->
    <div id="page-header" class="ph-full ph-cap-sm ph-ghost-scroll ph-image-cover ph-image-cover-4 ph-content-parallax">
        <div class="page-header-inner tt-wrap">
            <div class="bg-circle-line ph-appear"></div>

            <!-- Begin page header image -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="/assets/img/UV Print.png" alt="Image" />
                </div>
            </div>
            <!-- End page header image -->

            <!-- Begin page header caption -->
            <div class="ph-caption">
                <h1 class="ph-caption-title">
                    <div class="ph-appear">
                        TEMAN<br />
                        {{-- Bertinta <span class="hide-from-sm">→</span> --}}
                        BERTINTA
                        {{-- <em class="text-stroke-light">TINTA</em><br /> --}}
                    </div>
                    <!-- You can use <br> to break a text line if needed -->
                </h1>

                <h1 class="ph-caption-description">
                    <div class="ph-appear">Sampai Kamu Jatuh Cinta</div>
                </h1>

                <div class="custom-button-head">
                    <div class="ph-appear">
                        <a href="blog-classic.html" class="tt-btn tt-btn-dark padding-left-15 padding-right-15">
                            <div data-hover="Dimana Saja">Telurusi Kami</div>
                            <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="ph-caption-title-ghost">
                    <div class="bg-circle-blur circle-blur-custom"></div>
                </div>
            </div>
            <!-- End page header caption -->
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

        <div class="tt-section padding-top-xlg-170 padding-bottom-xlg-25">
            <div class="tt-section-inner tt-wrap max-with-1250">
                <div class="max-width-800 margin-auto">
                    <h5 class="margin-bottom-15 anim-fadeinup">
                        Kami adalah perusahaan yang bergerak di bidang jasa <del>percintaan</del> percetakan. Tentunya
                        dengan
                        mengutamakan layanan dan kualitas terbaik.
                    </h5>
                    <div class="anim-fadeinup">
                        <a href="/about-us" class="tt-btn tt-btn-dark padding-left-15 padding-right-15">
                            <div data-hover="Tentang Kami">Tentang Kami</div>
                            <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-zoom margin-bottom-150">
            <div class="wrapper-zoom">
                <div class="content-zoom" id="grow">
                    <img src="https://picsum.photos/1200/800?random=1">
                </div>
            </div>
            <div class="custom-container tt-grid ttgr-layout-3 full-width">
                <div class="tt-grid-item" id="grow-left">
                    <h2 class="tt-heading-title"><a href="#" class="tt-link"
                            data-cursor="<i class='fab fa-whatsapp'></i>">Whatsapp Saja<span>↗</span></a></h2>
                </div>
                <div class="tt-grid-item">
                    <h1 id="grow-tagline-center" class="tagline text-left">&nbsp;</h1>
                </div>
                <div class="tt-grid-item" id="grow-right">
                    {{-- <h1 id="grow-tagline-right" class="tagline text-right">Mari&nbsp;Bertinta</h1> --}}
                </div>
            </div>
        </div>

        <div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap max-width-1250">
                <div class="tt-row">
                    <div class="tt-col-xl-4">
                        <div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1600 margin-auto">
                            <h3 class="tt-heading-subtitle">Layanan Kami</h3>
                            <h2 class="tt-heading-title">Teman Bertinta</h2>
                            <div class="circle-after-title">
                                <div class="bg-circle-blur circle-blur-custom"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tt-col-xl-8">
                        <div class="anim-fadeinup padding-left-0 padding-right-0 portfolio-interactive pi-inline ">
                            <div class="pi-inner">
                                <div class="portfolio-interactive-list">
                                    @foreach ($kategori as $itemKat)
                                        <div class="portfolio-interactive-item">
                                            <figure class="pi-item-image">
                                                <div class="pi-item-image-inner">
                                                    <img src="{{ asset('storage/' . $itemKat->thumbnail) }}" alt="image">
                                                </div>
                                            </figure>

                                            <a href="/portofolio/{{ $itemKat->slug }}"
                                                class="pi-item-title-link skew-on-scroll">
                                                <div class="pi-item-title-link-inner">
                                                    <h2 class="pi-item-title">{{ $itemKat->nama }}</h2>
                                                    <div class="pi-item-hover-title">{{ $itemKat->nama }}</div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                    <!-- End portfolio interactive item -->

                                    {{-- <div class="portfolio-interactive-item">

                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <video class="pi-item-video" loop muted preload="metadata"
                                                    poster="assets/vids/fashion-shoot.jpg">
                                                    <source src="assets/vids/fashion-shoot.mp4" type="video/mp4">
                                                    <source src="assets/vids/fashion-shoot.webm" type="video/webm">
                                                </video>
                                            </div> 
                                        </figure> 

                                        <a href="single-project-3.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Card Board</h2>
                                                <div class="pi-item-hover-title">Card Board</div>
                                            </div>
                                        </a> 
                                    </div> --}}
                                </div>
                                <!-- End portfolio interactive list -->

                            </div> <!-- /.pi-inner -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tt-section-inner -->
        </div>

        <div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap max-width-1700">
                <div class="tt-row margin-left-lg-3-p margin-right-lg-3-p">
                    <div class="tt-col-xl-4">
                        <div class="tt-heading tt-heading-xlg anim-fadeinup">
                            <h3 class="tt-heading-subtitle">Kenapa Guratint</h3>
                            <h2 class="tt-heading-title">Sahabat Tinta</h2>
                            <!-- You can use <br> to break a text line if needed -->
                        </div>
                        <div class="max-width-600 margin-bottom-60 anim-fadeinup">
                            <h5>
                                Jangan sungkan untuk berdiskusi dengan kami untuk segala kebutuhan Anda.
                            </h5>
                            <a href="/contact" class="tt-btn tt-btn-dark padding-left-15 padding-right-15">
                                <div data-hover="Kontak Kami">Kontak Kami</div>
                                <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- /.tt-col -->

                    <div class="tt-col-xl-1"></div>
                    <!-- /.tt-col -->

                    <div class="tt-col-xl-7">
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
                                    <!-- /.tt-accordion-caret-wrap -->
                                </div>
                                <!-- /.tt-accordion-heading -->
                                <div class="tt-accordion-content is-open max-width-800">
                                    <p>
                                        Hantu terseram bagi customer printing adalah "MINIMAL ORDER" !! Berbeda dengan kami,
                                        GURATINT menyediakan layanan TANPA MINIMAL ORDER, order satuan kami akan kerjakan
                                        dengan memberikan kualitas terbaik. Tentu dengan penyesuain harga yang berteman
                                        dengan harga produksi.
                                    </p>
                                </div>
                                <!-- /.tt-accordion-content -->
                            </div>
                            <!-- /.tt-accordion-item -->

                            <div class="tt-accordion-item anim-fadeinup">
                                <div class="tt-accordion-heading">
                                    <div class="tt-ac-head cursor-alter">
                                        <h3 class="tt-ac-head-title">Kualitas Terbaik</h3>
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
                                        Didukung dengan teknologi terkini seperti Print UV, DTF, DTG, Offsett hingga digital
                                        printing lainnya. Kami akan memberikan kualitas terbaik sesuai dengan kebutuhan
                                        anda.
                                    </p>
                                </div>
                                <!-- /.tt-accordion-content -->
                            </div>
                            <!-- /.tt-accordion-item -->

                            <div class="tt-accordion-item anim-fadeinup">
                                <div class="tt-accordion-heading">
                                    <div class="tt-ac-head cursor-alter">
                                        <h3 class="tt-ac-head-title">
                                            Konsultasi Gratis
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
                                        Dengan trend yang berubah begitu cepat, anda tentu saja membutuhkan TEMAN diskusi
                                        tentang eksekusi ide cemerlang anda. Jangan sungkan untuk konsultasi atau diskusi
                                        untuk saling mendukung satu sama lain demi melahirkan sebuah produk atau karya yang
                                        terbaik.
                                    </p>
                                </div>
                                <!-- /.tt-accordion-content -->
                            </div>
                            <!-- /.tt-accordion-item -->

                            <div class="tt-accordion-item anim-fadeinup">
                                <div class="tt-accordion-heading">
                                    <div class="tt-ac-head cursor-alter">
                                        <h3 class="tt-ac-head-title">Proses Cepat</h3>
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
                                        Pesanan anda akan menjadi prioritas kami, dengan Same Day Process kami berharap bisa
                                        membantu anda dalam project yang membutuhkan waktu cepat. Sangkuriang dengan
                                        Tangkuban Perahu nya yang gagal meminang Dayang Sumbi, namun kami akan buktikan
                                        cinta kami untuk anda dalam bentuk Same Day Process.
                                    </p>
                                </div>
                                <!-- /.tt-accordion-content -->
                            </div>
                            <!-- /.tt-accordion-item -->
                        </div>
                        <!-- End accordion -->
                    </div>
                    <!-- /.tt-col -->
                </div>
                <!-- /.tt-row -->
            </div>
            <!-- /.tt-section-inner -->
        </div>

        <div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-heading tt-heading-xlg anim-fadeinup">
                    <h3 class="tt-heading-subtitle">Portofolio</h3>
                    <h2 class="tt-heading-title">Project Pilihan</h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>

                <div id="portfolio-grid" class="pgi-hover">
                    <div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">
                        <div class="tt-grid-items-wrap">
                            @foreach ($portos as $porto)
                                <div class="tt-grid-item">
                                    <div class="ttgr-item-inner">
                                        <div class="portfolio-grid-item">
                                            <a href="/portofolio/{{ $porto->kategori->slug }}" class="pgi-image-wrap"
                                                data-cursor="View<br>Project">
                                                <div class="pgi-image-holder cover-opacity-2">
                                                    <div class="pgi-image-inner anim-zoomin">
                                                        <figure class="pgi-image ttgr-height">
                                                            <img src="{{ asset('storage/' . $porto->thumbnail) }}"
                                                                alt="guratint project {{ $porto->nama }}" />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="pgi-caption">
                                                <div class="pgi-caption-inner">
                                                    <h2 class="pgi-title">
                                                        {{ $porto->nama }}
                                                    </h2>
                                                    <div class="pgi-categories-wrap">
                                                        <div class="pgi-category">{{ $porto->kategori->nama }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>

                </div>


                <div class="text-center anim-fadeinup">
                    <a href="/portofolio" class="tt-scrolling-btn all-works-btn" data-cursor="All<br>Works">
                        <div class="scr-btn-inner ph-appear">
                            <div class="scr-btn-icon">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="scr-btn-spinner">
                                <svg viewBox="0 0 500 500">
                                    <defs>
                                        <path
                                            d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                            id="textcircle"></path>
                                    </defs>
                                    <!-- If you change the text, you probably need to adjust the CSS so that it fits correctly. Find ".scr-btn-text" in file "theme.css" and adjust it for your needs. -->
                                    <text dy="30" class="scr-btn-text">
                                        <textPath xlink:href="#textcircle">
                                            Semua Project - Semua Project -
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>

                    </a>
                </div>
            </div>
        </div>

        <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 bg-white-accent-3">
            <div class="tt-section-inner">
                <div class="tt-scrolling-text scr-text-stroke scr-text-reverse" data-scroll-speed="5">
                    <div class="tt-scrolling-text-inner" data-text="Guratint → Teman Bertinta →">
                        Guratint → Teman Bertinta →
                    </div>
                    <!-- /.tt-scrolling-text-inner -->
                </div>
                <!-- End scrolling text -->
            </div>
            <!-- /.tt-section-inner -->
        </div>

        <div class="tt-section padding-top-xlg-100 padding-bottom-xlg-100">
            <div class="tt-section-inner">
                <div class="tt-content-carousel is-client cursor-drag cc-scale-down cc-hide-pagination cc-hide-navigation"
                    data-loop="true" data-simulate-touch="true" data-speed="900">

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

        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-3">
            <div class="tt-section-inner tt-wrap max-width-1600">
                <div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
                    <h3 class="tt-heading-subtitle">Latest News</h3>
                    <h2 class="tt-heading-title">From the Blog</h2>
                    <!-- You can use <br> to break a text line if needed -->
                    <a href="blog-classic.html" class="tt-btn tt-btn-link">
                        <div data-hover="Browse All News">Browse All News</div>
                        <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>


                <div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true"
                    data-pagination-type="bullets">
                    @if (count($beritas))
                        <!-- Begin swiper container -->
                        <div class="swiper">
                            <!-- Begin swiper wrapper (required) -->
                            <div class="swiper-wrapper">
                                @foreach ($beritas as $berita)
                                    <div class="swiper-slide">
                                        <div class="tt-blog-carousel-item">
                                            <a href="/blog/{{ $berita->kategori->slug }}/{{ $berita->slug }}"
                                                class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                                <figure class="tt-bci-image">
                                                    <img class="swiper-lazy"
                                                        src="{{ asset('storage/' . $berita->thumbnail) }}"
                                                        data-src="{{ asset('storage/' . $berita->thumbnail) }}"
                                                        alt="Guratint {{ $berita->judul }}" />
                                                </figure>
                                            </a>

                                            <div class="tt-bci-info">
                                                <div class="tt-bci-categories">
                                                    <a
                                                        href="/blog/{{ $berita->kategori->slug }}">{{ $berita->kategori->nama }}</a>
                                                </div>
                                                <h2 class="tt-bci-title">
                                                    <a href="/blog/{{ $berita->kategori->slug }}/{{ $berita->slug }}">
                                                        {{ $berita->judul }}
                                                    </a>
                                                </h2>
                                                <div class="tt-bci-meta">
                                                    <span class="published">{{ $berita->getFormattedDate() }}</span>
                                                    <span class="posted-by">- by
                                                        {{ $berita->user->name }}</span>
                                                </div>
                                                <!-- /.tt-bci-meta -->
                                            </div>
                                            <!-- /.tt-bci-inf -->
                                        </div>
                                        <!-- End blog carousel item -->
                                    </div>
                                @endforeach
                            </div>
                            <!-- End swiper wrapper -->
                        </div>
                        <!-- End swiper container -->

                        <div class="tt-blc-nav-prev">
                            <div class="tt-blc-nav-arrow magnetic-item">
                                <i class="tt-arrow-left"></i>
                            </div>
                        </div>
                        <div class="tt-blc-nav-next">
                            <div class="tt-blc-nav-arrow magnetic-item">
                                <i class="tt-arrow-right"></i>
                            </div>
                        </div>
                        <!-- End blog carousel navigation -->

                        <!-- Blog carousel pagination -->
                        <div class="tt-blc-pagination hide-cursor"></div>
                    @else
                        <div class="text-center">
                            Belum ada Post Blog saat ini!
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="tt-section padding-top-xlg-150">
            <div class="tt-section-inner tt-wrap max-width-700">
                <div class="tt-heading tt-heading-xxlg margin-bottom-8-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle">Get in Touch</h3>
                    <h2 class="tt-heading-title">
                        Let's Work<br />
                        Together!
                    </h2>
                </div>

                <form id="tt-contact-form" method="POST" class="tt-form-filled tt-form-sm anim-fadeinup"
                    action="{{ route('submit.form') }}">

                    @csrf

                    <div class="tt-form-group">
                        <label>Nama Lengkap <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="nama" required />
                    </div>

                    <div class="tt-row">
                        <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>No HP <span class="required">*</span></label>
                                <input class="tt-form-control" type="number" name="phone" required />
                            </div>
                        </div>

                        <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input class="tt-form-control" type="email" name="email" required />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
                        <div data-hover="Send Message">Send Message</div>
                        <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
                    </button>
                </form>

            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="/assets/vendor/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript">
        $("#tt-contact-form").submit(function(e) {
            e.preventDefault();

            var url = $(this).attr('action');
            let formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Terimakasih sudah subscribe kami!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    $("#tt-contact-form")[0].reset();
                },
                error: function(response) {
                    var resMsg = response.responseJSON.message;

                    if (resMsg.indexOf('Duplicat Entry')) {
                        Swal.fire({
                            position: 'center',
                            icon: 'info',
                            title: 'Validasi Error',
                            text: 'Email Sudah Terdaftar!',
                        })
                    } else {
                        Swal.fire({
                            position: 'center',
                            icon: 'info',
                            title: 'Ada kendala teknis. Mohon coba kembali lagi nanti.',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            })
        })
    </script>
@endpush
