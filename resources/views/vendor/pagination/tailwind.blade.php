@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center mt-6">
        <ul class="inline-flex items-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <span class="px-4 py-2 bg-gray-700 text-gray-400 rounded-lg cursor-not-allowed">← Prev</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                       class="px-4 py-2 bg-gradient-to-r from-indigo-500 to-pink-500 text-white rounded-lg hover:opacity-80 transition">
                        ← Prev
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <span class="px-4 py-2 text-gray-400">{{ $element }}</span>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <span class="px-4 py-2 bg-white text-indigo-700 font-bold rounded-lg shadow">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                   class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                       class="px-4 py-2 bg-gradient-to-r from-pink-500 to-indigo-500 text-white rounded-lg hover:opacity-80 transition">
                        Next →
                    </a>
                </li>
            @else
                <li>
                    <span class="px-4 py-2 bg-gray-700 text-gray-400 rounded-lg cursor-not-allowed">Next →</span>
                </li>
            @endif
        </ul>
    </nav>
@endif