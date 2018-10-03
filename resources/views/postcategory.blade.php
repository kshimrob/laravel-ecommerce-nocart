<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
    <h1>{{ $category->name }}</h1>
    <div class="post-categories">
      <h2>Categories</h2>
      <ul>
        <li><a href="/blog">All Categories</a></li>
        @foreach ($categories as $category)
        <li><a href="{{ route('postcategory.show', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
      </ul>
    </div>
		<div class="row">
      @foreach ($posts as $post)
      <div class="col-md-4">
          <a href="{{ route('post.show', $post->slug) }}">
              <img style="width: 100%;" src="{{ Voyager::image( $post->image ) }}">
              <h3>{{ $post->title }}</h3>
              <p>{{ $post->excerpt }}</p>
          </a>
      </div>
      @endforeach
		</div>
	</div>

</body>
</html>