<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

        <img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
        <h1>{{ $post->title }}</h1>
        <div class="single-post-categories">

        </div>
        <p class="post-published">Published on {{ $post->published_on }}</p>
				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div>

</body>
</html>