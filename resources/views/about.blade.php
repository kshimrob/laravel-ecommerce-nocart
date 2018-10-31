@extends('layout')
@section('content')
<div class="container about">
    <h1>OUR <span>mission</span> is Lorem ipsum dolor sit amet, consectetur adipiscing <span>elit.</span> <span>Suspendisse </span>diam nulla, pellentesque id. </h1>
    <div class="intro">
      <div class="row">
        <div class="img"><img src="{{ asset('img/placeholder.png') }}"></div>
        <div class="text">
          <h2>Our Story</h2>
          <p class="copy">Intro copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nulla, pellentesque id lacus eget, rhoncus feugiat lacus.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
      </div>
      <div class="row">
        <div class="text">
          <h2>Our Story</h2>
          <p class="copy">Intro copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nulla, pellentesque id lacus eget, rhoncus feugiat lacus.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
        <div class="img"><img src="{{ asset('img/placeholder.png') }}"></div>
      </div>
    </div>

    @component('components.howitworks')
    @endcomponent

    <div class="blog-posts-preview">
        <h2>Inspiring Stories</h2>
        <div class="col-md-3">
        @foreach ($posts as $post)
          <a href="{{ route('post.show', $post->slug) }}" class="post">
              <div>
                  <div class="post-img" style="background-image: url({{ Voyager::image( $post->image ) }})"></div>
                  <h3>{{ $post->title }}</h3> 
                  <p>{{ str_limit($post->excerpt, $limit = 150, $end= '...') }}<span>Read More</span></p>
              </div>
          </a>
        @endforeach
        </div>
        <div class="more-posts">
                <a href="{{ route('blog.index') }}" class="yellow-btn">See More</a>
        </div>
    </div> <!-- end blog posts preview -->
</div>
    @component('components.searchevents')
    @endcomponent
@endsection