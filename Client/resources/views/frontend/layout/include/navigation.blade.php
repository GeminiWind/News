<span class="menu">
</span>
<div class="menu-strip">
    <ul>
        <li>
            <a href="{{route('index')}}">
                Home
            </a>
        </li>
        @for ($i = 0; $i < count($categories); $i++)
        <li>
            <a href="{{ route('category.show',['slugCategory'=>$categories[$i]->slug]) }}">
                {{$categories[$i]->name}}
            </a>
        </li>
@endfor
    </ul>
</div>
<!-- script for menu -->
<script>
    $( "span.menu" ).click(function() {
    $( ".menu-strip" ).slideToggle( "slow", function() {
      // Animation complete.
    });
  });
</script>
<!-- script for menu -->
<div class="clearfix">
</div>