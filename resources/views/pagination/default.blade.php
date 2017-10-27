@if ($paginator->lastPage() > 1)

<ul id="pagination">
    <li>
        <a href="{{ $paginator->url(1) }}" class="item{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">首页</a>
    </li>

    @if ($paginator->onFirstPage())
        <li class="previous disabled"><a>上一页</a></li>
    @else
        <li class="previous"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">上一页</a></li>
    @endif

    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <a href="{{ $paginator->url($i) }}" class="item{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            {{ $i }}
        </a>
    @endfor

    @if ($paginator->hasMorePages())
        <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">下一页</a></li>
    @else
        <li class="next disabled"><a>下一页</a></li>
    @endif

    <li>
        <a href="{{ $paginator->url($paginator->lastPage()) }}" class="item{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">尾页</a>
    </li>
    <li>共 {{ ceil($paginator->total()/$paginator->count()) }} 页</li>
</ul>

@endif