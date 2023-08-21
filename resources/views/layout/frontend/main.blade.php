<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>
        {{ $title }}Guratint - Digital Printing
    </title>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="description"
        content="Solusi untuk membantu anda dalam berkreasi dalam bidang digital printing, uv printing, dan persoalan tentang printing. Bergabung bersama kami menjadi teman bertinta." />
    <!-- Mobile Meta -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon (http://www.favicon-generator.org/) -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    @stack('head')

    {{-- Google Tag Manager --}}
    {{-- @if ($market)
        @foreach ($market as $item)
            @if ($item->applicationName === 'googleTag')
                {!! $item->head !!}
            @endif

            @if ($item->applicationName === 'meta2')
                {!! $item->head !!}
            @endif
        @endforeach
    @endif --}}



    <!-- Google Analytics -->
    <!-- Add your Google Analytics code here. -->

    <!-- Google fonts (https://www.google.com/fonts) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- Body font -->
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- Secondary/Alter font -->

    <link rel="canonical" href="https://guratint.id/">

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="/assets/vendor/normalize/normalize.min.css" />
    <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/fontawesome-all.min.css" />
    <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
    <link rel="stylesheet" href="/assets/vendor/swiper/css/swiper-bundle.min.css" />
    <!-- Swiper CSS (https://swiperjs.com/) -->
    {{-- <link rel="stylesheet" href="/assets/vendor/lightgallery/css/lightgallery.min.css" />
    <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) --> --}}
    @stack('css')

    <!-- Template master CSS -->
    <link rel="stylesheet" href="/assets/css/helper.css" />
    <link id="tt-themecss" rel="stylesheet" href="/assets/css/theme.css" />
</head>


<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
    @if ($market)
        @foreach ($market as $item)
            @if ($item->applicationName === 'googleTag')
                {!! $item->body !!}
            @endif
        @endforeach
    @endif


    <main id="body-inner">

        <div id="page-transition">
            <div class="ptr-overlay"></div>
            <div class="ptr-preloader">
                <div class="ptr-prel-content">
                    <!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
                    <img src="/assets/img/Logo Guratint.png" class="ptr-prel-image tt-logo-light" alt="Logo" />
                </div>
                <!-- /.ptr-prel-content -->
            </div>
            <!-- /.ptr-preloader -->
        </div>


        <div id="magic-cursor">
            <div id="ball"></div>
        </div>


        <div id="scroll-container">

            @include('layout.frontend.navbar')

            <div id="content-wrap">
                @yield('container')
                @include('layout.frontend.footer')
            </div>

        </div>

    </main>

    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/gsap/gsap.min.js"></script>
    <script src="/assets/vendor/gsap/ScrollToPlugin.min.js"></script>
    <script src="/assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <script src="/assets/vendor/smooth-scrollbar.js"></script>
    <script src="/assets/vendor/swiper/js/swiper-bundle.min.js"></script>
    {{-- <script src="/assets/vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/isotope/packery-mode.pkgd.min.js"></script> --}}
    {{-- <script src="/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> --}}
    <script src="/assets/vendor/jquery.mousewheel.min.js"></script>

    @stack('js')

    <script src="/assets/js/theme.js"></script>
</body>

</html>
