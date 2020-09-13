<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>
</head>
<body>

<h1>Data Employer</h1>
<h3>www.malasngoding.com</h3>

<ul>
	@foreach($employer as $e)
		<li>{{ "Nama : ". $e->nama . ' | Alamat : ' . $e->alamat }}</li>
	@endforeach
</ul>

</body>
</html>