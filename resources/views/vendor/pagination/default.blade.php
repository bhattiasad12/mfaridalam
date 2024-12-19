@if ($paginator->hasPages())
    <style>
        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .page-item {
            margin: 0 5px;
        }

        .page-link {
            display: block;
            padding: 10px 15px;
            color: #000;
            /* Black text */
            text-decoration: none;
            border: 1px solid #000;
            /* Black border */
            border-radius: 5px;
            background-color: #fff;
            /* White background */
            transition: all 0.3s ease;
            /* Smooth transition */
        }

        .page-link:hover {
            background-color: #000;
            /* Black background on hover */
            color: #fff;
            /* White text on hover */
        }

        .page-item.active .page-link {
            background-color: #000;
            /* Black background for active */
            color: #fff;
            /* White text for active */
            border-color: #000;
            /* Black border for active */
        }

        .page-item.disabled .page-link {
            color: #aaa;
            /* Light gray text for disabled */
            pointer-events: none;
            background-color: #f5f5f5;
            /* Light gray background for disabled */
        }
    </style>

    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled"><span class="page-link">&laquo;</span></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}"
                        rel="prev">&laquo;</a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                        rel="next">&raquo;</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">&raquo;</span></li>
            @endif
        </ul>
    </nav>
@endif
