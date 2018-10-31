<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="custom_new.css">
	<?php 
		require "Noticia.php";
		$id = $_GET["val"];
		$news = Noticia::getNew($id);
	 ?>
	<title>
		<?php echo $news->title ?>
	</title>
</head>
<body>
	<div class="nav">
		<ul>
			<li><a href="index.php">Inicio</a></li>
			<li><a href="somos.html">Somos</a></li>
			<li>
				<a href="#">Empresas</a>
				<ul class="dropdown">
					<li><a href="calinauplio.html">Calinauplio</a></li>
					<li><a href="aquaindesa.html">Aquaindesa</a></li>
					<li><a href="crisanticlub.html">Crisanticlub</a></li>
				</ul>
			</li>
			<li><a href="noticias.php">Noticias</a></li> 
			<li><a href="contacto-cali.html">Contacto</a></li>
		</ul>
	</div>

	<div class="new-container">
		<h1>
			<!--Titulo-->
			<?php 
				echo $news->title;
			 ?>
		</h1>

		<h2>
			<!--Fecha-->
			<?php 
				echo $news->date;
			 ?>
		</h2>

		<?php 
			echo "<img src='" . $news->img . "'>";
		 ?>

		<p>
			<?php 
				echo $news->description;
			 ?>
		</p>
	</div>
</body>
</html>