@extends('layout.frontend.main')
@section('container')
    <div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
        <div class="page-header-inner tt-wrap">
            <div class="ph-caption">
                <div class="ph-caption-subtitle">
                    <div class="ph-appear">Project Guratint</div>
                </div>
                <h1 class="ph-caption-title">
                    <div class="ph-appear">Portfolio</div>
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">Portfolio</div>
                </div>
            </div>
            <!-- End page header caption -->
        </div>
        <!-- /.page-header-inner -->

        <!-- Begin scroll down (you can change "data-offset" to set scroll top offset)
                                                  ======================= -->
        <div class="tt-scroll-down">
            <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                <div class="tt-sd-arrow">
                    <div class="tt-sd-arrow-inner"></div>
                </div>
                <div class="tt-sd-text">Scroll</div>
            </a>
        </div>
        <!-- End scroll down -->
    </div>
    <div id="page-content">
        <div class="tt-section">
            <div class="tt-section-inner">
                <div id="portfolio-grid" class="pgi-hover pgi-cap-hover">
                    <div class="tt-grid ttgr-layout-3-2 ttgr-gap-3">
                        <div class="tt-grid-items-wrap isotope-items-wrap">
                            @foreach ($kategori as $item)
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">
                                        <div class="portfolio-grid-item">
                                            <a href="/portofolio/{{ $item->slug }}" class="pgi-image-wrap"
                                                data-cursor="Detail<br>Project">
                                                <div class="pgi-image-holder cove-opacity-2">
                                                    <div class="pgi-image-inner anim-zoomin">
                                                        <figure class="pgi-image ttgr-height">
                                                            <img src="{{ asset('storage/' . $item->thumbnail) }}"
                                                                alt="Portofolio Guratint {{ $item->nama }}" />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </a>

                                            <div class="pgi-caption">
                                                <div class="pgi-caption-inner">
                                                    <h2 class="pgi-title">
                                                        <a href="/portofolio/{{ $item->slug }}">{{ $item->nama }}</a>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- End tt-Grid items wrap  -->
                    </div>
                    <!-- End tt-Grid -->
                </div>
                <!-- End portfolio grid -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->

        <!-- =======================
                                                            ///// Begin tt-section /////
                                                            ============================
                                                            * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
                                                            -->
        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">
                <!-- Begin page nav
                                                                    ====================
                                                                    * Use class "tt-pn-center" to align page nav to center.
                                                                    * Use class "tt-pn-stroke" to enable title stroke style.
                                                                    -->
                <div class="tt-page-nav tt-pn-stroke">
                    <a href="contact.html" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-envelope'></i>">
                        <div class="tt-pn-title">Let's talk</div>
                        <div class="tt-pn-hover-title">Let's talk</div>
                    </a>
                    <!-- /.tt-pn-link -->
                    <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
                </div>
                <!-- End page nav -->
            </div>
            <!-- /.tt-section-inner -->
        </div>
        <!-- End tt-section -->
    </div>
@endsection
