<div class="posts-block extra">
	@foreach($posts as $post)
	<div class="card">
		<div class="image" style="background-image:url({{ Voyager::image($post->image) }})"></div>
		<div class="text">
			<h3>{{ $post->title }}</h3>
			<p>{{ str_limit($post->excerpt, $limit = 150, $end= '...') }} <a href="{{ route('post.show', $post->slug) }}">Read More</a></p>
		</div>
	</div>
	@endforeach
</div>