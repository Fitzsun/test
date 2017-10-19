<div id="content-bot" class="animate-this">
  <div class="friendly-link">
    <p>友情链接</p>
    <ul class="clearfix">
      @foreach($links as $key=>$link)
        @if($key<3 || $key>5 && $key<9)
        <li class="hiding animated" data-animation="fadeInRight" data-delay="300"><a href="{{ $link->link_href }}" rel="nofollow">{{ $link->link_name }}</a></li>
        @else
        <li class="hiding animated" data-animation="fadeInLeft" data-delay="300"><a href="{{ $link->link_href }}" rel="nofollow">{{ $link->link_name }}</a></li>
        @endif
      @endforeach
    </ul> 
  </div>
</div>