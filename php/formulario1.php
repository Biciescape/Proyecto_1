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
				<p>
					<!--Metemos un boton para filtrar las opciones elegidas-->
					<input type="submit">
				</div>
				<div class="div5">
					<?php
					/*Primero nos adelantamos a todos los errores del usuario y lo conectamos con un ifelse a la conexión para evitar que si un error ocurre se siga buscando el formulario. Antes tenemos que guardar las variables que el usuario haya filtrado (como nombres/precios/categorias, etc). Luego hay que usar estas variables para comprobar que el usuario ha hecho una consulta valida. Por último tenemos que hacer la conexión, en nuestro caso hemos hecho que tan solo cambie la variable "$j" que es la que contiene la consulta SQL. Porque es la única que cambia según lo que el usuario decida buscar. Hemos puesto comentarios en las lineas para que sea más fácil de entender y guiranos por si por algún motivo nos perdemos.*/

					//////////// A PARTIR DE AQUÍ EVITAMOS LOS ERRORES Y VALIDAMOS QYE TODO VAYA BIEN ////////////

					//Creamos las variables que el usuario puede introducir con los filtros.


					$marca=$_REQUEST['marca'];
					$localidad=$_REQUEST['ciudad'];
					$color=$_REQUEST['colores'];
					$anuncio=$_REQUEST['producto'];

					$and=false;
					$and1=false;
					$and2=false;
					$and3=false;

					$string="";
					$string1="";
					$string2="";
					$string3="";
					$string4="";

					/*Si el usuario no envía ningún filtro (es decir, sólo le da al botón de enviar), será prácticamente como volver a la página inicial: porque no hay ningún filtro seleccionado y se muestran los anuncios de más nuevos a más antiguos*/

					if (($anuncio=="")&&($marca=="Cualquiera")&&($localidad=="Cualquiera")&&($color=="Cualquiera")&&(!isset($_REQUEST['talla']))) {
						header("Location:formulario.php");
					}else{
						//////////// A PARTIR DE AQUÍ HACEMOS LA CONEXIÓN ////////////

						//Creamos la conexion con la base de datos
						echo "<link rel='stylesheet' type='text/css' href='HojaEstilos.css'>";
						$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");

						if (!$conexion) {
							//Si no se consigue hacer la conexión se muestra un mensaje.
							echo "Error: No se he podido conenctar a MySQL<br><br>";
						}else{
							
							//////////// A PARTIR DE AQUÍ COMBINAMOS LAS POSIBILIDADES ////////////

							//Comprobamos que se haya elegido un color y no se haya elegido la opción de cualquiera
							if ($anuncio!=="") {
								$string="WHERE anu_titol LIKE '%$anuncio%'";
								$and=true;
							}

							if($color!=="Cualquiera"){
								$string1="WHERE anu_color='$color'";
								if ($and==true) {
									$string1="AND anu_color='$color'";
								}		
								$and1=true;
							}

							//Comprobamos lo mismo con marca
							if($marca!=="Cualquiera"){
								$string2="WHERE anu_marca='$marca'";
								//Si se ha elegido una consulta anterior se enlaza con un AND
								if (($and==true)||($and1==true)) {
									$string2="AND anu_marca='$marca'";
								}
								$and2=true;
							}

							//Se repite el proceso
							if ($localidad!=="Cualquiera") {
								$string3="WHERE anu_ubicacio_robatori='$localidad'";
								if (($and==true)||($and1==true)||($and2==true)) {
									$string3="AND anu_ubicacio_robatori='$localidad'";
								}
								$and3=true;
							}

							/*En el caso de los checkboxs guardamos las variables en un array (al que hemos guardado en la variable tal para usarlo con más facilidad)*/
							if (isset($_REQUEST['talla'])) {
								$tal=$_REQUEST['talla'];
							}

							if (isset($tal)) {
								//Hacemos que guarde los valores (las tallas seleccionadas) en la variable $t
								foreach ($tal as $t) {
									//Ya que sólo son 4 tallas, contamos los valores de la array
									if (count($tal)==1) {
									//En el caso en que sea una lo dejamos con un WHERE y la talla (dando por hecho que no han buscado otra cosa como marca, ciudad, etc).
										$string4="WHERE anu_talla='$t'";
										//En el caso en el que ya se hayan hecho otras busquedas lo añadimos con un AND
										if (($and==true)||($and1==true)||($and2==true)||($and3==true)) {
											$string4="AND anu_talla='$t'";
										}
									}
									//En el caso en que sean más de un valor se ha enlazar con un or según la posición
									if (count($tal)==2) {
										//Por eso si sabemos que los valores del array son solo dos los cogemos por la posición
										$string4="WHERE anu_talla='$tal[0]' OR anu_talla='$tal[1]'";
										//De nuevo: si ya han elegido otros filtros, se añade con un and, adelantandonos con las posiciones.
										if (($and==true)||($and1==true)||($and2==true)||($and3==true)) {
											$string4="AND anu_talla='$tal[0]' OR anu_talla='$tal[1]'";
										}
									}
									//A partir de aquí es el mismo proceso una y otra vez
									if (count($tal)==3) {
										$string4="WHERE anu_talla='$tal[0]' OR anu_talla='$tal[1]' OR anu_talla='$tal[2]'";
										if (($and==true)||($and1==true)||($and2==true)||($and3==true)) {
											$string4="AND anu_talla='$tal[0]' OR anu_talla='$tal[1]' OR anu_talla='$tal[2]'";
										}
									}

									if (count($tal)==4) {
										$string4="WHERE anu_talla='$tal[0]' OR anu_talla='$tal[1]' OR anu_talla='$tal[2]' OR anu_talla='$tal[3]'";
										if (($and==true)||($and1==true)||($and2==true)||($and3==true)) {
											$string4="AND anu_talla='$tal[0]' OR (anu_talla='$tal[1]' OR anu_talla='$tal[2]' OR anu_talla='$tal[3]')";
										}
									}
								}//fin del foreach
							}

							$j="SELECT * FROM anunci $string $string1 $string2 $string3 $string4";

							//Creamos la variable consulta, que contiene la conexion a la bdd y el qué va a buscar
							$consulta = mysqli_query($conexion, $j);

							//Con la variable total vemos cuantos anuncios ha podido encontrar
							$total=mysqli_num_rows($consulta);

							//Si no encuentra ninguno da el mensaje de que no se ha encontrado nada
							if ($total==0) {
								echo "Lo sentimos, no hemos podido encontrar el anuncio que buscaba :(";
							}else{
								//También la podemos usar (la variable $total) para poder ordenar cuantos anuncios se muestran en un futuro
								//echo "$total";
								//Mostramos los detalles del anuncio
								while($anunci=mysqli_fetch_array($consulta)){
									echo "ID: $anunci[anu_id]<br/>";
									echo "Nombre: $anunci[anu_titol]<br/>";
									echo "Fecha del anuncio: $anunci[anu_data_anunci]<br/>";
									echo "Fecha del robatorio: $anunci[anu_data_robatori]<br/>";
									echo "Ubicación del robatorio: $anunci[anu_ubicacio_robatori]<br/>";
									echo "Descripción del robatorio: $anunci[anu_descripcio_robatori]<br/>";
									echo "Marca: $anunci[anu_marca]<br/>";
									echo "Modelo: $anunci[anu_model]<br/>";
									echo "Color: $anunci[anu_color]<br/>";
									echo "Antiguedad: $anunci[anu_antiguitat]<br/>";
									$des= "Descripción: $anunci[anu_descripcio]<br/>";
									echo "Número de serie: $anunci[anu_numero_serie]<br/>";
									echo "Foto: <img src='img/$anunci[anu_foto].jpg'><br/>";
									echo "Talla: $anunci[anu_talla]<br/>";
									echo "Compensación: $anunci[anu_compensacio]€<br/>";
									echo "<br>";
								}//fin del while
							}//fin del else/if de filas
						}//fin del else/if de la conexion
					}//fin del else/if inicial: evitar errores
				?>
		</div>
	</form>
</body>
</html>