@extends('layout')
@section('content')
	<div class="blog container">
    <div class="sidebar">
      <h1>Blog</h1>
      <h2>Categories</h2>
      <ul>
        <li><a href="/blog">All Categories</a></li>
        @foreach ($categories as $category)
        <li><a href="{{ route('postcategory.show', $category->slug) }}">{{ $category->name }}</a></li>
        @endforeach
      </ul>
  </div>
  
  <div class="container">
        <div class="col-md-12" id="post-data">
          @include('data')
        </div>
  </div>
      
  <div class="ajax-load text-center" style="display:none">
    <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
  </div>
</div>
@endsection

@section('extra-js')
<script type="text/javascript">
	var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
	    }
	});


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
	            type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == " "){
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#post-data").append(data.html);
	        })
	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>
@endsection