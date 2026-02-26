@if ($paginator->hasPages())
<div class="w-full flex items-center justify-center">
    <nav aria-label="{{ __('Pagination Navigation') }}">
        <ul class="flex -space-x-px text-sm">

            {{-- Previous --}}
            <li>
                @if ($paginator->onFirstPage())
                    <span class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium font-medium text-sm px-3 h-10 opacity-50 cursor-not-allowed">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading font-medium text-sm px-3 h-10 focus:outline-none">
                        {!! __('pagination.previous') !!}
                    </a>
                @endif
            </li>

            {{-- Page Numbers --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <span class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium font-medium text-sm w-10 h-10 cursor-default">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        <li>
                            @if ($page == $paginator->currentPage())
                                <span aria-current="page" class="flex items-center justify-center text-fg-brand bg-neutral-tertiary-medium box-border border border-default-medium font-medium text-sm w-10 h-10 cursor-default">
                                    {{ $page }}
                                </span>
                            @else
                                <a href="{{ $url }}" class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading font-medium text-sm w-10 h-10 focus:outline-none" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                    {{ $page }}
                                </a>
                            @endif
                        </li>
                    @endforeach
                @endif
            @endforeach

            {{-- Next --}}
            <li>
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading font-medium text-sm px-3 h-10 focus:outline-none">
                        {!! __('pagination.next') !!}
                    </a>
                @else
                    <span class="flex items-center justify-center text-body bg-neutral-secondary-medium box-border border border-default-medium font-medium text-sm px-3 h-10 opacity-50 cursor-not-allowed">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </li>

        </ul>
    </nav>
</div>
@endif