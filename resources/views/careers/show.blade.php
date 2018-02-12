<!DOCTYPE>
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title>Quatess Upload Post</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	 <center><h1>Showing all post Here</h1></center> 	
	 <img src="" alt="image logo">
	 @foreach($comments as $comment)
	 {{ $comment->name}}
	 <iframe src ="{{ link_to_asset('images/uploads/'.$comment->resume) }}" width="300px" height="300px"></iframe>
	 @endforeach
</body>
</html>
