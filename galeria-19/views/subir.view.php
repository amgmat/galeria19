<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Galeria</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Subir Foto</h1>
		</div>
	</header>

	<div class="contenedor">
		<form  class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" enctype="multipart/form-data" >

			<label for="foto">Selecciona tu foto</label>
			<input type="file" id="foto" name="foto">

			<label for="titulo">Titulo de la foto</label>
			<input type="text" id="titulo" name="titulo">
			
			<label for="texto">Descripcion:</label>
			<textarea name="texto" id="texto" placeholder="Ingresa una descripción"></textarea>

			<?php if (isset($error)): ?>
				<p class="error"><?php echo $error; ?></p>
			<?php endif ?>
			
			<input type="submit" class="submit" value="Subir foto">
		</form>
	</div>

	<footer>
		<p class="copyright">Galeria creada por Alejandro</p>
	</footer>


</body>
</html>