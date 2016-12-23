<div class="footer text-center">
  <div class="bottom-menu">
    <ul>
    @foreach ($categories as $category)
       <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
    @endforeach
    </ul>
  </div>
</div>
