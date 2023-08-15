@if ($paginator->hasPages())

    <div class="tt-pagination tt-pagin-center anim-fadeinup">
        @if ($paginator->onFirstPage())
            <div class="tt-pagin-prev disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="tt-pagin-item magnetic-item" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            </div>
        @else
            <div class="tt-pagin-prev">
                <a class="tt-pagin-item magnetic-item" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></a>
            </div>
        @endif
        {{-- Pagination Elements --}}
        <div class="tt-pagin-numbers">
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page"
                                class="tt-pagin-item magnetic-item active">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="tt-pagin-item magnetic-item">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <div class="tt-pagin-next">
                <a href="{{ $paginator->nextPageUrl() }}" class="tt-pagin-item tt-pagin-next magnetic-item"
                    rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
            </div>
        @else
            <div class="tt-pagin-next disabled">
                <span class="tt-pagin-item tt-pagin-next magnetic-item" aria-disabled="true"
                    aria-label="@lang('pagination.next')" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            </div>
        @endif
    </div>
@endif
