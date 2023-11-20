@extends('layout.frontend.main', [
    'title' => 'Blog | ',
])

@push('canonical')
    <link rel="canonical" href="https://guratint.id/blog/{{ $berita->kategori->slug }}/{{ $berita->slug }}">
@endpush

@push('head')
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="GuraTint" />
    <meta property="og:title" content="{{ $berita->judul }}" />
    <meta property="og:description" content="{{ $berita->shortBody() }}" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:image" content="{{ asset('storage/' . $berita->thumbnail) }}">
    <meta property="og:image:width" content="526">
    <meta property="og:image:height" content="275">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary">
@endpush

@push('css')
    <link rel="stylesheet" href="/assets/vendor/lightgallery/css/lightgallery.min.css" />
@endpush

@section('container')
    <div id="page-header" class="ph-cap-sm ph-bg-image ph-ghost-scroll ph-image-cover-6 ph-content-parallax">
        <div class="page-header-inner tt-wrap">

            <div class="ph-image">
                <div class="ph-image-inner">
                    <img src="{{ asset('storage/' . $berita->thumbnail) }}" alt="{{ $berita->judul }}">
                </div>
            </div>

            <div class="ph-caption max-width-1000">
                <div class="ph-categories ph-appear">
                    <a href="#*perkategori" class="ph-category"></a>
                </div>
                <h1 class="ph-caption-title">
                    <div class="ph-appear">{{ $berita->judul }}</div>
                    <!-- You can use <br> to break a text line if needed -->
                </h1>
                <div class="ph-caption-title-ghost">
                    <div class="ph-appear">{{ $berita->judul }}</div>
                </div>
                <div class="ph-meta">
                    <div class="ph-appear">
                        <span class="ph-meta-published">{{ $berita->getFormattedDate() }}</span>
                        <span class="ph-meta-posted-by">by: {{ $berita->user->name }}</span>
                    </div>
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


        <div class="ph-share ph-appear">
            <div class="ph-share-inner">
                <div class="ph-share-trigger">
                    <div class="ph-share-text">Share</div>
                    <div class="ph-share-icon"><i class="fas fa-share"></i></div>
                </div> <!-- /.ph-share-trigger -->

                <div class="social-buttons">
                    <ul>
                        <li><a id="whatsappLink" class="magnetic-item" target="_blank" title="Share on Whatsapp"><i
                                    class="fab fa-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                class="magnetic-item" target="_blank" title="Share on Facebook"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a id="twitterLink" class="magnetic-item" target="_blank" title="Share on Twitter"><i
                                    class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <div id="page-content">

        <div class="tt-section">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-row">

                    <!-- Content column -->
                    <div class="tt-col-lg-8">

                        <article class="tt-blog-post">


                            <div class="tt-blog-post-content">

                                {!! $berita->body !!}

                            </div>

                            <div class="tt-blog-post-share">
                                <div class="tt-bps-text">Share:</div>
                                <div class="social-buttons">
                                    <ul>
                                        <li><a id="whatsappLink1" class="magnetic-item" rel="noopener" target="_blank"
                                                title="Share on Whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->full() }}"
                                                class="magnetic-item" rel="noopener" target="_blank"
                                                title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a id="twitterLink1" class="magnetic-item" rel="noopener" target="_blank"
                                                title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </article>


                        <!-- Begin blog post nav
                                                                                                                                                                                                        ======================== -->
                        <div class="tt-blog-post-nav">
                            <div class="tt-bp-nav-col tt-bp-nav-left">
                                <div class="tt-bp-nav-text">
                                    @if ($prev)
                                        <span><i class="fas fa-angle-left"></i></span>
                                        Sebelumnya
                                    @endif
                                </div>
                                @if ($prev)
                                    <h4 class="tt-bp-nav-title">
                                        <a
                                            href="/blog/{{ $prev->kategori->slug }}/{{ $prev->slug }}">{{ $prev->judul }}</a>
                                    </h4>
                                @endif
                            </div>
                            <div class="tt-bp-nav-col tt-bp-nav-right">
                                <div class="tt-bp-nav-text">
                                    @if ($next)
                                        Selanjutnya
                                        <span><i class="fas fa-angle-right"></i></span>
                                    @endif
                                </div>
                                @if ($next)
                                    <h4 class="tt-bp-nav-title">
                                        <a
                                            href="/blog/{{ $next->kategori->slug }}/{{ $next->slug }}">{{ $next->judul }}</a>
                                    </h4>
                                @endif
                            </div>
                        </div>
                        <!-- End blog post nav -->


                    </div> <!-- /.col (Content column) -->

                    <!-- Sidebar column -->
                    <div class="tt-col-lg-4">
                        @include('layout.frontend.sidebar')
                    </div>
                </div>

            </div>
        </div>


        <div class="tt-section padding-bottom-xlg-150">
            <div class="tt-section-inner tt-wrap">

                <div class="tt-page-nav tt-pn-stroke">
                    <a href="https://wa.me/+6285174173451?text=Hallo%20Admin%20GuraTint" class="tt-pn-link anim-fadeinup"
                        data-cursor="<i class='fas fa-arrow-right'></i>">
                        <div class="tt-pn-title">Hubungi Kami</div>
                        <div class="tt-pn-hover-title">Hubungi Kami</div>
                    </a>
                    <div class="tt-pn-subtitle anim-fadeinup">Project Pilihan</div>
                </div>

            </div>
        </div>


    </div>
@endsection

@push('js')
    <script src="/assets/vendor/lightgallery/js/lightgallery-all.min.js"></script>
    <script>
        var whatsappMsg = "{{ $berita->judul }}" + "\r\n\r\n" + "{{ url()->full() }}";
        var uriMsg = window.encodeURIComponent(whatsappMsg);

        document.getElementById('whatsappLink').setAttribute('href', ('https://wa.me/?text=' + uriMsg));
        document.getElementById('twitterLink').setAttribute('href', ('https://twitter.com/intent/tweet?text=' + uriMsg));
        document.getElementById('whatsappLink1').setAttribute('href', ('https://wa.me/?text=' + uriMsg));
        document.getElementById('twitterLink1').setAttribute('href', ('https://twitter.com/intent/tweet?text=' + uriMsg));
    </script>
@endpush
