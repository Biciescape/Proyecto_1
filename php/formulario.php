<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/HojaEstilos.css">
	<meta charset="utf-8">

</head>
<body>
	
	<!--Pasamos el formulario en la página formulario1.php !-->
	<form action="formulario1.php" method="REQUEST">
			<div class="div4">
			
			<span>
				<img src="img/logo.png" style="vertical-align: middle; margin: 7px 98px 2px 59px;" ></img>
					
					<input type="text2" name="producto" size="40"">
					<input type="submit" name="" ><img src="img/buscador.png" style="vertical-align: middle ;" width="45px" height="45px"></img>

			</span>
					
			
			</div>


			<div class="div2">
				<div class="color">
				FILTRAR
				</div>
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
					
				//Guardar en la variable $q la consulta

				// Con un if mostramos toda la consulta hasta que llegue a 0 consultas

				//Creamos la consulta anu_color de la tabla anunci, le ponemos un distinct para no repetir la consulta dada y que lo ordene 
					echo"<br>";
					$q = "Select distinct(anu_color) from anunci ORDER BY anu_color";
					$resultados = mysqli_query($conexion, $q);
					if(mysqli_num_rows($resultados)>0){
					//Ponemos un select para hacer un despegable y un option para que en el principio muetre Cualquiera
						echo "<br>Colores:<br><br/>";
						echo "<select name='colores'>";
						echo "<option>Cualquiera</option>";
						while($colores= mysqli_fetch_array($resultados)){
						//Metemos la consulta de colores en el option, lo mostramos con la variable colores y despues lo cerramos fuera del while el select
							echo "<option>$colores[anu_color]</option>";
						//echo "<input type='checkbox' name='color' >$categoria[anu_color]<br></br>";
						}
						echo "</select>";
					} else {
						echo "No hay colores que mostrar";
					}
					echo "<p>";

					echo "Marcas<br></br>";

  				//Creamos la consulta anu_marca de la tabla anunci, le ponemos un distinct para no repetir la consulta dada y que lo ordene 
					$q = "select distinct(anu_marca) from anunci ORDER BY anu_marca";				
					$resultados = mysqli_query($conexion, $q);
					if(mysqli_num_rows($resultados)>0){
						echo"<select name='marca'>";
						echo "<option>Cualquiera</option>";
						while($marca = mysqli_fetch_array($resultados)){
						//Metemos la consulta de marca en el option, lo mostramos con la variable marca y después lo cerramos fuera del while el select
							echo "<option>$marca[anu_marca]</option>";
						}

						echo "</select>";
					} else {
						echo "No hay categorías que mostrar";

					}

					echo "<br></br>Localidades<br></br>";
				//Creamos la consulta anu_marca de la tabla anunci, le ponemos un distinct para no repetir la consulta dada y que lo ordene 
					$q = "select distinct(anu_ubicacio_robatori) from anunci ORDER BY anu_ubicacio_robatori";
					$resultados = mysqli_query($conexion, $q);
					if(mysqli_num_rows($resultados)>0){
						echo"<select name='ciudad'>";
						echo "<option>Cualquiera</option>";
						while ($ciudad = mysqli_fetch_array($resultados)) {
						//Metemos la consulta de ciudad en el option, lo mostramos con la ciudad marca y después lo cerramos fuera del while el select
							echo "<option>$ciudad[anu_ubicacio_robatori]</option>";
						}
						echo "</select>";

					}else {
						echo "No hay categorías que mostrar";
					}
					echo "<p>";

					$q ="Select distinct anu_talla from anunci ORDER BY anu_talla";
					$resultados = mysqli_query($conexion,$q);

					if(mysqli_num_rows($resultados)>0){
						echo "Tallas<br></br>";
					//Con un mientras se mete en la variable $categoria el array las consultas guardadas en la variable $resultados
					//Mostramos las columnas de la base de datos y lo ponemos en un checkbox 
						while ($talla= mysqli_fetch_array($resultados)) {
							echo "<input type='checkbox' name='talla[]' value='$talla[anu_talla]'>$talla[anu_talla]<br></br>";
						}
				//Si no encuentra la consulta saldrá el mensaje no hay categorias que mostrar
					}else {
						echo "No hay categorias que mostrar";
					}

				}
				?>


				<!--Precio<input type="range" min"0" max"30"><br></br>-->

				<?php


				?>
				<p>
					<!--Metemos un boton para filtrar las opciones elegidas-->
					<input type="submit">

				</div>
				<!-- Metemos en un div para mostrar mas anuncios o menos en la pestaña Mostrar-->
				<!-- <div class="div3">
					Mostrar<br></br>
					<select>
						<option value="mostrar_18">18</option>
						<option value="mostrar_16">36</option>
						<option value="mostrar_16">90</option>
					</select>
				</div> -->

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
					// Guardamos en la variable $q la consulta que muestre todo de la tabla anunci y lo ordene
						$q = "SELECT * FROM `anunci` order by `anu_data_anunci` DESC";
						$resultados = mysqli_query($conexion, $q);
						if(mysqli_num_rows($resultados)>0){
							$anunci = mysqli_fetch_array($resultados);
						// En el while mostramos la consulta hasta que acabe,lo metemos en un div los estilos para meter los anuncios
							while($anunci = mysqli_fetch_array($resultados)){

								echo "<div style='width: 600px; height: 340px; float: left; color: orange; background-color: grey; margin-right: 10px; margin-bottom: 10px;'>";
								echo "<div class='fuenteProducto'>";
								echo "$anunci[anu_titol]";
								echo "</div>";
								echo "<div>";
								echo "<img id='imagenProducto' src='img/$anunci[anu_foto].jpg'>";
								echo "<div class='caracteristicasProducto'>";
								echo "Fecha anuncio: $anunci[anu_data_anunci]<br>";
								echo "Fecha robo: $anunci[anu_data_robatori]<br>";
								echo "Marca : $anunci[anu_marca]<br>";
								echo "Modelo :  $anunci[anu_model]<br>";
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
