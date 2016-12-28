@extends('frontend.layout.desktop')
@section('content')

<div class="main-content">
<h3>Tag: {{ $tag->name }}</h3>
<hr>
  <div class="col-md-9 total-news">
    @foreach (array_chunk($articles, 3) as $chunks)
       <div class="technology">
      <div class="tech-main">
      @foreach ($chunks as $chunk)
         <div class="col-md-4 tech">
          <a  href="{{ route('article.show', $chunk->slug) }}"><img src="{{config('myserver.server').$chunk->url_image}}" alt="" width="250px" height="150px" /></a>
          <a class="power" href="{{ route('article.show', $chunk->slug) }}">{{ str_limit($chunk->title, $limit = 100, $end = "...") }}</a>
        </div>
      @endforeach
       
        <div class="clearfix"></div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
@section('right-sidebar')
  @include('frontend.layout.include.sidebar')
@endsection
@section('extra-script')
  <link rel="stylesheet" href="{{url('frontend/css/flexslider.css')}}" type="text/css" media="screen" />
  <script type="text/javascript" src="{{url('frontend/js/jquery.flexisel.js')}}"></script>
@endsection
