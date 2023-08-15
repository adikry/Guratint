@extends('layout.frontend.main')
@section('container')
    <div id="page-header" class="ph-full ph-bg-image ph-image-cover-3 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{ asset('storage/' . $porto->thumbnail) }}" alt="Image" />
                </div>
            </div>


            <div class="ph-caption">

                <div class="ph-categories ph-appear">
                    <div class="ph-category">{{ $porto->kategori->nama }}</div>
                    <!-- <div class="ph-category">Varia</div> -->
                </div>

                <h1 class="ph-caption-title">
                    <div class="ph-appear">
                        {{ $porto->nama }}
                    </div>
                </h1>
            </div>
            <!-- End page header caption -->
        </div>
        <!-- /.page-header-inner -->
    </div>
    <!-- End page header -->

    <div id="page-content">

        <div class="tt-section padding-top-xlg-180">
            <div class="tt-section-inner max-width-1600">

                <div class="tt-gallery ttga-hover">
                    <div class="tt-grid ttgr-layout-3 ttgr-gap-4">
                        <!-- Begin tt-Grid items wrap -->
                        <div class="tt-grid-items-wrap isotope-items-wrap lightgallery">
                            <!-- Begin tt-Grid item -->
                            @foreach ($porto->content as $item)
                                <div class="tt-grid-item isotope-item">
                                    <div class="ttgr-item-inner">
                                        <!-- Begin tt-Gallery item -->
                                        <a href="{{ asset('storage/' . $item) }}" class="tt-gallery-item lg-trigger"
                                            data-cursor="View">
                                            <div class="tt-gallery-item-inner">
                                                <div class="tt-gallery-image-wrap anim-zoomin">
                                                    <figure class="tt-gallery-image ttgr-height">
                                                        <img src="{{ asset('storage/' . $item) }}" alt="image" />
                                                    </figure>
                                                    <!-- /.tt-gallery-image -->
                                                </div>
                                                <!-- /.tt-gallery-image-wrap -->
                                            </div>
                                            <!-- /.tt-gallery-item-inner -->
                                        </a>
                                        <!-- End tt-Gallery item -->
                                    </div>
                                    <!-- /.ttgr-item-inner -->
                                </div>
                            @endforeach
                            <!-- End tt-Grid item -->
                        </div>
                        <!-- End tt-Grid items wrap  -->
                    </div>
                    <!-- End tt-Grid -->
                </div>
                <!-- End tt-Gallery -->

            </div>
            <!-- /.tt-section-inner -->
        </div>


        <div class="tt-section bg-white-accent-4 padding-top-xlg-80 padding-bottom-xlg-80">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-center tt-pn-stroke">
                    <a href="contact.html" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-envelope'></i>">
                        <div class="tt-pn-title">Let's talk</div>
                        <div class="tt-pn-hover-title">Let's talk</div>
                    </a> <!-- /.tt-pn-link -->
                    <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
                </div>

            </div>
        </div>


        @if ($newData)
            <div class="tt-section no-padding">
                <div class="tt-section-inner">

                    <div class="tt-next-project np-image-cover-3">
                        <!-- Use if destination page contains page header image -->
                        <div class="tt-np-image">
                            <img src="{{ asset('storage/' . $newData->thumbnail) }}" alt="image" />
                        </div>

                        <div class="tt-np-caption">
                            <div class="tt-np-subtitle">*Diambil secara acak</div>
                            <div class="tt-np-subtitle">Project Berikutnya dalam {{ $newData->kategori->nama }}</div>
                            <h2 class="tt-np-title">
                                <a href="/portofolio/{{ $newData->kategori->slug }}/{{ $newData->slug }}"
                                    data-cursor="View<br> Project">
                                    {{ $newData->nama }}
                                </a>
                            </h2>
                        </div>
                        <!-- /.tt-np-caption -->

                        <div class="tt-np-ghost">Next</div>
                    </div>
                </div>
            </div>
            <!-- End tt-section -->
        @endif
    @endsection
