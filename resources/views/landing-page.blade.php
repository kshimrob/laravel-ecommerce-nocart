@extends('layout')
@section('content')
<div class="header-container">
    <div class="landing-header">
        <video autoplay loop id="bgvid">
            <source src="https://s3.us-east-2.amazonaws.com/elasticbeanstalk-us-east-2-698644334116/home-vid.mp4" type="video/mp4" />
        </video>
        <div class="text">
            <h1>Join the Crowd. Be the Change.</h1>
            <p>Intro copy. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse diam nulla, pelletesque.</p>
            <p><a href="/" class="yellow-btn">Learn More</a></p>
            <div class="home-search">
                <form>
                    <p>Search by Event, Performer, Venue, or Team</p>
                    <input type="text" name="search">
                    <button type="submit">Search</button>
                </form>
                <p>Find events near you:</p>
                <ul>
                    <li><a href="/">Music</a></li>
                    <li><a href="/">Comedy</a></li>
                    <li><a href="/">Theater</a></li>
                    <li><a href="/">Sports</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
    <div class="featured-tickets">
        <h2>Popular Near You</h2>
        <div class="col-md-3">
            @foreach ($products as $product)
                <div class="product">
                    <div class="ticket-img" style="background-image: url({{ productImage($product->image) }})"></div>
                    <p class="product-name">{{ $product->name }}</p>
                    <p>{{ $product->date }}</p>
                    <p>{{ $product->venue }}</p>
                    <a href="{{ route('shop.show', $product->slug) }}" class="red-btn">Read More</a>
                </div>
            @endforeach
        </div>
        <div class="more-tickets">
            <a href="{{ route('shop.index') }}" class="yellow-btn">See More</a>
        </div>
    </div> <!-- end tickets -->

    <div class="long-promos">
        @foreach ($long_promos as $promo)
        <div class="single-long-promo clearfix">
            <div class="text">
                <h2>{{ $promo->title }}</h2>
                <p class="subheader">{{ $promo->second_headline }}</p>
                <p>{{ $promo->description }}</p>
                <a href="{{ $promo->url }}" class="red-btn">See Tickets</a>
            </div>
            <div class="promo-img" style="background-image: url({{ Voyager::image($promo->image) }});"></div>
        </div>
        @endforeach
    </div> <!-- end long promos -->

    <div class="short-promos">
        @foreach ($short_promos as $promo)
        <div class="single-short-promo clearfix">
            <div class="text">
                <h2>{{ $promo->title }}</h2>
                <p class="subheader">{{ $promo->second_headline }}</p>
                <p>{{ $promo->description }}</p>
                <a href="{{ $promo->url }}" class="red-btn">See Tickets</a>
            </div>
            <div class="promo-img" style="background-image: url({{ Voyager::image($promo->image) }});"></div>
        </div>
        @endforeach
    </div> <!-- end short promos -->

    <div class="blog-posts-preview">
        <h2>Inspiring Stories</h2>
        <div class="col-md-3">
        @foreach ($posts as $post)
            <div class="post">
                <div class="post-img" style="background-image: url({{ Voyager::image( $post->image ) }})"></div>
                <h3>{{ $post->title }}</h3> 
                <p>{{ $post->excerpt }}</p>
                <a href="{{ route('post.show', $post->slug) }}">Read More</a>
            </div>
        @endforeach
        </div>
        <div class="more-posts">
                <a href="{{ route('blog.index') }}" class="yellow-btn">See More</a>
        </div>
    </div> <!-- end blog posts preview -->
@endsection