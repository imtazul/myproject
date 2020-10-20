<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	@if(Session::has('success'))
		<span style="color: green;">{{ Session::get('success') }}</span>
	@endif
	<h2>Image Uploading</h2>
	<form method="post" action="{{ URL::to('uploadimage') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<input type="file" name="filename[]" id="image" multiple="multiple"><br><br>
	
		<input type="submit" value="Submit">
	</form>
	@foreach($files as $file)
		<img src="{{ URL::to('/uploads/thumbnail/'.$file->filename) }}" alt="">
	@endforeach
</body>
</html>