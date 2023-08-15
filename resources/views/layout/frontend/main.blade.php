<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>
        Guratint - Teman Bertinta
    </title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="description"
        content="Solusi untuk membantu anda dalam berkreasi dalam bidang printing, bergabung bersama kami menjadi teman bertinta." />
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon (http://www.favicon-generator.org/) -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />

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

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="/assets/vendor/normalize/normalize.min.css" />
    <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/fontawesome-all.min.css" />
    <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
    <link rel="stylesheet" href="/assets/vendor/swiper/css/swiper-bundle.min.css" />
    <!-- Swiper CSS (https://swiperjs.com/) -->
    <link rel="stylesheet" href="/assets/vendor/lightgallery/css/lightgallery.min.css" />
    <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

    @stack('head')
    @stack('css')

    <!-- Template master CSS -->
    <link rel="stylesheet" href="/assets/css/helper.css" />
    <link id="tt-themecss" rel="stylesheet" href="/assets/css/theme.css" />
</head>

<!-- ===========
 ///// Body /////
 ================
 * Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
 * Use class "tt-smooth-scroll" to enable page smooth scrolling.
 * Use class "tt-transition" to enable page transitions.
 * Use class "tt-magic-cursor" to enable magic cursor.
 * Note: there may be classes that are specific to this page only!
 -->

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">

    <!-- *************************************
  *********** Begin body inner *************
  ************************************** -->
    <main id="body-inner">

        <!-- Begin page transition (do not remove!!!)
                  =========================== -->
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
        <!-- End page transition -->

        <!-- Begin magic cursor
                  ======================== -->
        <div id="magic-cursor">
            <div id="ball"></div>
        </div>
        <!-- End magic cursor -->

        <!-- *****************************************
                  *********** Begin scroll container ***********
                  ****************************************** -->
        <div id="scroll-container">

            @include('layout.frontend.navbar')
            <!-- *************************************
                      *********** Begin content wrap ***********
                      ************************************** -->
            <div id="content-wrap">
                @yield('container')
                @include('layout.frontend.footer')
            </div>
            <!-- End content wrap -->

        </div>
        <!-- End scroll container -->

    </main>
    <!-- End body inner -->

    <!-- ====================
  ///// Scripts below /////
  ===================== -->

    <!-- Core JS -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <!-- jquery JS (https://jquery.com) -->

    <!-- Libs and Plugins JS -->
    <script src="/assets/vendor/gsap/gsap.min.js"></script>
    <!-- GSAP JS (https://greensock.com/gsap/) -->
    <script src="/assets/vendor/gsap/ScrollToPlugin.min.js"></script>
    <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
    <script src="/assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

    <script src="/assets/vendor/smooth-scrollbar.js"></script>
    <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
    <script src="/assets/vendor/swiper/js/swiper-bundle.min.js"></script>
    <!-- Swiper JS (https://swiperjs.com/) -->
    <script src="/assets/vendor/isotope/imagesloaded.pkgd.min.js"></script>
    <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- Isotope JS (http://isotope.metafizzy.co) -->
    <script src="/assets/vendor/isotope/packery-mode.pkgd.min.js"></script>
    <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
    <script src="/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
    <script src="/assets/vendor/jquery.mousewheel.min.js"></script>
    <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

    @stack('js')

    <!-- Template master JS -->
    <script src="/assets/js/theme.js"></script>
</body>

</html>
