<div class="col-md-3 side-bar">
  <div class="clearfix"></div>
  <div class="popular">
    <div class="main-title-head">
      <h5>popular</h5>
      <h4> Most    read</h4>
      <div class="clearfix"></div>
    </div>
    <div class="popular-news">
    @foreach ($populars as $popular)
       <div class="popular-grid">
        <i>{{ $popular->created_at }} </i>
        <p>{{ str_limit($popular->title, $limit = 55, $end = "...")}}  <a href="{{ route('article.show', $popular->slug) }}">Read More</a></p>
      </div>
    @endforeach
     
      <a class="more" href="singlepage.html">More  +</a>
    </div>
  </div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
