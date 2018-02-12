<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="/store" enctype="multipart/form-data" method="post">
		{{ csrf_field() }}
		<input type="file" name="pdf">
		<br><br><hr>
		<input type="submit" name="Upload" value="Upload">
	</form>
</body>
</html>