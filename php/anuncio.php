<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" type="text/css" href="css/HojaEstilos.css">
	<meta charset="utf-8">

</head>
<body>
	<!--Pasamos el formulario en la página formulario.php !-->
	<form action="formulario.php" method="REQUEST">
		<div class="div4">
			<span>
				<img src="img/logo.png" style="vertical-align: middle; margin-left: 2.3%; margin-right:2.3%;" >
				<input placeholder="Escriba aquí el anuncio que quiera buscar" type="text2" name="producto" size="40"">
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
				
				echo "<img class='imagendetalle' src='img/$anunci[anu_foto].jpg'>";
				echo "<div class='divtext'>";
				echo "<div class='divtitulo'>";
				echo "Nombre: $anunci[anu_titol]<br>";
				echo "</div>";
				echo "Fecha anuncio: $anunci[anu_data_anunci]<br>";
				echo "Fecha robo: $anunci[anu_data_robatori]<br>";
				echo "Lugar del robo: $anunci[anu_ubicacio_robatori]<br>";
				echo "Marca: $anunci[anu_marca]<br>";
				echo "Modelo: $anunci[anu_model]<br>";
				echo "Marca: $anunci[anu_marca]<br>";
				echo "Color: $anunci[anu_color]<br>";
				echo "Número de serie: $anunci[anu_numero_serie]<br>";
				echo "Antiguitat: $anunci[anu_antiguitat]<br>";
				echo "Talla: $anunci[anu_talla]<br>";
				echo "Descripción de la bici: $anunci[anu_descripcio]<br>";
				echo "Descripción del robo: $anunci[anu_descripcio_robatori]<br>";
				echo "Compensación: $anunci[anu_compensacio]€<br>";
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
