@extends('layout.frontend.main', [
    'title' => 'Porto | ',
])

@push('canonical')
    <link rel="canonical" href="https://guratint.id/portofolio/{{ $pilih->slug }}">
@endpush

@push('head')
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="GuraTint" />
    <meta property="og:title" content="Portofolio {{ $pilih->nama }}" />
    <meta property="og:description"
        content="Portofolio pilihan Guratint dalam kategori {{ $pilih->nama }} sebagai bahan referensi Anda!" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{ asset('storage/' . $pilih->thumbnail) }}">
    <meta property="og:image:width" content="526">
    <meta property="og:image:height" content="275">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary">
@endpush

@push('css')
    <link rel="stylesheet" href="/assets/vendor/lightgallery/css/lightgallery.min.css" />
@endpush

@section('container')
    <div id="page-header" class="ph-full ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{ asset('storage/' . $pilih->thumbnail) }}" alt="Image" />
                </div>
            </div>

            <div class="ph-caption">

                <div class="ph-categories ph-appear">
                    <div class="ph-category">Portofolio</div>
                    <!-- <div class="ph-category">Varia</div> -->
                </div>

                <h1 class="ph-caption-title">
                    <div class="ph-appear">
                        {{ $pilih->nama }}
                    </div>
                </h1>

                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">{{ $pilih->nama }}</div>
                </div>
            </div>
            <!-- End page header caption -->
        </div>
        <!-- /.page-header-inner -->
    </div>
    <!-- End page header -->

    <div id="page-content">


        <div class="tt-section padding-top-xlg-180">
            <div class="tt-section-inner">
                <div id="portfolio-grid" class="pgi-hover pgi-cap-center pgi-cap-hover">
                    <div class="tt-grid ttgr-layout-3 ttgr-gap-3">
                        <div class="tt-grid-items-wrap lightgallery">

                            @if (count($portos))
                                @foreach ($portos as $porto)
                                    <div class="tt-grid-item">
                                        <div class="ttgr-item-inner">
                                            <div class="portfolio-grid-item">
                                                <a href="{{ asset('storage/' . $porto->thumbnail) }}"
                                                    class="tt-gallery-item lg-trigger" data-cursor="View">
                                                    <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                                    <div class="pgi-image-holder cover-opacity-2">
                                                        <div class="pgi-image-inner anim-zoomin">
                                                            <figure class="pgi-image ttgr-height">
                                                                <img src="{{ asset('storage/' . $porto->thumbnail) }}"
                                                                    alt="image" />
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </a>

                                                <div class="pgi-caption">
                                                    <div class="pgi-caption-inner">
                                                        <h2 class="pgi-title">
                                                            <a href="#">{{ $porto->nama }}</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- End tt-Grid items wrap  -->
                    </div>
                </div>

                {{ $portos->links() }}

            </div>
        </div>


        <div class="tt-section bg-white-accent-4 padding-top-xlg-80 padding-bottom-xlg-80">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-stroke">
                    <a href="https://wa.me/+6285174173451?text=Hallo%20Admin%20GuraTint" class="tt-pn-link anim-fadeinup"
                        data-cursor="<i class='fab fa-whatsapp'></i>">
                        <div class="tt-pn-title">Hubungi Kami</div>
                        <div class="tt-pn-hover-title">Hubungi Kami</div>
                    </a>
                    <div class="tt-pn-subtitle anim-fadeinup">Mari Bertinta</div>
                </div>

            </div>
        </div>

        @if ($next)
            <div class="tt-section no-padding">
                <div class="tt-section-inner">
                    <div class="tt-next-project np-image-cover-3">

                        <div class="tt-np-image">
                            <img src="{{ asset('storage/' . $next->thumbnail) }}" alt="{{ $next->nama }}" />
                        </div>

                        <div class="tt-np-caption">
                            <div class="tt-np-subtitle">Portofolio Selanjutnya</div>
                            <h2 class="tt-np-title">
                                <a href="/portofolio/{{ $next->slug }}" data-cursor="Next<br>Porto">
                                    {{ $next->nama }}
                                </a>
                            </h2>
                        </div>

                        <div class="tt-np-ghost">Selanjutnya</div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@push('js')
    <script src="/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script>
@endpush
