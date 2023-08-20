@extends('layout.frontend.main', [
    'title' => 'Blog | ',
])

@push('head')
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="GuraTint" />
    <meta property="og:title" content="Guratint | Teman Bertinta" />
    <meta property="og:description" content="Daftar Artikel yang telah dipublish oleh Guratint dengan semua kategori" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{ asset('storage/logo/header.jpg') }}">
    <meta property="og:image:width" content="526">
    <meta property="og:image:height" content="275">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary">
@endpush

@section('container')
    <div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-caption max-width-1000">
                <div class="ph-caption-subtitle">
                    <div class="ph-appear">Artikel &amp; Berita</div>
                </div>
                <h1 class="ph-caption-title">
                    <div class="ph-appear">
                        @if ($kategori)
                            Kategori : {{ $beritas[0]->kategori->nama }}
                        @else
                            Blog
                        @endif

                    </div>
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">Blog</div>
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
            <div class="tt-section-inner tt-wrap">
                @if (request('q'))
                    <div class="ph-appear">
                        <div class="h5">Pencarian dalam : "{{ request('q') }}"</div>
                    </div>
                @endif
                <div class="tt-row">

                    <div class="tt-col-lg-8">

                        <div id="blog-list" class="bli-image-cropped">

                            @foreach ($beritas as $blog)
                                <article class="blog-list-item">

                                    <a href="/blog/{{ $blog->kategori->slug }}/{{ $blog->slug }}" class="bli-image-wrap"
                                        data-cursor="Lihat">
                                        <figure class="bli-image">
                                            <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                                                data-src="{{ asset('storage/' . $blog->thumbnail) }}"
                                                class="tt-lazy anim-zoomin" alt="{{ $blog->judul }}">
                                        </figure>
                                    </a>

                                    <div class="bli-info">
                                        <div class="bli-categories">
                                            <a href="/blog/{{ $blog->kategori->slug }}">{{ $blog->kategori->nama }}</a>
                                        </div>
                                        <h2 class="bli-title"><a href="/blog/{{ $blog->slug }}">
                                                {{ $blog->judul }}
                                            </a></h2>
                                        <div class="bli-meta">
                                            <span class="published">{{ $blog->getFormattedDate() }}</span>
                                            <span class="posted-by">- by {{ $blog->user->name }}</span>
                                        </div>
                                        <div class="bli-desc"> <!-- 3 lines is optimal! -->
                                            {{ $blog->shortBody() }}
                                        </div>
                                        <a href="/blog/{{ $blog->kategori->slug }}/{{ $blog->slug }}"
                                            class="bli-read-more tt-btn tt-btn-primary">
                                            <div data-hover="Lihat Selengkapnya">Lihat Selengkapnya</div>
                                            <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
                                        </a>
                                    </div>

                                </article>
                            @endforeach

                        </div>

                    </div>

                    <div class="tt-col-lg-4">

                        @include('layout.frontend.sidebar')

                    </div>

                </div>


                {{ $beritas->links() }}

            </div>
        </div>


        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-stroke">
                    <a href="/portofolio" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-arrow-right'></i>">
                        <div class="tt-pn-title">Portfolio</div>
                        <div class="tt-pn-hover-title">Portfolio</div>
                    </a> <!-- /.tt-pn-link -->
                    <div class="tt-pn-subtitle anim-fadeinup">Selected Works</div>
                </div>

            </div> <!-- /.tt-section-inner -->
        </div>


    </div>
@endsection
