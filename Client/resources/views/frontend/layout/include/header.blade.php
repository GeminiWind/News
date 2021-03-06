<!-- Display failure of attemp login -->
@if (session('statusLogin')=='error')
  <script type="text/javascript">
    swal({
      title: "Error!",
      text: "Invalid user. Try again!",
      type: "error",
      confirmButtonText: "OK"
    });
  </script>
@endif

<!-- Display status of registatiion  -->
@if (session('statusRegistation')=='success')
  <script type="text/javascript">
    swal({
      title: "Success!",
      text: "Thanks for your registation!",
      type: "success",
      timer: 2000,
      confirmButtonText: "OK"
    });
  </script>
@elseif(session('statusRegistation')=='error')
  <script type="text/javascript">
    swal({
      title: "Error!",
      text: "Invalid input. Try again!",
      type: "error",
      confirmButtonText: "OK"
    });
  </script>
@endif

<div class="container">
<div class="news-paper">
<div class="header">
  <div class="header-left">
    <div class="logo">
      <a href="index.html">
        <h6>the</h6>
        <h1>News <span>Reporter</span></h1>
      </a>
    </div>
  </div>
  <div class="social-icons">
   
    
     @if(Session::has('access_token'))
          <li><a href="{{ route('reader.logout') }}"><i class="rss"></i>Log Out</a></li>
          @else
           <li><a href="{{ route('reader.loginForm') }}"><i class="twiter"></i>Log In</a></li>
           <li><a href="{{ route('reader.registerForm') }}"><i class="facebook"></i>Register</a></li>
        @endif
   
    <li>
      <div class="facebook">
        <div id="fb-root"></div>
        <div id="fb-root"></div>
      </div>
    </li>
  </div>
  <div class="clearfix"></div>
  <div class="header-right">
    <div class="top-menu">
      <ul>
        <li><a href="{{route('index')}}">Home</a></li>
        |
        <li><a href="about.html">About Us</a></li>
        |
        <li><a href="contact.html">Contact Us</a></li>
        |
        @if(Session::has('access_token'))
          <li><a href="{{ route('reader.logout') }}">Logout</a></li>
        @else
        <li>
          <a id="modal_trigger" href="#modal" class="btn1">Login</a>
          <div id="modal" class="popupContainer" style="display:none;">
            <header class="popupHeader">
              <span class="header_title">Login</span>
              <span class="modal_close"><i class="fa fa-times"></i></span>
            </header>
            <section class="popupBody">
              <!-- Social Login -->
              <div class="social_login">
                <div class="">
                  <a href="#" class="social_box fb">
                  <span class="icon"><i class="fa fa-facebook"></i></span>
                  <span class="icon_title">Connect with Facebook</span>
                  </a>
                  <a href="#" class="social_box google">
                  <span class="icon"><i class="fa fa-google-plus"></i></span>
                  <span class="icon_title">Connect with Google</span>
                  </a>
                </div>
                <div class="centeredText">
                  <span>Or use your Email address</span>
                </div>
                <div class="action_btns">
                  <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                  <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                </div>
              </div>
              <!-- Username & Password Login form -->
              <div class="user_login">
                <form action="{{ route('reader.login') }}" method="POST">
                {!! csrf_field()!!}
                  <label>Email / Username</label>
                  <input type="text" name="name" />
                  <br />
                  <label>Password</label>
                  <input type="password" name="password" />
                  <br />
                  <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                  </div>
                  <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><input type="submit" class="btn btn_red" value="Login"></div>
                  </div>
                </form>
                <a href="#" class="forgot_password">Forgot password?</a>
              </div>
              <!-- Register Form -->
              <div class="user_register">
                <form method="POST" action="{{ route('reader.register') }}">
                {!! csrf_field()!!}
                  <label>Full Name</label>
                  <input type="text" name="name" />
                  <br />
                  <label>Email Address</label>
                  <input type="email" name="email" />
                  <br />
                  <label>Password</label>
                  <input type="password" name="password" />
                  <br />
                  <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                  </div>
                  <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><input type="submit" class="btn btn_red" value="Register"></div>
                  </div>
                </form>
              </div>
            </section>
          </div>
          <script type="text/javascript">
            $("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

            $(function(){
              // Calling Login Form
              $("#login_form").click(function(){
                $(".social_login").hide();
                $(".user_login").show();
                return false;
              });

              // Calling Register Form
              $("#register_form").click(function(){
                $(".social_login").hide();
                $(".user_register").show();
                $(".header_title").text('Register');
                return false;
              });

              // Going back to Social Forms
              $(".back_btn").click(function(){
                $(".user_login").hide();
                $(".user_register").hide();
                $(".social_login").show();
                $(".header_title").text('Login');
                return false;
              });

            })
          </script>
        </li>
        @endif
        |
        <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Subscribe</a></li>
      </ul>
    </div>
    <!---pop-up-box---->
    <link href="{{url('frontend/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{url('frontend/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
    <!---//pop-up-box---->
    <div id="small-dialog1" class="mfp-hide">
      <div class="signup">
        <h3>Subscribe</h3>
        <h4>Enter Your Valid E-mail</h4>
        <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
        <div class="clearfix"></div>
        <input type="submit"  value="Subscribe Now"/>
      </div>
    </div>
    <script>
      $(document).ready(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });

      });
    </script>
    <div >
<form id="form-beer_v1" name="form-beer_v1">
    <div class="typeahead__container">
        <div class="typeahead__field">
 
            <span class="typeahead__query">
                <input class="js-typeahead-beer_v1" name="beer_v1[query]" placeholder="Search" autocomplete="off" type="search">
            </span>
            <span class="typeahead__button">
                <button type="submit">
                    <i class="typeahead__search-icon"></i>
                </button>
            </span>
 
        </div>
    </div>
</form>
<script type="text/javascript" src="{{url('frontend/js/search.js')}}"></script>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
<div class="clearfix"></div>

