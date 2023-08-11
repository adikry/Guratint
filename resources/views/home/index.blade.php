@extends('layout.frontend.main')

@section('container')
    <!-- Begin page header -->
    <div id="page-header" class="ph-full ph-cap-sm ph-ghost-scroll ph-image-cropped ph-content-parallax">
        <div class="page-header-inner tt-wrap">
            <div class="bg-circle-line ph-appear"></div>

            <!-- Begin page header image -->
            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="/assets/img/branding1.png" alt="Image" />
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
                        <a href="blog-classic.html" class="tt-btn tt-btn-dark padding-left-15 padding-right-15">
                            <div data-hover="About Us">About Us</div>
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
                    <a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn"
                        data-cursor="All<br>Works">
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
                                    <text dy="30" class="scr-btn-text-1">
                                        <textPath xlink:href="#textcircle">
                                            Hubungi Kami - Hubungi Kami -
                                        </textPath>
                                    </text>
                                </svg>
                            </div>
                        </div>
                        <!-- /.sdc-inner -->
                    </a>
                </div>
                <div class="tt-grid-item">
                    <h1 id="grow-tagline-center" class="tagline text-left">&nbsp;</h1>
                </div>
                <div class="tt-grid-item" id="grow-right">
                    <h1 id="grow-tagline-right" class="tagline text-right">Mari&nbsp;Bertinta</h1>
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
                                <div class="portfolio-interactive-ghost">Portfolio</div>
                                <div class="portfolio-interactive-list">
                                    <div class="portfolio-interactive-item">
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-1.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-1.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Custom Akrilik</h2>
                                                <div class="pi-item-hover-title">Custom Akrilik</div>
                                            </div>
                                            {{-- <div class="pi-item-category-wrap">
                                                <div class="pi-item-category">People</div>
                                                <!-- <div class="pi-item-category">Varia</div> -->
                                            </div> --}}
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-2.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-2.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">PVC Board</h2>
                                                <div class="pi-item-hover-title">PVC Board</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <video class="pi-item-video" loop muted preload="metadata"
                                                    poster="assets/vids/fashion-shoot.jpg">
                                                    <source src="assets/vids/fashion-shoot.mp4" type="video/mp4">
                                                    <source src="assets/vids/fashion-shoot.webm" type="video/webm">
                                                </video>
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-3.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Card Board</h2>
                                                <div class="pi-item-hover-title">Card Board</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-3.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-4.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Canvas</h2>
                                                <div class="pi-item-hover-title">Canvas</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-4.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-5.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">DTF Printing</h2>
                                                <div class="pi-item-hover-title">DTF Printing</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-5.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-6.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Digital Printing & Offset</h2>
                                                <div class="pi-item-hover-title">Digital Printing & Offset</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-6.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-7.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Sublime</h2>
                                                <div class="pi-item-hover-title">Sublime</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->

                                    <!-- Begin portfolio interactive item
                                                                                                                                                                                                                                                                                                                                                                                ====================================== -->
                                    <div class="portfolio-interactive-item">

                                        <!-- Add class "pi-item-image-is-light" if you use a very light image -->
                                        <figure class="pi-item-image pi-item-image-is-light">
                                            <div class="pi-item-image-inner">
                                                <img src="assets/img/portfolio/940/portfolio-7.jpg" alt="image">
                                            </div> <!-- /.pi-item-image-inner -->
                                        </figure> <!-- /.pi-item-image -->

                                        <a href="single-project-8.html" class="pi-item-title-link skew-on-scroll">
                                            <div class="pi-item-title-link-inner">
                                                <h2 class="pi-item-title">Screen Printing</h2>
                                                <div class="pi-item-hover-title">Screen Printing</div>
                                            </div>
                                        </a> <!-- /.pi-item-title-link -->
                                    </div>
                                    <!-- End portfolio interactive item -->
                                </div>
                                <!-- End portfolio interactive list -->

                            </div> <!-- /.pi-inner -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tt-section-inner -->
        </div>

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                        ///// Begin tt-section /////
                                                                                                                                                                                                                                                                                                                                                                        ============================
                                                                                                                                                                                                                                                                                                                                                                        * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                                                                                                                                                                                                                                                                                                                                                                        -->
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
                            <a href="blog-classic.html" class="tt-btn tt-btn-dark padding-left-15 padding-right-15">
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
        <!-- End tt-section -->

        <div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-heading tt-heading-xlg anim-fadeinup">
                    <h3 class="tt-heading-subtitle">Portofolio</h3>
                    <h2 class="tt-heading-title">Project Pilihan</h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>

                <div id="portfolio-grid" class="pgi-hover">
                    <div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">
                        <div class="tt-grid-items-wrap isotope-items-wrap">
                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-1.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">
                                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="/assets/img/portfolio/1200/portfolio-1.jpg"
                                                            alt="image" />
                                                    </figure>
                                                    <!-- /.pgi-image -->
                                                </div>
                                                <!-- /.pgi-image-inner -->
                                            </div>
                                            <!-- /.pgi-image-holder -->
                                        </a>
                                        <!-- /.pgi-image-wrap -->

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-1.html">Elegant Women</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    {{-- <div class="pgi-category">People</div> --}}
                                                    <!-- <div class="pgi-category">Varia</div> -->
                                                </div>
                                                <!-- /.pli-categories-wrap -->
                                            </div>
                                            <!-- /.pgi-caption-inner -->
                                        </div>
                                        <!-- /.pgi-caption -->
                                    </div>
                                    <!-- End portfolio grid item -->
                                </div>
                                <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->

                            <!-- Begin tt-Grid item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="tt-grid-item isotope-item creative">
                                <div class="ttgr-item-inner">
                                    <!-- Begin portfolio grid item
                                                                                                                                                                                                                                                                                                                                                                                            ===============================
                                                                                                                                                                                                                                                                                                                                                                                            * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                                                                                                                                                                                                                                                                                                                                                                            -->
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-2.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">
                                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="/assets/img/portfolio/1200/portfolio-2.jpg"
                                                            alt="image" />
                                                    </figure>
                                                    <!-- /.pgi-image -->
                                                </div>
                                                <!-- /.pgi-image-inner -->
                                            </div>
                                            <!-- /.pgi-image-holder -->
                                        </a>
                                        <!-- /.pgi-image-wrap -->

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-2.html">The Chase</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">Creative</div>
                                                    <!-- <div class="pgi-category">Varia</div> -->
                                                </div>
                                                <!-- /.pli-categories-wrap -->
                                            </div>
                                            <!-- /.pgi-caption-inner -->
                                        </div>
                                        <!-- /.pgi-caption -->
                                    </div>
                                    <!-- End portfolio grid item -->
                                </div>
                                <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->

                            <!-- Begin tt-Grid item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="tt-grid-item isotope-item people">
                                <div class="ttgr-item-inner">
                                    <!-- Begin portfolio grid item
                                                                                                                                                                                                                                                                                                                                                                                            ===============================
                                                                                                                                                                                                                                                                                                                                                                                            * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                                                                                                                                                                                                                                                                                                                                                                            -->
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-3.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">
                                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-video-wrap ttgr-height">
                                                        <video class="pgi-video" loop muted preload="metadata"
                                                            poster="/assets/vids/fashion-shoot.jpg">
                                                            <source src="/assets/vids/fashion-shoot.mp4"
                                                                type="video/mp4" />
                                                            <source src="/assets/vids/fashion-shoot.webm"
                                                                type="video/webm" />
                                                        </video>
                                                    </figure>
                                                    <!-- /.pgi-video-wrap -->
                                                </div>
                                                <!-- /.pgi-image-inner -->
                                            </div>
                                            <!-- /.pgi-image-holder -->
                                        </a>
                                        <!-- /.pgi-image-wrap -->

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-3.html">Fashion Shoot</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">People</div>
                                                    <!-- <div class="pgi-category">Varia</div> -->
                                                </div>
                                                <!-- /.pli-categories-wrap -->
                                            </div>
                                            <!-- /.pgi-caption-inner -->
                                        </div>
                                        <!-- /.pgi-caption -->
                                    </div>
                                    <!-- End portfolio grid item -->
                                </div>
                                <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->

                            <!-- Begin tt-Grid item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="tt-grid-item isotope-item nature">
                                <div class="ttgr-item-inner">
                                    <!-- Begin portfolio grid item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ===============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  -->
                                    <div class="portfolio-grid-item">
                                        <a href="single-project-4.html" class="pgi-image-wrap"
                                            data-cursor="View<br>Project">
                                            <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                            <div class="pgi-image-holder">
                                                <div class="pgi-image-inner anim-zoomin">
                                                    <figure class="pgi-image ttgr-height">
                                                        <img src="/assets/img/portfolio/1200/portfolio-3.jpg"
                                                            alt="image" />
                                                    </figure>
                                                    <!-- /.pgi-image -->
                                                </div>
                                                <!-- /.pgi-image-inner -->
                                            </div>
                                            <!-- /.pgi-image-holder -->
                                        </a>
                                        <!-- /.pgi-image-wrap -->

                                        <div class="pgi-caption">
                                            <div class="pgi-caption-inner">
                                                <h2 class="pgi-title">
                                                    <a href="single-project-4.html">Enchanting Nature</a>
                                                </h2>
                                                <div class="pgi-categories-wrap">
                                                    <div class="pgi-category">Nature</div>
                                                    <!-- <div class="pgi-category">Varia</div> -->
                                                </div>
                                                <!-- /.pli-categories-wrap -->
                                            </div>
                                            <!-- /.pgi-caption-inner -->
                                        </div>
                                        <!-- /.pgi-caption -->
                                    </div>
                                    <!-- End portfolio grid item -->
                                </div>
                                <!-- /.ttgr-item-inner -->
                            </div>
                            <!-- End tt-Grid item -->
                        </div>
                        <!-- End tt-Grid items wrap  -->
                    </div>
                    <!-- End tt-Grid -->
                </div>
                <!-- End portfolio grid -->

                <div class="text-center anim-fadeinup">
                    <!-- Begin scrolling button (See all works)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ============================ -->
                    <a href="portfolio-grid-creative.html" class="tt-scrolling-btn all-works-btn"
                        data-cursor="All<br>Works">
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
                        <!-- /.sdc-inner -->
                    </a>
                    <!-- End scrolling button -->
                </div>
                <!-- /.text-center -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 bg-white-accent-3">
            <div class="tt-section-inner">>
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
        <!-- End tt-section -->


        <div class="tt-section padding-top-xlg-100 padding-bottom-xlg-100">
            <div class="tt-section-inner">
                <div
                  class="tt-content-carousel cursor-drag cc-scale-down cc-hide-pagination cc-pagination-outside cc-hide-navigation"
                  data-loop="true"
                  data-simulate-touch="true"
                  data-speed="900"
                >
                  <!-- Begin swiper container -->
                  <div class="swiper">
                    <!-- Begin swiper wrapper (required) -->
                    <div class="swiper-wrapper">
                      <!-- Begin swiper slide 
											======================== -->
                      <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                          <figure>
                            <img
                              class="tt-cc-image-client swiper-lazy"
                              src="https://source.unsplash.com/random/200x200/?logo,dark,1"
                              data-src="https://source.unsplash.com/random/200x200/?logo,dark,1"
                              alt="Image"
                            />
                            <!-- <figcaption>Image Caption</figcaption> -->
                          </figure>
                        </div>
                        <!-- /.tt-content-carousel-item -->
                      </div>
                      <!-- End swiper slide -->

                      <!-- Begin swiper slide 
											======================== -->
                      <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                          <figure>
                            <img
                              class="tt-cc-image-client swiper-lazy"
                              src="https://source.unsplash.com/random/200x200/?logo,dark,2"
                              data-src="https://source.unsplash.com/random/200x200/?logo,dark,2"
                              alt="Image"
                            />
                            <!-- <figcaption>Image Caption</figcaption> -->
                          </figure>
                        </div>
                        <!-- /.tt-content-carousel-item -->
                      </div>
                      <!-- End swiper slide -->

                      <!-- Begin swiper slide 
											======================== -->
                      <!-- <div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
														<video class="tt-cc-video" loop muted preload="metadata" poster="assets/vids/office-team.jpg">
															<source src="assets/vids/office-team.mp4" type="video/mp4">
															<source src="assets/vids/office-team.webm" type="video/webm">
														</video>
													</figure>
												</div> 
												
											</div>  -->
                      <!-- End swiper slide -->

                      <!-- Begin swiper slide 
											======================== -->
                      <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                          <figure>
                            <img
                              class="tt-cc-image-client swiper-lazy"
                              src="https://source.unsplash.com/random/200x200/?logo,dark,3"
                              data-src="https://source.unsplash.com/random/200x200/?logo,dark,3"
                              alt="Image"
                            />
                            <!-- <figcaption>Image Caption</figcaption> -->
                          </figure>
                        </div>
                        <!-- /.tt-content-carousel-item -->
                      </div>
                      <!-- End swiper slide -->

                      <!-- Begin swiper slide 
											======================== -->
                      <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                          <figure>
                            <img
                              class="tt-cc-image-client swiper-lazy"
                              src="https://source.unsplash.com/random/200x200/?logo,dark,4"
                              data-src="https://source.unsplash.com/random/200x200/?logo,dark,4"
                              alt="Image"
                            />
                            <!-- <figcaption>Image Caption</figcaption> -->
                          </figure>
                        </div>
                        <!-- /.tt-content-carousel-item -->
                      </div>
                      <!-- End swiper slide -->

                      <!-- Begin swiper slide 
											======================== -->
                      <div class="swiper-slide">
                        <div class="tt-content-carousel-item">
                          <figure>
                            <img
                              class="tt-cc-image-client swiper-lazy"
                              src="https://source.unsplash.com/random/200x200/?logo,dark,5"
                              data-src="https://source.unsplash.com/random/200x200/?logo,dark,5"
                              alt="Image"
                            />
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

                  <!-- Begin content carousel navigation (arrows) 
									=================================================== -->
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
        <!-- End tt-section -->

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                      ///// Begin tt-section /////
                                                                                                                                                                                                                                                                                                                                                                                                                                                      ============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                      * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                                                                                                                                                                                                                                                                                                                                                                                                                                                      -->
        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-3">
            <div class="tt-section-inner tt-wrap max-width-1600">
                <!-- Begin tt-Heading
                                                                                                                                                                                                                                                                                                                                                                                                                                                              ======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-heading-stroke" to enable stroke style.
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-heading-center" to align tt-Heading to center.
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                                                                                                                                                                                                                                                                                                                                                                                                                                                              -->
                <div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
                    <h3 class="tt-heading-subtitle">Latest News</h3>
                    <h2 class="tt-heading-title">From the Blog</h2>
                    <!-- You can use <br> to break a text line if needed -->
                    <a href="blog-classic.html" class="tt-btn tt-btn-link">
                        <div data-hover="Browse All News">Browse All News</div>
                        <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
                <!-- End tt-Heading -->

                <!-- ==========================
                                                                                                                                                                                                                                                                                                                                                                                                                                                              ///// Begin blog carousel /////
                                                                                                                                                                                                                                                                                                                                                                                                                                                              ===============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-blc-shifted" to enable shifted style (no effect on smaller screens!).
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-blc-hide-navigation" to hide navigation.
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Available data attributes:
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-speed="800"......................(milliseconds)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-simulate-touch="true"............(true/false)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      data-pagination-type="bullets"........(bullets/fraction/progressbar)
                                                                                                                                                                                                                                                                                                                                                                                                                                                              -->
                <div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true"
                    data-pagination-type="bullets">
                    <!-- Begin swiper container -->
                    <div class="swiper">
                        <!-- Begin swiper wrapper (required) -->
                        <div class="swiper-wrapper">
                            <!-- Begin swiper slide
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="swiper-slide">
                                <!-- Begin blog carousel item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ============================== -->
                                <div class="tt-blog-carousel-item">
                                    <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                        <figure class="tt-bci-image">
                                            <img class="swiper-lazy" src="/assets/img/low-qlt-thumb.jpg"
                                                data-src="/assets/img/blog/carousel/blog-carousel-1.jpg" alt="Image" />
                                        </figure>
                                        <!-- /.tt-bci-image -->
                                    </a>
                                    <!-- /.tt-bci-image-wrap -->

                                    <div class="tt-bci-info">
                                        <div class="tt-bci-categories">
                                            <a href="blog-archive.html">Lifestyle</a>
                                            <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                        </div>
                                        <h2 class="tt-bci-title">
                                            <a href="blog-post.html">5 Surprising Techniques to Improve
                                                Your
                                                Creativity</a>
                                        </h2>
                                        <div class="tt-bci-meta">
                                            <span class="published">May 26, 2022</span>
                                            <span class="posted-by">- by
                                                <a href="blog-archive.html" title="View all posts by John Doe">John
                                                    Doe</a></span>
                                        </div>
                                        <!-- /.tt-bci-meta -->
                                    </div>
                                    <!-- /.tt-bci-inf -->
                                </div>
                                <!-- End blog carousel item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="swiper-slide">
                                <!-- Begin blog carousel item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ============================== -->
                                <div class="tt-blog-carousel-item">
                                    <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                        <figure class="tt-bci-image">
                                            <img class="swiper-lazy" src="/assets/img/low-qlt-thumb.jpg"
                                                data-src="/assets/img/blog/carousel/blog-carousel-2.jpg" alt="Image" />
                                        </figure>
                                        <!-- /.tt-bci-image -->
                                    </a>
                                    <!-- /.tt-bci-image-wrap -->

                                    <div class="tt-bci-info">
                                        <div class="tt-bci-categories">
                                            <a href="blog-archive.html">Tutorials</a>
                                            <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                        </div>
                                        <h2 class="tt-bci-title">
                                            <a href="blog-post.html">Avoid the Top 10 Mistakes Made by
                                                Beginners</a>
                                        </h2>
                                        <div class="tt-bci-meta">
                                            <span class="published">May 24, 2022</span>
                                            <span class="posted-by">- by
                                                <a href="blog-archive.html" title="View all posts by John Doe">John
                                                    Doe</a></span>
                                        </div>
                                        <!-- /.tt-bci-meta -->
                                    </div>
                                    <!-- /.tt-bci-inf -->
                                </div>
                                <!-- End blog carousel item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="swiper-slide">
                                <!-- Begin blog carousel item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ============================== -->
                                <div class="tt-blog-carousel-item">
                                    <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                        <figure class="tt-bci-image">
                                            <img class="swiper-lazy" src="/assets/img/low-qlt-thumb.jpg"
                                                data-src="/assets/img/blog/carousel/blog-carousel-3.jpg" alt="Image" />
                                        </figure>
                                        <!-- /.tt-bci-image -->
                                    </a>
                                    <!-- /.tt-bci-image-wrap -->

                                    <div class="tt-bci-info">
                                        <div class="tt-bci-categories">
                                            <a href="blog-archive.html">Lifestyle</a>
                                            <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                        </div>
                                        <h2 class="tt-bci-title">
                                            <a href="blog-post.html">Why Some People Save Money With This
                                                Method</a>
                                        </h2>
                                        <div class="tt-bci-meta">
                                            <span class="published">May 23, 2022</span>
                                            <span class="posted-by">- by
                                                <a href="blog-archive.html" title="View all posts by John Doe">John
                                                    Doe</a></span>
                                        </div>
                                        <!-- /.tt-bci-meta -->
                                    </div>
                                    <!-- /.tt-bci-inf -->
                                </div>
                                <!-- End blog carousel item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="swiper-slide">
                                <!-- Begin blog carousel item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ============================== -->
                                <div class="tt-blog-carousel-item">
                                    <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                        <figure class="tt-bci-image">
                                            <img class="swiper-lazy" src="/assets/img/low-qlt-thumb.jpg"
                                                data-src="/assets/img/blog/carousel/blog-carousel-4.jpg" alt="Image" />
                                        </figure>
                                        <!-- /.tt-bci-image -->
                                    </a>
                                    <!-- /.tt-bci-image-wrap -->

                                    <div class="tt-bci-info">
                                        <div class="tt-bci-categories">
                                            <a href="blog-archive.html">Inspiration</a>
                                            <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                        </div>
                                        <h2 class="tt-bci-title">
                                            <a href="blog-post.html">Want to Step Up Your Skills? You Need
                                                to Read
                                                This First</a>
                                        </h2>
                                        <div class="tt-bci-meta">
                                            <span class="published">May 21, 2022</span>
                                            <span class="posted-by">- by
                                                <a href="blog-archive.html" title="View all posts by John Doe">John
                                                    Doe</a></span>
                                        </div>
                                        <!-- /.tt-bci-meta -->
                                    </div>
                                    <!-- /.tt-bci-inf -->
                                </div>
                                <!-- End blog carousel item -->
                            </div>
                            <!-- End swiper slide -->

                            <!-- Begin swiper slide
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ======================== -->
                            <div class="swiper-slide">
                                <!-- Begin blog carousel item
                                                                                                                                                                                                                                                                                                                                                                                                                                                                              ============================== -->
                                <div class="tt-blog-carousel-item">
                                    <a href="blog-post.html" class="tt-bci-image-wrap" data-cursor="Read<br>More">
                                        <figure class="tt-bci-image">
                                            <img class="swiper-lazy" src="/assets/img/low-qlt-thumb.jpg"
                                                data-src="/assets/img/blog/carousel/blog-carousel-5.jpg" alt="Image" />
                                        </figure>
                                        <!-- /.tt-bci-image -->
                                    </a>
                                    <!-- /.tt-bci-image-wrap -->

                                    <div class="tt-bci-info">
                                        <div class="tt-bci-categories">
                                            <a href="blog-archive.html">Tutorials</a>
                                            <!-- <a href="blog-archive.html">Uncategorized</a> -->
                                        </div>
                                        <h2 class="tt-bci-title">
                                            <a href="blog-post.html">Secrets to Getting Your Project to
                                                Complete
                                                Quickly</a>
                                        </h2>
                                        <div class="tt-bci-meta">
                                            <span class="published">May 19, 2022</span>
                                            <span class="posted-by">- by
                                                <a href="blog-archive.html" title="View all posts by John Doe">John
                                                    Doe</a></span>
                                        </div>
                                        <!-- /.tt-bci-meta -->
                                    </div>
                                    <!-- /.tt-bci-inf -->
                                </div>
                                <!-- End blog carousel item -->
                            </div>
                            <!-- End swiper slide -->
                        </div>
                        <!-- End swiper wrapper -->
                    </div>
                    <!-- End swiper container -->

                    <!-- Begin blog carousel navigation (arrows)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ============================================= -->
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
                </div>
                <!-- End blog carousel -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <!-- =======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                      ///// Begin tt-section /////
                                                                                                                                                                                                                                                                                                                                                                                                                                                      ============================
                                                                                                                                                                                                                                                                                                                                                                                                                                                      * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                                                                                                                                                                                                                                                                                                                                                                                                                                                      -->
        <div class="tt-section padding-top-xlg-150">
            <div class="tt-section-inner tt-wrap max-width-700">
                <!-- Begin tt-Heading
                                                                                                                                                                                                                                                                                                                                                                                                                                                              ======================
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-heading-stroke" to enable stroke style.
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-heading-center" to align tt-Heading to center.
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
                                                                                                                                                                                                                                                                                                                                                                                                                                                              -->
                <div class="tt-heading tt-heading-xxlg margin-bottom-8-p anim-fadeinup">
                    <h3 class="tt-heading-subtitle">Get in Touch</h3>
                    <h2 class="tt-heading-title">
                        Let's Work<br />
                        Together!
                    </h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>
                <!-- End tt-Heading -->

                <!-- Begin form
                                                                                                                                                                                                                                                                                                                                                                                                                                                              ================
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-form-filled" or "tt-form-minimal" to change form style.
                                                                                                                                                                                                                                                                                                                                                                                                                                                              * Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
                                                                                                                                                                                                                                                                                                                                                                                                                                                              -->
                <form id="tt-contact-form" class="tt-form-filled anim-fadeinup">
                    <!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
                    <input type="hidden" name="project_name" value="yourwebsiteaddress.com" />
                    <!-- Change value to your site name -->
                    <input type="hidden" name="admin_email" value="your@email.com" />
                    <!-- Change value to your valid email address (where a message will be sent) -->
                    <input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com" />
                    <!-- Change value to your own message subject -->
                    <!-- End Hidden Required Fields -->

                    <div class="tt-row">
                        <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>Your Name <span class="required">*</span></label>
                                <input class="tt-form-control" type="text" name="Name" placeholder="" required />
                            </div>
                        </div>
                        <!-- /.tt-col -->

                        <div class="tt-col-md-6">
                            <div class="tt-form-group">
                                <label>Email address <span class="required">*</span></label>
                                <input class="tt-form-control" type="email" name="Email" placeholder="" required />
                            </div>
                        </div>
                        <!-- /.tt-col -->
                    </div>
                    <!-- /.tt-row -->

                    <div class="tt-form-group">
                        <label>Subject <span class="required">*</span></label>
                        <input class="tt-form-control" type="text" name="Subject" placeholder="" required />
                    </div>

                    <!-- <div class="tt-form-group">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <label>Select an option <span class="required">*</span></label>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      <select class="tt-form-control" name="option" required>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <option value="" disabled selected>Please choose an option</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <option value="Say Hello">Say hello</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <option value="New Project">New project</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <option value="Feedback">Feedback</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <option value="Other">Other</option>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </select>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </div> -->

                    <div class="tt-form-group">
                        <label>Your Message <span class="required">*</span></label>
                        <textarea class="tt-form-control" rows="5" name="Message" placeholder="" required></textarea>
                    </div>

                    <small class="tt-form-text"><em>Fields marked with an asterisk (*) are
                            required!</em></small>

                    <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
                        <div data-hover="Send Message">Send Message</div>
                        <span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
                    </button>
                </form>
                <!-- End form -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
    </div>
    <!-- End page content -->
@endsection
