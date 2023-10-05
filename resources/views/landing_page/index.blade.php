@extends('layout.frontend.main', [
    'title' => 'Landing Page',
])

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
