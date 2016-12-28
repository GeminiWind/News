<div class="col-md-3 side-bar">
  <div class="videos">
    <div class="video-grid">
      <div class="video">
        <a href="single.html"><i class="play"></i></a>
      </div>
      <div class="video-name">
        <a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="video-grid">
      <div class="video">
        <a href="single.html"><i class="play"></i></a>
      </div>
      <div class="video-name">
        <a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="video-grid">
      <div class="video">
        <a href="single.html"><i class="play"></i></a>
      </div>
      <div class="video-name">
        <a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="video-grid">
      <div class="video">
        <a href="single.html"><i class="play"></i></a>
      </div>
      <div class="video-name">
        <a href="single.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit</a>
      </div>
      <div class="clearfix"></div>
    </div>
    <a class="more1" href="single.html">More  +</a>
    <div class="clearfix"></div>
  </div>
  <div class="sign_up text-center">
    <h3>Sign  Up  for    Newsletter</h3>
    <p class="sign">Sign up to receive our free newsletters!</p>
    <form>
      <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
      <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
      <input type="submit" value="submit">
    </form>
    <p class="spam">We do not spam. We value your privacy!</p>
  </div>
  <div class="clearfix"></div>
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
  <div class="subscribe-now">
    <div class="discount">
      <a href="#">
        <div class="save">
          <p>Save</p>
          <p>upto</p>
        </div>
        <div class="percent">
          <h2>50%</h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <h3 class="sn">subscribe     now</h3>
    </a>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
