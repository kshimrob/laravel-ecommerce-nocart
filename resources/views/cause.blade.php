<!DOCTYPE html>
<html>
<head>
	<title>{{ $cause->name }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
    <h1>{{ $cause->name }}</h1>
		<div class="row">
        <img src="{{ Voyager::image( $cause->image ) }}" style="width:100%">
        <h2>{{ $cause->name }}</h2>
        <p>{!! $cause->description !!}</p>
		</div>
	</div>
</body>
</html>