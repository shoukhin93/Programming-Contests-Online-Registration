@if ($paginator->hasPages())
    <ul class="pagination">
        <li></li>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><a href="#"><span class="glyphicon glyphicon-backward"> </a></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><span class="glyphicon glyphicon-backward"></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                {{-- Customize For Fixed Length Paginator  --}}
                @php
                    $Start=$paginator->currentPage();
                    $End=$Start+3;
                    $Size=sizeof($element);
                    if($End>$Size){
                        $tm=($End-$Size);
                        $Start-=$tm;
                        $End-=$tm;
                        if($Start<1) $Start=1;
                    }
                @endphp

                @foreach ($element as $page => $url)
                    @if($page>=$Start && $page<=$End)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endif
                @endforeach

            @endif

        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><span class="glyphicon glyphicon-forward"></a></li>
        @else
            <li class="disabled"><a><span class="glyphicon glyphicon-forward"> </a></li>
        @endif
        <li></li>
    </ul>
@endif
