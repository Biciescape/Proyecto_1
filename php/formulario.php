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

				$q = "select distinct(anu_color) from anunci ORDER BY anu_color";
				$resultados = mysqli_query($conexion, $q);
				if(mysqli_num_rows($resultados)>0){

					echo "Colores:<br><br/>";
					while($categoria = mysqli_fetch_array($resultados)){

						echo "<input type='checkbox' name='$categoria[anu_color]'>$categoria[anu_color]<br></br>";
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

				$q = "select distinct(anu_marca) from anunci ORDER BY anu_marca";				
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

				echo "<br></br>Localidades<br></br>";
				$q = "select distinct(anu_ubicacio_robatori) from anunci ORDER BY anu_ubicacio_robatori";
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
				<!--<?php echo($_REQUEST['filtrar']); ?>-->
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
					$q = "SELECT * FROM `anunci` order by `anu_data_anunci` DESC";
					$resultados = mysqli_query($conexion, $q);
					if(mysqli_num_rows($resultados)>0){
						$contadoriter=1;
						$anunci = mysqli_fetch_array($resultados);
						while($anunci = mysqli_fetch_array($resultados)){
							//$leftposition = (contadoriter%2==0) ? "10px" : "630px";
							//console.log($leftposition);
							echo "<div style='width: 600px; height: 340px; float: left; color: orange; background-color: grey; margin-right: 10px; margin-bottom: 10px;'>";
							echo "<div class='fuenteProducto'>";
							echo "$anunci[anu_titol]";
							echo "</div>";
							echo "<div>";
							echo "<img id='imagenProducto' src='img/$anunci[anu_foto].jpg'>";
							echo "<div class='caracteristicasProducto'>";
							echo "Fecha anuncio: $anunci[anu_data_anunci]<br>";
							echo "Fecha robo: $anunci[anu_data_robatori]<br>";
							echo "marca : $anunci[anu_marca]<br>";
							echo "modelo :  $anunci[anu_model]<br>";
							echo "Color: $anunci[anu_color]<br>";
							echo "Ubicacion: $anunci[anu_ubicacio_robatori]<br>";
							echo "Descripcion Robo: $anunci[anu_descripcio_robatori]<br>";
							echo "Descripcion producto: $anunci[anu_descripcio]<br>";
							echo "Recompensa: $anunci[anu_compensacio]€<br>";
							echo "</div>";
							echo "</div>";
							echo "</div>";



						}


					} else {
						echo "No hay categorías que mostrar";
					}
				}
				?>
			</div>


		</form>


	</body>
	</html>
