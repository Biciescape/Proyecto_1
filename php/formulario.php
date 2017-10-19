<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="HojaEstilos.css">
</head>
<body>
	
	<form action"formulario1.php" method="REQUEST">
		<div class="div4">	
			<input type="text" name"producto" size="40" ><br></br>
		</div>
		<div class="div2">
			<?php
			$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");
			if(!$conexion){
				echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
				echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
				echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
				exit;
			} else {
				//informamos a la BD que toda consulta que realicemos, la queremos con los contenidos pasados a utf8
				$acentos=mysqli_query($conexion, "SET NAMES 'utf8'");

				$q = "select * from anunci ORDER BY anu_color";
				$resultados = mysqli_query($conexion, $q);
				if(mysqli_num_rows($resultados)>0){

					echo "Categorías:<br><br/>";
					while($categoria = mysqli_fetch_array($resultados)){
						echo "<input type=\"checkbox\"name=\"$categoria[anu_color]\">$categoria[anu_color]<br></br>";


					}
				} else {
					echo "No hay categorías que mostrar";
				}

				//$conexion = mysqli_query($conexion, $a);
				//if(mysqli_num_rows($resultados)>0){

					//echo "Marcas:<br><br/>";
					//while($marcas = mysqli_fetch_array($conexion)){

						//echo "<select>\"option value=\"filtro_c\">$marcas[anu_marca]</option></select>";

					//}
					//} else {
						//echo "No hay categorías que mostrar";
					//}

				echo "Marcas<br></br>";

				
				$resultados = mysqli_query($conexion, $q);
				if(mysqli_num_rows($resultados)>0){
					echo"<select>";
					while($marca = mysqli_fetch_array($resultados)){
						echo "<option value='$marca[anu_marca]'>$marca[anu_marca]</option>";
					}

					echo "</select>";
				} else {
					echo "No hay categorías que mostrar";



				}

				echo "<br></br>Ciudad<br></br>";
				$resultados = mysqli_query($conexion, $q);
				if(mysqli_num_rows($resultados)>0){
					echo"<select>";
					while ($ciudad = mysqli_fetch_array($resultados)) {
						echo "<option value='$ciudad[anu_ubicacio_robatori]'>$ciudad[anu_ubicacio_robatori]</option>";
					}
					echo "</select>";

				}else {
					echo "No hay categorías que mostrar";
				}


			}
			?>


			<!--Precio<input type="range" min"0" max"30"><br></br>-->

			<?php


			?>
			<p>

				<input type="submit" name="filtrar" value="filtrar">

			</div>
			<div class="div3">
				Mostrar<br></br>
				<select>
					<option value="mostrar_18">18</option>
					<option value="mostrar_16">36</option>
					<option value="mostrar_16">90</option>
				</select>
			</div>
			<div class="div5">
				<?php echo($_REQUEST['filtrar']); ?>



			</div>


		</form>


	</body>
	</html>