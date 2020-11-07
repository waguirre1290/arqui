<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nipd = mysqli_real_escape_string($mysqli, $_POST['nipD']);
	$marca = mysqli_real_escape_string($mysqli, $_POST['marca']);
	$linea = mysqli_real_escape_string($mysqli, $_POST['linea']);
	$color = mysqli_real_escape_string($mysqli, $_POST['color']);
	$tipov = mysqli_real_escape_string($mysqli, $_POST['tVehiculo']);
	$chasis = mysqli_real_escape_string($mysqli, $_POST['chasis']);
	$vin = mysqli_real_escape_string($mysqli, $_POST['vin']);
	$motor = mysqli_real_escape_string($mysqli, $_POST['motor']);
	$placa = mysqli_real_escape_string($mysqli, $_POST['placa']);
	$nipc = mysqli_real_escape_string($mysqli, $_POST['nipc']);
	$destino = mysqli_real_escape_string($mysqli, $_POST['destino']);
		
	// checking empty fields
	if(empty($nipd) || empty($marca) || empty($linea) || empty($color) || empty($tipov) 
    || empty($chasis)  || empty($vin)   || empty($motor) || empty($placa) || empty($nipc)||
       empty($destino)) {
				
		if(empty($nipd)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($marca)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($linea)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($color)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($tipov)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($chasis)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($vin)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($motor)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($placa)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($nipc)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($destino)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO vehiculo(nip_digitador,marca, linea, color, tipo, chasis, vin, motor, placa, nip_conductor, destino_vehiculo) VALUES('$nipd','$marca','$linea','$color','$tipov','$chasis','$vin', '$motor', '$placa','$nipc', '$destino')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
