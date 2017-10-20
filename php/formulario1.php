<?php
	/*Primero nos adelantamos a todos los errores del usuario y lo conectamos con un ifelse a la conexión para evitar que si un error ocurre se siga buscando el formulario. Antes tenemos que guardar las variables que el usuario haya filtrado (como nombres/precios/categorias, etc). Luego hay que usar estas variables para comprobar que el usuario ha hecho una consulta valida. Por último tenemos que hacer la conexión, en nuestro caso hemos hecho que tan solo cambie la variable "$j" que es la que contiene la consulta SQL. Porque es la única que cambia según lo que el usuario decida buscar. Hemos puesto comentarios en las lineas para que sea más fácil de entender y guiranos por si por algún motivo nos perdemos.*/

	//////////// A PARTIR DE AQUÍ EVITAMOS LOS ERRORES Y VALIDAMOS QYE TODO VAYA BIEN ////////////

	//Creamos las variables que el usuario puede introducir con los filtros.


	$marca=$_REQUEST['marca'];
	$localidad=$_REQUEST['ciudad'];
	$color=$_REQUEST['colores'];
	
	$and=false;
	$and1=false;

	$string="";
	$string1="";
	$string2="";

	/*Si el usuario no envía ningún filtro (es decir, sólo le da al botón de enviar), será prácticamente como volver a la página inicial: porque no hay ningún filtro seleccionado y se muestran los anuncios de más nuevos a más antiguos*/

	if (($marca=="")&&($localidad=="")&&($color=="")){
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
			if($color!=="Cualquiera"){
				$string="WHERE anu_color='$color'";
				$and=true;
			}

			//Comprobamos lo mismo con marca
			if($marca!=="Cualquiera"){
				$string1="WHERE anu_marca='$marca'";
				//Si se ha elegido una consulta anterior se enlaza con un AND
				if ($and==true) {
					$string1="AND anu_marca='$marca'";
				}		
				$and1=true;
			}

			//Se repite el proceso
			if ($localidad!=="Cualquiera") {
				$string2="WHERE anu_ubicacio_robatori='$localidad'";
				if (($and==true)||($and1==true)) {
					$string2="AND anu_ubicacio_robatori='$localidad'";
				}
			}

			$j="SELECT * FROM anunci $string $string1 $string2";
			echo $j;

			//Hacemos la consulta a la BDD, con la dirección de la BDD y con qué queremos consultar
			$consulta = mysqli_query($conexion, $j);

			//Creamos la variable mysqli_num_rows para mostrar cuántos objetos coinciden con la búsqueda
			$filas=mysqli_num_rows($consulta);

			//En el caso en el que no hayan productos que mostrar, se muestra el siguiente mensaje
			if ($filas==0) {
				echo "Lo sentimos, no hemos podido encontrar el anuncio que buscaba :(";

			}else{
				//La variable filas se puede usar para ordenar cuantos anuncios podemos mostrar porque muestra el número de anuncios encontrados según el filtro.
				//echo "$filas";

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
					echo "Categoría: $anunci[anu_categoria]<br/>";
					echo "Compensación: $anunci[anu_compensacio]€<br/>";
					echo "<br>";
				}//fin del while
			}//fin del else/if de filas
		}//fin del else/if de la conexion
	}//fin del else/if inicial: evitar errores
?>