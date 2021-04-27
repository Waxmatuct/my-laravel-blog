@if ($paginator->hasPages())
    <div class="ui pagination menu" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="icon item disabled hidden text-green-darker p-1.5 hover:text-dark dark:hover:text-light-gray" aria-disabled="true" aria-label="@lang('pagination.previous')"> <i class="fas fa-angle-double-left"></i> </a>
        @else
            <a class="icon item text-green-darker p-1.5 hover:text-dark dark:hover:text-light-gray" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"> <i class="fas fa-angle-double-left"></i> </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <a class="icon item disabled hidden" aria-disabled="true">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="item active rounded-sm bg-green-darker dark:bg-green text-light dark:text-light p-1.5 hover:text-light dark:hover:text-light-gray" href="{{ $url }}" aria-current="page">{{ $page }}</a>
                    @else
                        <a class="item text-green-darker p-1.5 hover:text-dark dark:hover:text-light-gray" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="icon item text-green-darker p-1.5 hover:text-dark dark:hover:text-light-gray" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"> <i class="fas fa-angle-double-right"></i> </a>
        @else
            <a class="icon item disabled text-green-darker p-1.5 hover:text-dark dark:hover:text-light-gray" aria-disabled="true" aria-label="@lang('pagination.next')"> <i class="fas fa-angle-double-right"></i> </a>
        @endif
    </div>
@endif
