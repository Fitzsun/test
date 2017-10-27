@extends('layouts.app')

@section('title')
  产品中心
@endsection

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection


@section('content')
<div id="wrapper">
  <style type="text/css">
  #banner{
    background:url(/static/images/proBanner.jpg) no-repeat scroll center;
  }
</style>
<div id="banner"></div>
<section>
  <main>
    <aside>
      <dl>
        <dt>产品中心</dt>
        <dd>product center</dd>
        <dd>
          <svg width="75" height="4" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <line x1="0" y1="2" x2="32" y2="2" stroke="#fff" stroke-width="1"/>
            <circle cx="37" cy="2" r="1" fill="#fff"/>
            <line x1="72" y1="2" x2="42" y2="2" stroke="#fff" stroke-width="1"/>
          </svg>
        </dd>
      </dl>
      <nav>
        <ul class="accordion-container radio">
          @foreach($navs as $nav)
            @if($nav->parent_id === 0)
              <li class="accordion-category">
                <input type="radio" name="a-toggle" id="{{ $nav->label }}" checked>      
                <label for="{{ $nav->label }}" class="accordion-title">{{ $nav->name }}</label>

                <ul class="accordion-items">   
                  @foreach($nav->allChildrenNavs as $li2) 
                    <li><a href="{{ $li2->product_path }}">{{ $li2->name }}</a></li>    
                  @endforeach                
                </ul>      
              </li>
            @endif
          @endforeach
          {{--  <li class="accordion-category">
            <input type="radio" name="a-toggle" id="one" checked>      
            <label for="one" class="accordion-title">新风系统</label>
            <ul class="accordion-items">    
              <li><a href="#">家用新风系统</a></li>                    
              <li><a href="#">别墅新风系统</a></li>                     
              <li><a href="#">商用新风系统</a></li>                                   
              <li><a href="#">配件系列</a></li>                                   
            </ul>      
          </li>
          <li class="accordion-category">
            <input id="two" type="radio" name="a-toggle">      
            <label for="two" class="accordion-title">除甲醛试剂</label>
            <ul class="accordion-items">
              <li><a href="#">Item One</a></li>                     
              <li><a href="#">Item Two</a></li>                     
            </ul>      
          </li>  
          <li class="accordion-category">
            <input id="tre" type="radio" name="a-toggle">      
            <label for="tre" class="accordion-title">除甲醛设备</label>
            <ul class="accordion-items">
              <li><a href="#">Item One</a></li>          
              <li><a href="#">Item Two</a></li>          
              <li><a href="#">Item Three</a></li>          
              <li><a href="#">Item Four</a></li>          
            </ul>
          </li>  --}}
        </ul>
      </nav>
    </aside>
    <div class="list-items">
      <ul>
        @foreach($products as $key=>$product)
          <li class="hiding animated" data-animation="fadeInUp" data-delay="{{ ($key+1)*50 }}">
            <dl>
              <dt><img src="{{ $product->product_thumbnail_url }}" alt="家用壁挂式新风系统"></dt>
              <dd>
                <p>{{ $product->product_name }}</p>
                <a href="productDetail/{{ $product->id }}" title="家用壁挂式新风系统">快速报价</a>
              </dd>
            </dl>
          </li>
        @endforeach
      </ul>
      @include('pagination.default', ['paginator' => $products])
    </div>  
  </main>
</section>
  
</div>
<div id="content-bot">
  <div class="friendly-link">
    <p>友情链接</p>
    <ul class="clearfix">
      @foreach($links as $link)
        <li><a href="{{ $link->link_href }}">{{ $link->link_name }}</a></li>
      @endforeach
    </ul> 
  </div>
</div>
@endsection