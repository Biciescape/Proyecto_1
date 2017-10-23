<?php
	
	if ($_POST['registrarse']="registrarse"){
		
		echo "<form method='POST' action='formusuario.php'>";
		echo "Nombre: <br>";
		echo "<input type='text' max='25' name='info_nombre' required><br><br>";
		echo "Apellidos: <br>";
		echo "<input type='text' max='60' name='info_apellidos' required><br><br>";
		echo "E-mail (Longitud máxima de 30 letras): <br>";
		echo "<input type='text' max='30' name='info_email' required><br><br>";
		echo "Password (de 4 a 20 letras o números): <br>";
		echo "<input type='password' max='20' min='4' name='info_pwd' required><br><br>";
		echo "Teléfono: <br>";
		echo "<input type='number' max='12' min='9' name='info_telf' required><br><br>";
		echo "<input type='submit'>";
		echo "</form>";

		if ( (isset($_POST['info_nombre'])) && (isset($_POST['info_apellidos'])) && (isset($_POST['info_email'])) && (isset($_POST['info_pwd'])) && (isset($_POST['info_telf']))) {
			$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");

			$info_email=$_POST['info_email'];
			$info_nombre=$_POST['info_nombre'];
			$info_apellidos=$_POST['info_apellidos'];
			$info_telf=$_POST['info_telf'];
			$info_pwd=$_POST['info_pwd'];

			//Guardamos el codigo en una variable SQL, solo nos interesa que el email sea distinto, ya que el resto todo puede ser compartido por mas de una persona
			$j="SELECT info_nombre, info_apellidos, info_email, info_pwd, info_telf FROM info WHERE info_email='$info_email'";

			//Hacemos la consulta a nuestra bdd con el codigo SQL
			$consulta = mysqli_query($conexion, $j);

			//Guardamos la cantidad de coincidencias en la variable $total
			$total=mysqli_num_rows($consulta);

			//Nos aseguramos de que NO haya coincidencias
			if ($total==0) {
				alert('Usuario válido');
			}else{
				alert('Su email ya está en uso y por lo tanto no es válido.');
				$_POST['registrarse']="registrarse";
				header("Location:formusuario.php");
			}
		}//Fin del if de la introducción de datos
	}//Fin del if del registro

	if($_POST['iniciarsesion']="iniciarsesion"){

		echo "<form method='POST' action='formusuario.php'>";
		echo "Introduzca su e-mail: <br>";
		echo "<input type='text' name='info_email' required><br><br>";
		echo "Introduzca su password: <br>";
		echo "<input type='password' max='20' min='4' name='info_pwd' required><br><br>";
		echo "<input type='submit'>";
		echo "</form>";

		//Esto solo se muestra una vez comprobamos que se ha insertado un email y un pwd
		if ( (isset($_POST['info_email'])) && (isset($_POST['info_pwd'])) ) {

			$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");

			$info_email=$_POST['info_email'];
			$pwd=$_POST['info_pwd'];

			//Guardamos el codigo en una variable SQL
			$j="SELECT info_email, info_pwd FROM info WHERE info_email='$info_email' AND info_pwd='$info_pwd'";

			//Hacemos la consulta a nuestra bdd con el codigo SQL
			$consulta = mysqli_query($conexion, $j);

			//Guardamos la cantidad de coincidencias en la variable $total
			$total=mysqli_num_rows($consulta);

			//Nos aseguramos de que haya coincidencias
			if ($total==0) {
				alert('Ha escrito una contraseña o un email equivocado');
				$_POST['iniciarsesion']="iniciarsesion";
				header("Location:formusuario.php");
			}//fin del if
		}//Fin del isset
	}//Fin del inicio de sesion

/*Validamos los datos del formulario de la info del usuario. Se la pasamos al form del anuncio nuevo. Una vez validemos la info de los anuncios, hacemos dos inserts. El primero en info con los datos del usuario, y el segundo en anunci con los nuevos datos del anuncio. Cuando hagamos los INSERT, tenemos que enlazar la clave foranea (la id del usuario con el anuncio que ha escrito). Para hacer esto tenemos que usar un update. Hemo pensado que la mejro manera de hacerlo seria con un for. De la siguiente forma:
//El primero sera desde 0
//El siguiente tendrá que contar cuantos ids hay en el anuncio con mysqli_num_rows para hacer el tope. Y podemos guardarlo en la variable "totalanuncios" por ejemplo

Por cada anuncio que haya hará un update de ese anuncio con su correspondiente id_info
	for($b=1; $b=$totalanuncios; $b++){
		//Por ejemplo: esto hace que el anuncio numero 30 corresponda al usuario numero 30.
		$j="UPDATE anunci SET info_id='$b' WHERE id_anunci='$b';
	}
*/
?>