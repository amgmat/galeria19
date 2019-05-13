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
			<h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])){
			echo $foto['titulo'];	
			}else{
			echo $foto['imagen'];
			} ?> </h1>			
		</div>
	</header>

	<div class="contenedor">
		<div class="foto">
			<img src="fotos/<?php echo $foto['imagen'];?>" alt="">
			<p class="texto"><?php echo $foto['texto']; ?></p>
			<a href="index.php" class="regresar"><ii class="fas fa-long-arrow-alt-left"></ii> Regresar</a>
		</div>
		
	</div>

	<footer>
		<p class="copyright">Galeria creada por Alejandro</p>
	</footer>


</body>
</html>