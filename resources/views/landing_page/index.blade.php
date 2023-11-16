@extends('layout.frontend.main', [
    'title' => 'Landing - ',
])

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
    @if ($data)
        <div id="page-content">
            <div class="tt-section">
                <div class="tt-section-inner tt-wrap">
                    <div class="tt-row tt-justify-content-lg-center">
                        <div class="tt-col-lg-6">
                            @for ($i = 0; $i < count($data->content); $i++)
                                <div class="position-relative">
                                    @if ($data->content[$i]['content'])
                                        <figure>
                                            <img src="{{ asset('storage/' . $data->content[$i]['content']) }}"
                                                alt="Content {{ $i }}">
                                        </figure>
                                    @endif
                                    @if ($data->content[$i]['video'])
                                        <video playsinline autoplay muted loop class="tt-bg-video">
                                            <source src="{{ asset('storage/' . $data->content[$i]['video']) }}"
                                                type="video/mp4">
                                        </video>
                                    @endif
                                    @if ($data->content[$i]['button'])
                                        <div class="tt-row tt-justify-content-center">
                                            <a href="/contact" class="tt-btn tt-btn-dark padding-left-15 padding-right-15">
                                                <span class="tt-btn-icon"><i class="fab fa-whatsapp"></i></span>
                                                <div data-hover="Hubungi Kami">Hubungi Kami</div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
