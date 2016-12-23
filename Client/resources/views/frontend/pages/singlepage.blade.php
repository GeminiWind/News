@extends('frontend.layout.desktop')
@section('content')

<div class="blog-main-content">
  <div class="col-md-9 total-news">
    <div class="grids">
      <div class="grid box">
        <div class="grid-header">
          <a class="gotosingle" href="singlepage.html">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod . </a>
          <ul>
            <li><span>Post by<a href="#"> Admin</a> on sunday, March 05, 2015 </span></li>
            <li><a href="#">5 comments</a></li>
          </ul>
        </div>
        <div class="singlepage">
          <a href="#"><img src="{{url('frontend/images/grid-img.jpg')}}" /></a>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium perspiciatis unde omnis iste natus error sit voluptatem accusantiumdoloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<a href="#">...</a></p>
          <div class="clearfix"> </div>
        </div>
        <div class="comments">
          <ul>
            <li><a href="#"><img src="{{url('frontend/images/views.png')}}" title="view" /></a></li>
            <li><a href="#"><img src="{{url('frontend/images/likes.png')}}" title="likes" /></a></li>
            <li><a href="#"><img src="{{url('frontend/images/link.png')}}" title="link" /></a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    <ul class="comment-list">
      <h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author">admin</a></h5>
      <li>
        <img src="{{url('frontend/images/avatar.png')}}" class="img-responsive" alt="">
        <div class="desc">
          <p>View all posts by: <a href="#" title="Posts by admin" rel="author">admin</a></p>
        </div>
        <div class="clearfix"></div>
      </li>
    </ul>
    <div class="content-form">
      <h3>Leave a comment</h3>
      <form>
        <input type="text" placeholder="Name" required/>
        <input type="text" placeholder="Email" required/>
        <input type="text" placeholder="Phone" required/>
        <textarea placeholder="Message"></textarea>
        <input type="submit" value="SEND"/>
      </form>
    </div>
  </div>
</div>
@endsection
