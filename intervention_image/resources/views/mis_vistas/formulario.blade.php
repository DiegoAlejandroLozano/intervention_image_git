<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Guardar imagen</title>
</head>
<body>
	
	<h1>Guarde su imagen</h1>

	<form action={{ route('datos_recibidos') }} enctype="multipart/form-data" method="POST">
		{{ csrf_field() }}
		
		<input type="file" value="suba su imagen" name="imagen">
		<input type="submit" value="Enviar">

	</form>

</body>
</html>