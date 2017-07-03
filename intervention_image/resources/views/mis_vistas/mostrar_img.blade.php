<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>imagen</title>
</head>
<body>
	<h1>Esta es la imagen</h1>
	<p>{{ asset( $ruta ) }}</p>
	<p>{{ $ruta }}</p>
	<img src={{ asset( $ruta ) }} alt="fig1.png">
</body>
</html>