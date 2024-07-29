@php
    $class = $class ?? 'page-link'; // Default class if not provided
@endphp

@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="{{ $class }}" aria-hidden="true">&lsaquo; Previous</span>
                </li>
            @else
                <li class="page-item">
                    <a class="{{ $class }}" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo; Previous</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="{{ $class }}" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next &rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="{{ $class }}" aria-hidden="true">Next &rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
