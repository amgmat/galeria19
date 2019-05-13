<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<title>Galeria</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<h1 class="titulo">Mi Galeria en php y mysql</h1>
		</div>
	</header>

	<section class="fotos">
		<div class="contenedor">
			<?php foreach ($fotos as $foto): ?>
				<div class="thumb">
					<a href="foto.php?id=<?php echo $foto['id'];?>">
						<img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
					</a>
				</div>
			<?php endforeach; ?>
			
			<div class="paginacion">
				<?php if ($pagina_actual > 1): ?>
					<a href="index.php?p=<?php echo $pagina_actual -1; ?>" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i> Página Anterior</a>
				<?php endif ?>

				<?php if ($total_paginas != $pagina_actual): ?>
					<a href="index.php?p=<?php echo $pagina_actual +1; ?>" class="derecha">Página Siguiente <i class="fas fa-long-arrow-alt-right"></i> </a>
				<?php endif ?>
				<!-- <a href="#" class="izquierda"><i class="fas fa-long-arrow-alt-left"></i> Página Anterior</a>

				<a href="#" class="derecha">Página Siguiente <i class="fas fa-long-arrow-alt-right"></i> </a> -->
			</div>
		</div>
	</section>

	<footer>
		<p class="copyright">Galeria creada por Alejandro</p>
	</footer>


</body>
</html>