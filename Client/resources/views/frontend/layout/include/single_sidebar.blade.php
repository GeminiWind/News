<div class="col-md-3 side-bar">
  <div class="popular">
    <div class="main-title-head">
      <h5>Related</h5>
      <div class="clearfix"></div>
    </div>
    <div class="popular-news">
    @foreach ($related_articles as $r_article)
     <div class="popular-grid">
        <i>{{ $r_article->created_at }} </i>
        <p>{{ str_limit($r_article->title, $limit = 55, $end = "...")}}  <a href="{{ route('article.show', $r_article->slug) }}">Read More</a></p>
      </div>
    @endforeach 
      <a class="more" href="singlepage.html">More  +</a>
    </div>
  </div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
