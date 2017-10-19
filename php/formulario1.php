

<?php
	/*Primero nos adelantamos a todos los errores del usuario y lo conectamos con un ifelse a la conexión para evitar que si un error ocurre se siga buscando el formulario. Antes tenemos que guardar las variables que el usuario haya filtrado (como nombres/precios/categorias, etc). Luego hay que usar estas variables para comprobar que el usuario ha hecho una consulta valida. Por último tenemos que hacer la conexión, en nuestro caso hemos hecho que tan solo cambie la variable "$j" que es la que contiene la consulta SQL. Porque es la única que cambia según lo que el usuario decida buscar. Hemos puesto comentarios en las lineas para que sea más fácil de entender y guiranos por si por algún motivo nos perdemos.*/

	//////////// A PARTIR DE AQUÍ EVITAMOS LOS ERRORES Y VALIDAMOS QYE TODO VAYA BIEN ////////////

	//Creamos las variables que el usuario puede introducir con los filtros.
	//$precio=$_REQUEST['precio'];

	//Evitamos que el usuario seleccione un precio menor o igual a 0. Si introduce estos valores se reenvia al formulario.
	/*if ($precio<=0) {
		header("Location: formulario.html");
	}*/

	//FALTA: Acabar los errores y conectarlo a la conexión con un ifelse

	//////////// A PARTIR DE AQUÍ HACEMOS LA CONEXIÓN ////////////

	//Creamos la conexion con la base de datos
	echo "<link rel='stylesheet' type='text/css' href='HojaEstilos.css'>";
	$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");

	if (!$conexion) {
		//Si no se consigue hacer la conexión se muestra un mensaje.
		echo "Error: No se he podido conenctar a MySQL<br><br>";
	}else{
		//A partir de aquí entra todas las posibilidades que el usuario puede introducir.

		//FALTA: Buscar todas las alternativas de consulta.
		$j = "SELECT * FROM anunci";
		//WHERE pro_nombre LIKE '%$nombre%' AND (pro_precio<'$precio' AND pro_precio>0)";

		//Hacemos la consulta a la BDD, con la dirección de la BDD y con qué queremos consultar
		$consulta = mysqli_query($conexion, $j);

		//Creamos la variable mysqli_num_rows para mostrar cuántos objetos coinciden con la búsqueda
		//$filas=mysqli_num_rows($consulta);

		/*if ($filas==0) {
			echo "Lo sentimos, no hemos podido encontrar objetos que contengan '$nombre' en su nombre";
		}else{*/

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
				echo "Descripción: $anunci[anu_descripcio]<br/>";
				echo "Número de serie: $anunci[anu_numero_serie]<br/>";
				echo "Foto: <img src='img/$anunci[anu_foto].jpg'><br/>";
				echo "Categoría: $anunci[anu_categoria]<br/>";
				echo "Compensación: $anunci[anu_compensacio]€<br/>";
				echo "<br>";
			}
		//}
	}
?>