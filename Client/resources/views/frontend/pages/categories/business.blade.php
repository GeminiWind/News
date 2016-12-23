@extends('frontend.layout.desktop')
@section('content')

<div class="main-content">
  <div class="col-md-9 total-news">
    <div class="live-market">
      <h3><span>live</span> market</h3>
      <div class="bull">
        <a href="#"><img src="{{url('frontend/images/business.jpg')}}" alt="" /></a>
      </div>
      <div class="bull-text">
        <a class="bull1" href="singlepage.html">Bulls return after eight days; Sensex up 517 points</a>
        <p>Bharti, HDFC, ONGC, ITC and CIL emerge as top gainers</p>
        <ul>
          <li><a href="singlepage.html">Grandkids sue Vijaypat Singhania over inheritance</a></li>
          <li><a href="singlepage.html">RBI relaxes norms for NPA provisioning</a></li>
          <li><a href="singlepage.html">We expect RBI to cut rates by another 75 bps: UBS executive director</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="posts">
      <div class="left-posts">
        <div class="world-news">
          <div class="main-title-head">
            <h3>from   around   the   world</h3>
            <a href="singlepage.html">More  +</a>
            <div class="clearfix"></div>
          </div>
          <div class="world-news-grids">
            <div class="world-news-grid">
              <img src="{{url('frontend/images/n1.jpg')}}" alt="" />
              <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
              <a href="singlepage.html">Read More</a>
            </div>
            <div class="world-news-grid">
              <img src="{{url('frontend/images/n2.jpg')}}" alt="" />
              <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
              <a href="singlepage.html">Read More</a>
            </div>
            <div class="world-news-grid">
              <img src="{{url('frontend/images/n3.jpg')}}" alt="" />
              <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
              <a href="singlepage.html">Read More</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="latest-articles">
          <div class="main-title-head">
            <h3>latest    articles</h3>
            <a href="singlepage.html">More  +</a>
            <div class="clearfix"></div>
          </div>
          <div class="world-news-grids">
            <div class="world-news-grid">
              <img src="{{url('frontend/images/a1.jpg')}}" alt="" />
              <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
              <a href="singlepage.html">Read More</a>
            </div>
            <div class="world-news-grid">
              <img src="{{url('frontend/images/a2.jpg')}}" alt="" />
              <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
              <a href="singlepage.html">Read More</a>
            </div>
            <div class="world-news-grid">
              <img src="{{url('frontend/images/a3.jpg')}}" alt="" />
              <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur </a>
              <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
              <a href="singlepage.html">Read More</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="gallery">
          <div class="main-title-head">
            <h3>gallery</h3>
            <a href="single.html">More  +</a>
            <div class="clearfix"></div>
          </div>
          <div class="gallery-images">
            <div class="course_demo1">
              <ul id="flexiselDemo1">
                <li>
                  <a href="single.html"><img src="{{url('frontend/images/g1.jpg')}}" alt="" /></a>
                </li>
                <li>
                  <a href="single.html">  <img src="{{url('frontend/images/g2.jpg')}}" alt="" /></a>
                </li>
                <li>
                  <a href="single.html"><img src="{{url('frontend/images/g3.jpg')}}" alt="" /></a>
                </li>
                <li>
                  <a href="single.html"><img src="{{url('frontend/images/g4.jpg')}}" alt="" /></a>
                </li>
              </ul>
            </div>
            <script type="text/javascript">
              $(window).load(function() {
              $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                  portrait: {
                    changePoint:480,
                    visibleItems: 2
                  },
                  landscape: {
                    changePoint:640,
                    visibleItems: 2
                  },
                  tablet: {
                    changePoint:768,
                    visibleItems: 3
                  }
                }
              });

              });

            </script>
          </div>
          <div class="course_demo1">
            <ul id="flexiselDemo">
              <li>
                <a href="single.html"><img src="{{url('frontend/images/g4.jpg')}}" alt="" /></a>
              </li>
              <li>
                <a href="single.html"><img src="{{url('frontend/images/g5.jpg')}}" alt="" /></a>
              </li>
              <li>
                <a href="single.html"><img src="{{url('frontend/images/g6.jpg')}}" alt="" /></a>
              </li>
              <li>
                <a href="single.html"><img src="{{url('frontend/images/g1.jpg')}}" alt="" /></a>
              </li>
            </ul>
          </div>
          <script type="text/javascript">
            $(window).load(function() {
            $("#flexiselDemo").flexisel({
              visibleItems: 3,
              animationSpeed: 1000,
              autoPlay: true,
              autoPlaySpeed: 3000,
              pauseOnHover: true,
              enableResponsiveBreakpoints: true,
              responsiveBreakpoints: {
                portrait: {
                  changePoint:480,
                  visibleItems: 2
                },
                landscape: {
                  changePoint:640,
                  visibleItems: 2
                },
                tablet: {
                  changePoint:768,
                  visibleItems: 3
                }
              }
            });

            });

          </script>
        </div>
        <div class="tech-news">
          <div class="main-title-head">
            <h3>tech     news</h3>
            <a href="singlepage.html">More  +</a>
            <div class="clearfix"></div>
          </div>
          <div class="tech-news-grids">
            <div class="left-tech-news">
              <div class="tech-news-grid span_66">
                <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
              </div>
              <div class="tech-news-grid">
                <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
              </div>
            </div>
            <div class="right-tech-news">
              <div class="tech-news-grid span_66">
                <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
              </div>
              <div class="tech-news-grid">
                <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ...by <a href="#">John Doe </a>  |  29 comments</p>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="right-posts">
        <div class="editorial">
          <h3>top news</h3>
          <div class="editor">
            <a href="singlepage.html"><img src="{{url('frontend/images/te4.jpg')}}" alt="" /></a>
            <a href="singlepage.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
          </div>
          <div class="editor">
            <a href="singlepage.html"><img src="{{url('frontend/images/te3.jpg')}}" alt="" /></a>
            <a href="singlepage.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
          </div>
          <div class="editor">
            <a href="singlepage.html"><img src="{{url('frontend/images/te1.jpg')}}" alt="" /></a>
            <a href="singlepage.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
          </div>
          <div class="editor">
            <a href="singlepage.html"><img src="{{url('frontend/images/te2.jpg')}}" alt="" /></a>
            <a href="singlepage.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
          </div>
        </div>
        <div class="editorial">
          <h3>editorial</h3>
          <div class="editor">
            <a href="singlepage.html"><img src="{{url('frontend/images/finance.jpg')}}" alt="" /></a>
            <a href="singlepage.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
          </div>
          <div class="editor">
            <a href="singlepage.html"><img src="{{url('frontend/images/e3.jpg')}}" alt="" /></a>
            <a href="singlepage.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
@endsection
@section('extra-script')
  <link rel="stylesheet" href="{{url('frontend/css/flexslider.css')}}" type="text/css" media="screen" />
  <script type="text/javascript" src="{{url('frontend/js/jquery.flexisel.js')}}"></script>
@endsection
