@if ($paginator->lastPage() > 1)

<ul class="ui pagination menu">
    <li>
        <a href="{{ $paginator->url(1) }}" class="item{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <i class="icon left arrow"></i> 
            首页
        </a>
    </li>
    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <a href="{{ $paginator->url($i) }}" class="item{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
            {{ $i }}
        </a>
    @endfor
    <li>
        <a href="{{ $paginator->url($paginator->lastPage()) }}" class="item{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"> 
            末页 
            <i class="glyphicon glyphicon-right"></i>
        </a>
    </li>
</ul>

@endif