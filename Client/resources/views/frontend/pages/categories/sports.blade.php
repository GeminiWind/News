@extends('frontend.layout.desktop')
@section('content')
<div class="main-content">
  <div class="col-md-9 total-news">
    <section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <a href="singlepage.html"><img src="{{url('frontend/images/s1.jpg')}}" class="img-responsive" alt="" /></a>
          </li>
          <li>
            <a href="singlepage.html"><img src="{{url('frontend/images/s2.jpg')}}" class="img-responsive" alt="" /></a>
          </li>
          <li>
            <a href="singlepage.html"><img src="{{url('frontend/images/s3.jpg')}}" class="img-responsive" alt="" /></a>
          </li>
        </ul>
      </div>
    </section>
    <!-- FlexSlider -->
    <script type="text/javascript">
      $(function(){
        SyntaxHighlighter.all();
      });
      $(window).load(function(){
        $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
        });
      });

    </script>
    <div class="sports-top">
      <div class="s-grid-left">
        <div class="cricket">
          <h3>CRICKET</h3>
          <div class="c-sports-main">
            <div class="c-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/crt1.jpg')}}" alt="" /></a>
            </div>
            <div class="c-text">
              <p>cricket</p>
              <a class="power" href="singlepage.html">Power Reigns Supreme at 11th Cricket World Cup</a>
              <a class="reu" href="singlepage.html">Reuters</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/crt2.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>cricket</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/crt3.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>cricket</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="s-grid-right">
        <div class="cricket">
          <h3>football</h3>
          <div class="c-sports-main">
            <div class="c-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/fcrt1.jpg')}}" alt="" /></a>
            </div>
            <div class="c-text">
              <p>football</p>
              <a class="power" href="singlepage.html">Power Reigns Supreme at 11th Cricket World Cup</a>
              <a class="reu" href="singlepage.html">Reuters</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/fcrt2.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>football</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/fcrt3.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>football</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="sports-top">
      <div class="s-grid-left">
        <div class="cricket">
          <h3>tennis</h3>
          <div class="c-sports-main">
            <div class="c-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/tcrt1.jpg')}}" alt="" /></a>
            </div>
            <div class="c-text">
              <p>tennis</p>
              <a class="power" href="singlepage.html">Power Reigns Supreme at 11th Cricket World Cup</a>
              <a class="reu" href="singlepage.html">Reuters</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/tcrt2.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>tennis</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/tcrt3.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>tennis</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="s-grid-right">
        <div class="cricket">
          <h3>formula1</h3>
          <div class="c-sports-main">
            <div class="c-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/pcrt1.jpg')}}" alt="" /></a>
            </div>
            <div class="c-text">
              <p>lorem</p>
              <a class="power" href="singlepage.html">Power Reigns Supreme at 11th Cricket World Cup</a>
              <a class="reu" href="singlepage.html">Reuters</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/pcrt2.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>lorem</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="s-grid-small">
            <div class="sc-image">
              <a href="singlepage.html"><img src="{{url('frontend/images/pcrt3.jpg')}}" alt="" /></a>
            </div>
            <div class="sc-text">
              <p>lorem</p>
              <a class="power" href="singlepage.html">nternational Cricket Council President Walks out of World Cup Final After Trophy Snub</a>
              <a class="reu" href="singlepage.html">Press Trust Of India</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="photos">
      <h3>PHOTOS</h3>
      <div class="course_demo1">
        <ul id="flexiselDemo">
          <li>
            <a href="single.html"><img src="{{url('frontend/images/sg4.jpg')}}" alt="" /></a>
          </li>
          <li>
            <a href="single.html"><img src="{{url('frontend/images/sg5.jpg')}}" alt="" /></a>
          </li>
          <li>
            <a href="single.html"><img src="{{url('frontend/images/sg6.jpg')}}" alt="" /></a>
          </li>
          <li>
            <a href="single.html"><img src="{{url('frontend/images/sg1.jpg')}}" alt="" /></a>
          </li>
        </ul>
      </div>
      <script type="text/javascript">
        $(window).load(function() {
        $("#flexiselDemo").flexisel({
          visibleItems: 4,
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
  </div>
</div>
@endsection
@section('extra-script')
  <link rel="stylesheet" href="{{url('frontend/css/flexslider.css')}}" type="text/css" media="screen" />
  <script type="text/javascript" src="{{url('frontend/js/jquery.flexisel.js')}}"></script>
@endsection
