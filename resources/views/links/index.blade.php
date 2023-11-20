<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <title>Links | GuraTint - Teman Bertinta</title>


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


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Body font -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Secondary/Alter font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="/assets/vendor/normalize/normalize.min.css" />
    <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/fontawesome-all.min.css" />
    <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
    <!-- Template master CSS -->
    <link rel="stylesheet" href="/assets/css/helper.css" />
    <link id="tt-themecss" rel="stylesheet" href="/assets/css/theme.css" />

    <link rel="canonical" href="https://guratint.id/">

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

</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">

    <main class="body-inner">
        <div id="page-transition">
            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">
                    <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
                    <img src="/assets/img/Logo Guratint.webp" class="ptr-prel-image tt-logo-light" alt="Logo" />
                </div>
                <!-- /.ptr-prel-content -->
            </div>
            <!-- /.ptr-preloader -->
        </div>


        <div id="magic-cursor">
            <div id="ball"></div>
        </div>

        <div id="scroll-container">
            <div id="content-wrap">
                <div class="tt-section tt-wrap padding-bottom-0 padding-top-20">
                    <div class="tt-section-inner">
                        <div class="tt-row">
                            <div class="tt-col-xl-4 custom-logo-wrapper">
                                <div class="custom-logo-links">
                                    <div class="ph-appear">
                                        <img src="{{ asset('storage/logo/Logo Links.png') }}" alt="Image" />
                                    </div>
                                </div>
                            </div>
                            <div class="tt-col-xl-8">
                                <div class="tt-grid ttgr-layout-2 ttgr-gap-2 for-links">
                                    <div class="tt-grid-items-wrap isotope-items-wrap">
                                        @foreach ($links as $link)
                                            <div class="tt-grid-item isotope-item">
                                                <div class="ttgr-item-inner custom-links ph-appear">
                                                    <a href="{{ $link->link }}"
                                                        class="btn-market tt-link not-hide-cursor"
                                                        data-cursor="{{ $link->nama }}">
                                                        <div class="item-link">
                                                            <span class="tt-ci-icon">
                                                                <img src="{{ asset('storage/' . $link->logo) }}"
                                                                    alt="Link">
                                                            </span>
                                                            <span class="link-text">
                                                                {{ $link->nama }}
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/gsap/gsap.min.js"></script>
    <script src="/assets/vendor/gsap/ScrollToPlugin.min.js"></script>
    <script src="/assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <script src="/assets/vendor/smooth-scrollbar.js"></script>
    <script src="/assets/vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope/packery-mode.pkgd.min.js"></script>
    <script src="/assets/vendor/jquery.mousewheel.min.js"></script>
    <script src="/assets/js/theme.js"></script>
</body>

</html>
{{-- @foreach ($links as $link)
    
        <div class="custom-logo-links">
        <div class="ph-appear">
            <img src="{{ asset('storage/logo/Logo Admin.png') }}" alt="Image" />
        </div>
    </div>
    <div class="custom-links">
        <div class="item-link ph-appear">
                <a href="#" class="btn-market tt-link not-hide-cursor" data-cursor="{{ $link->nama }}">
                    <span class="tt-ci-icon">
                        <img src="{{ asset('storage/' . $link->logo) }}" alt="Link">
                    </span>
                    <span class="link-text">
                        {{ $link->nama }}
                    </span>
                </a>
            </div>

        </div>
    
@endforeach --}}
