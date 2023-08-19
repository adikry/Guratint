@extends('layout.frontend.main', [
    'title' => 'Porto | ',
])
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
                    </div>
                </div>
            </div>
        </div>

        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-stroke">
                    <a href="https://api.whatsapp.com/send?phone=089623333085" class="tt-pn-link anim-fadeinup"
                        data-cursor="<i class='fab fa-whatsapp'></i>">
                        <div class="tt-pn-title">Hubungi Kami</div>
                        <div class="tt-pn-hover-title">Hubungi Kami</div>
                    </a>
                    <div class="tt-pn-subtitle anim-fadeinup">Mari Berteman</div>
                </div>

            </div>
        </div>
    </div>
@endsection
