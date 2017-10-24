<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">

	<link rel="stylesheet" type="text/css" href="css/HojaEstilos.css" media="screen and (min-width:1317px)">
	<link rel="stylesheet" type="text/css" href="css/HojaEstilos_medio.css" media="screen and (min-width:1000px) and (max-width:1316px)">
	<link rel="stylesheet" type="text/css" href="css/HojaEstilos_pequeño.css" media="screen and (min-width:691px) and (max-width:999px)">
	<link rel="stylesheet" type="text/css" href="css/HojaEstilos_movil.css" media="screen  and (max-width:690px)">

	<meta charset="utf-8">

</head>
<body>
	<!--Pasamos el formulario en la página formulario.php !-->
	<form action="formulario.php" method="REQUEST">
		<div class='color2'>
					¿Le han robado la bici?    
					<form action="addanun.php" method="REQUEST">
						<input type="submit" name="nuevo" value='Registro'>
					</form>
					<!--<a href="addanun.php"><button class="registro">Crear anuncio</button></a><br>-->
				</div>
		<div class="div4">
			<span>
				<a href="formulario.php"><img id="img" src="img/logo.png" style="vertical-align: middle; margin-left: 2.3%; margin-right:2.3%;" ></a>
				<input id="busqueda" placeholder="Escriba aquí el anuncio que quiera buscar" type="text2" name="producto" size="40"">
				<button type="submit" style="padding: 0px; border-width: 0px; background-color: white; ">
					<img src="img/buscador.png" alt="submit" style="vertical-align: middle;" width="45px" height="45px">
				</button>
				
			</span>

		</div>

	</form>

	<?php


	$id=$_GET['id'];
	$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");

	if(!$conexion){
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	} else {
		mysqli_query($conexion, "SET NAMES 'utf8'");

		$j = "SELECT * FROM anunci WHERE anu_id='$id'";

		$resultados = mysqli_query($conexion, $j);

		if(mysqli_num_rows($resultados)>0){
			while($anunci = mysqli_fetch_array($resultados)){
				echo "<div class='divdetalle'>";
				
				
				echo "<div class='divtext'>";
				echo "<div class='divtitulo'>";
				echo "Nombre: $anunci[anu_titol]<br>";
				echo "</div>";
				echo "<img class='imagendetalle' src='img/$anunci[anu_foto].jpg'>";
				echo "<div class='textoendetalle'>";
				echo "<b>Fecha anuncio:</b> $anunci[anu_data_anunci]<br>";
				echo "<b>Fecha robo:</b> $anunci[anu_data_robatori]<br>";
				echo "<b>Lugar del robo:</b> $anunci[anu_ubicacio_robatori]<br>";
				echo "<b>Marca:</b> $anunci[anu_marca]<br>";
				echo "<b>Modelo:</b> $anunci[anu_model]<br>";
				echo "<b>Marca:</b> $anunci[anu_marca]<br>";
				echo "<b>Color:</b> $anunci[anu_color]<br>";
				echo "<b>Número de serie:</b> $anunci[anu_numero_serie]<br>";
				echo "<b>Antigüedad:</b> $anunci[anu_antiguitat]<br>";
				echo "<b>Talla:</b> $anunci[anu_talla]<br>";
				echo "<b>Descripción de la bici:</b> $anunci[anu_descripcio]<br>";
				echo "<b>Descripción del robo:</b> $anunci[anu_descripcio_robatori]<br>";
				echo "<b>Compensación:</b> $anunci[anu_compensacio]€<br>";
				echo"</div>";
				echo "</div>";
				echo "</div>";
			}	
		}else{
			echo "Lo sentimos, ha ocurrido un error inesperado.";
		}
	}

	?>

	<img class="">

</body>
</html>
