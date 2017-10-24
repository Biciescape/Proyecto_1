<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
	<meta charset="utf-8">
	<script>
		
		function validar(){
			
			if(document.addnew.anu_titol.value==""){
				alert("El campo Titulo no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_titol.value.length>50){
				alert("El campo Titulo no puede tener mas de 50 carácteres!");
				return false;
			}
			if (document.addnew.anu_titol.value=="") {

			
			}else if(document.addnew.anu_data_robatori.value.length>35){
				alert("El campo Fecha robo no puede tener mas de 35 carácteres!");
				return false;
			}
			if(document.addnew.anu_data_robatori.value==""){
				alert("El campo Fecha robo no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_data_robatori.value.length>35){
				alert("El campo Fecha robo no puede tener mas de 35 carácteres!");
				return false;
			}

			
			if(document.addnew.anu_ubicacio_robatori.value==""){
				alert("El campo Ubicacion robo no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_ubicacio_robatori.value.length>35){
				alert("El campo Ubicacion robo no puede tener mas de 35 carácteres!");
				return false;

			}else if((document.addnew.anu_color.value.match(/[0-9]/))){
				alert("El campo Ubicacion robo  no puede tener números carácteres!");
				return false;
			}

			

			if(document.addnew.anu_descripcio_robatori.value==""){
				alert("El campo Descripcion no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_descripcio_robatori.value.length>200){
				alert("El campo Descripcion no puede tener mas de 50 carácteres!");
				return false;
			}

			
			if(document.addnew.anu_marca.value==""){
				alert("El campo Marca no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_marca.value.length>15){
				alert("El campo Marca no puede tener mas de 15 carácteres!");
				return false;
			}


			if(document.addnew.anu_model.value==""){
				alert("El campo Modelo no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_model.value.length>25){
				alert("El campo Modelo no puede tener mas de 25 carácteres!");
				return false;
			}
			if(document.addnew.anu_color.value=="") {
				alert("El campo Color no puede estar en blanco!");
				return false;

			}else if(document.addnew.anu_color.value.match(/[0-9]/)){
				alert("El campo Color no puede tener números!");
				return false;
			}
			if(document.addnew.anu_antiguitat.value==""){
				alert("El campo Antiguedad no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_antiguitat.value.length>25){
				alert("El campo Antiguedad no puede tener mas de 50 carácteres!");
				return false;
			}
			if(document.addnew.anu_descripcio.value==""){
				alert("El campo Descripcion no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_descripcio.value.length>80){
				alert("El campo Descripcion no puede tener mas de 50 carácteres!");
				return false;
			}
			if(document.addnew.anu_numero_serie.value==""){
				alert("El campo Numero Serie no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_numero_serie.value.length>15){
				alert("El campo Numero Serie no puede tener mas de 50 carácteres!");
				return false;
			}
			if(document.addnew.anu_compensacio.value==""){
				alert("El campo Compensacion no puede estar en blanco!");
				return false;
			}else if(document.addnew.anu_compensacio.value.match(/[a-z]/)){
				alert("El campo Compensacion no puede tener números!");
				return false;
			}				

		}
	</script>
</head>
<body>
	<!-- enctype="multipart/form-data" necesario para subir archivos, crea la forma que permite explorar en su búsqueda en el equipo local -->
	<?php
$fecha = date("d M Y, H:i");
	echo "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>";
		echo"<link rel='stylesheet' type='text/css' href='css/Registro.css'>";

		echo"<div class='centrar'>";
			echo "<a href='formulario.php'>";
			echo"<img class='imagen' id='img' src='img/logo.png'>";
			echo "</a>";
			echo"<div class='titulo1'>";	
			echo"<b><p style='left:10px;'>Creación de anuncios</p></b>";
			echo "<a href='formulario.php'><button>Volver a la búsqueda avanzada</button></a>";
			echo"</div>";

?>
	<form action="addanun.php" class=registro name="addnew" method="POST" onsubmit="return validar();" enctype="multipart/form-data">

		<?php echo "<p class='titulop'>CREA UNA CUENTA</p>"; ?>
	Titulo:</br><input type="text3" name="anu_titol" size="36"></br>
	Fecha Anuncio:</br><input type="date" name="anu_data_anunci class="input-medium search-query"  onkeypress="return false"></br>
	Fecha Robo:</br><input type="date" name="anu_data_robatori" placeholder="dd/mm/yyyy"></br>
	Ubicacion Robo:</br> <input type="text3" name="anu_ubicacio_robatori" size="40"></br>
	Descripcion Robo:</br><textarea rows="6" cols="38" name="anu_descripcio_robatori" style="resize:none;"></textarea></br>
	Marca:</br> <input type="text3" name="anu_marca" size="40"></br>
	Modelo:</br> <input type="text3" name="anu_model" size="40"></br>
	Color:</br> <input type="text3" name="anu_color" size="40"></br>
	Antiguedad:</br> <input type="text3" name="anu_antiguitat" size="40"></br>
	Descripcion:</br><textarea rows="6" cols="38" name="anu_descripcio_robatori" style="resize:none;"></textarea></br>
	Numero Serie:</br> <input type="text3" name="anu_numero_serie" size="40"></br></br>
	Foto:</br> <input type="file" name="anu_foto" size="50" /></br></br>
	Compensacion:</br> <input type="text3" name="anu_compensacio" size="40"></br></br>
	Talla:</br> <select name='anu_talla' style=" width: 60px" > <option>S</option><option>M</option><option>L</option><option>XL</option></select></br>
	</br><input type="submit" name="enviar">
	</form>
<?php 

// La ruta de la carpeta deonde se almacenarán los archivos
if(isset($_POST['anu_titol']) or isset($_POST['anu_data_anunci']) or isset($_POST['anu_data_robatori']) or isset($_POST['anu_ubicacio_robatori']) or isset($_POST['anu_descripcio_robatori']) or isset($_POST['anu_marca']) or isset($_POST['anu_model']) or isset($_POST['anu_color']) or isset($_POST['anu_antiguitat']) or isset($_POST['anu_descripcio']) or isset($_POST['anu_numero_serie']) or isset($_POST['anu_compensacio']) or isset($_POST['anu_talla'])){

	$conexion=mysqli_connect("localhost", "root", "", "bd_biciescapa");
	if(!$conexion){
		echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		exit;
	} else {
		mysqli_set_charset($conexion, "utf8");	

		$nombreimagen = $_FILES['anu_foto']['name'];
		$q = "INSERT INTO anunci (anu_titol,anu_data_anunci, anu_data_robatori,	anu_ubicacio_robatori,anu_descripcio_robatori,anu_marca,anu_model,anu_color,anu_antiguitat, 	anu_descripcio,anu_numero_serie,anu_foto,anu_compensacio,anu_talla) VALUES ('$_POST[anu_titol]','$_POST[anu_data_anunci]','$_POST[anu_data_robatori]','$_POST[anu_ubicacio_robatori]','$_POST[anu_descripcio_robatori]','$_POST[anu_marca]','$_POST[anu_model]','$_POST[anu_color]','$_POST[anu_antiguitat]','$_POST[anu_descripcio]','$_POST[anu_numero_serie]','$nombreimagen','$_POST[anu_compensacio]','$_POST[anu_talla]')";

		echo $q;


	}
//$des = "/img/";


	if (mysqli_query($conexion, $q) === TRUE) {
		echo "Se ha insertado correctamente en la base de datos";
		//$resultados = mysqli_query($conexion, $q);

		$des = "C:\\xampp\\htdocs\\Proyecto\\img\\";

		echo $_FILES['anu_foto']['name'];
		$file = $des. basename( $_FILES['anu_foto']['name']) ;

		if(move_uploaded_file($_FILES['anu_foto']['tmp_name'], $file))

		{

			echo " El archivo ". basename( $_FILES['anu_foto']['name']). " se ha subido";
		}


	}else {

		echo " Error ";

	}
}
?>
</body>
</html>