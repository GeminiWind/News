@extends('frontend.layout.desktop')
@section('content')
@if (session('statusComment')=='success')
  <script type="text/javascript">
    swal({
    title: "Success!",
    text: "Thanks for your comment!",
    type: "success",
    timer:1000,
    confirmButtonText: "OK"
  });
  </script>
@endif
<div class="movie-main-content">
  <div class="col-md-9 total-news">
    <div class="grids">
      <div class="msingle-grid box">
        <div class="grid-header">
          <h3>{{$article->title}} . </h3>
          <ul>
            <li><span>Post By <a href="{{ route('author.show', $author->slug) }}"> {{$author->name}}</a> on {{\Carbon\Carbon::parse($article->created_at)->format('jS F, Y g:i a')}}</span></li>
            <li><a href="#">5 comments</a></li>
          </ul>
        </div>
        <div class="singlepage">
          <a href="#"><img src="{{config('myserver.server').$article->url_image}}" /></a>
          {!!$article->content!!}
          <div class="clearfix"> </div>
        </div>
    <div class="single">
       <h3>Tags:</h3>
    @foreach ($tags as $tag)
        <a href="{{ route('tag.show', $tag->slug) }}"> <i class="fa fa-tag">{{ $tag->name }}</i> </a>
    @endforeach
 

     </div>
     <!-- <div class="best-review">
       <h4>Best Reader's Review</h4>
       <p>Excellent Movie and great performance by Lorem, one of the finest thriller of recent  like Aldus PageMaker including versions of Lorem Ipsum.</p>
       <p><span>Neeraj Upadhyay (Noida)</span> 16/03/2015 at 12:14 PM</p>
     </div>  -->
        <div class="story-review">
          <h4>REVIEW:</h4>
          <p>{{$article->short_intro}}</p>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <ul class="comment-list">
      <h5 class="post-author_head">Written by <a href="{{ route('author.show', $author->slug) }}" title="Posts by admin" rel="author">{{$author->name}}</a></h5>
      <li>
        <img src="{{ config('myserver.server').$author->img_url}}" class="img-responsive" alt="">
        <div class="desc">
          <p>View all posts by: <a href="{{ route('author.show', $author->slug) }}" title="Posts by admin" rel="author">{{$author->name}}</a></p>
        </div>
        <div class="clearfix"></div>
      </li>
    </ul>
     <div class="clearfix"> </div>
     <hr>
    <div class="comment-area">
    <h3>Comment()</h3>
     <ul class="comment-list">
     @foreach ($comments as $comment)
       <li style="padding: 20px">
        <img src="{{ config('myserver.server').'/images/user/default.png'}}" class="img-responsive" alt="">
        <div class="desc">
          <p>{!! $comment->user_id !!}</p>
          <p>{!! $comment->content !!}</p>
          <p>{{$comment->created_at}}</p>
        </div>
        <div class="clearfix"></div>
      </li>
     @endforeach
    </ul>
    </div>
    <div class="content-form">
      <h3>Leave a comment</h3>
      @if(Session::has('access_token'))
        <h4>You are comment as  </h4>
        <form method="POST" action="{{ route('comment.store',['slugArticle'=>$article->slug]) }}">
          {!! csrf_field()!!}
          <input type="hidden" name="article_id" value="{{$article->id}}">
          <textarea placeholder="Message" name="content"></textarea>
          <input type="submit" value="SEND"/>    
        </form>
      @else
        <h4>You need to log in to comment</h4>
      @endif
    </div>
  </div>
</div>
@endsection
@section('right-sidebar')
  @include('frontend.layout.include.single_sidebar',['related_articles' => $related_articles])
@endsection
@section('extra-script')
@endsection
