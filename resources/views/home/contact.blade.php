@extends('layout.frontend.main', [
    'title' => 'Kontak | ',
])

@push('canonical')
    <link rel="canonical" href="https://guratint.id/">
@endpush

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
    <div id="page-header" class="ph-full ph-cap-xxlg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
        <div class="page-header-inner tt-wrap">


            <div class="ph-caption">
                <div class="ph-caption-subtitle">
                    <div class="ph-appear">Mari Berteman</div>
                </div>
                <h1 class="ph-caption-title">
                    <div class="ph-appear">Work<br> With Us</div>
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">Contact</div>
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


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-2">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-heading tt-heading-xlg anim-fadeinup">
                    <h3 class="tt-heading-subtitle">Ada Pekerjaan, Punya Ide, Tanyakan pada Kami</h3>
                    <h2 class="tt-heading-title"><a href="#" class="tt-link"
                            data-cursor="<i class='fab fa-whatsapp'></i>">Whatsapp Saja <span
                                class="hide-from-sm">↗</span></a></h2>
                    <!-- You can use <br> to break a text line if needed -->
                </div>


                <ul class="tt-contact-info anim-fadeinup">
                    <li class="text-xlg">
                        <span class="tt-ci-icon"><i class="fas fa-map-marker-alt"></i></span>
                        <a href="" class="tt-link">
                            Perum Pepabri Blok B Cimanganten, Tarogong Kaler, Garut
                        </a>
                    </li>
                    <li class="text-xlg">
                        <span class="tt-ci-icon"><i class="fas fa-envelope"></i></span>
                        <a href="mailto:guratint@gmail.com" class="tt-link">Guratint@gmail.com</a>
                    </li>
                    <li>
                        <h6 class="no-margin-bottom margin-top-30">Media Link:</h6>

                        <div class="social-buttons">
                            <ul>
                                <li>
                                    <div class="magnetic-wrap"><a href="#" class="magnetic-item not-hide-cursor"
                                            target="_blank" rel="noopener" style=""><i
                                                class="fab fa-facebook-f"></i></a></div>
                                </li>
                                <li>
                                    <div class="magnetic-wrap"><a href="#" class="magnetic-item not-hide-cursor"
                                            target="_blank" rel="noopener" style=""><i
                                                class="fab fa-instagram"></i></a></div>
                                </li>
                                <li>
                                    <div class="magnetic-wrap"><a href="#" class="magnetic-item not-hide-cursor"
                                            target="_blank" rel="noopener" style=""><i class="fab fa-tiktok"></i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="magnetic-wrap"><a href="#" class="magnetic-item not-hide-cursor"
                                            target="_blank" rel="noopener" style=""><i class="fab fa-youtube"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </li>
                </ul>


            </div>
        </div>


        <div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">


                <div class="tt-page-nav tt-pn-stroke">
                    <a href="/portofolio" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
                        <div class="tt-pn-title">Portofolio</div>
                        <div class="tt-pn-hover-title">Portofolio</div>
                    </a>
                    <div class="tt-pn-subtitle anim-fadeinup">Project Pilihan</div>
                </div>


            </div>
        </div>


    </div>
@endsection
