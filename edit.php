<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$nipd = mysqli_real_escape_string($mysqli, $_POST['nipD']);
	$marca = mysqli_real_escape_string($mysqli, $_POST['marca']);
	$linea = mysqli_real_escape_string($mysqli, $_POST['linea']);
	$color = mysqli_real_escape_string($mysqli, $_POST['color']);
	$tipov = mysqli_real_escape_string($mysqli, $_POST['tVehiculo']);
	$chasis = mysqli_real_escape_string($mysqli, $_POST['chasis']);
	$vin = mysqli_real_escape_string($mysqli, $_POST['vin']);
	$motor = mysqli_real_escape_string($mysqli, $_POST['motor']);
	$placa = mysqli_real_escape_string($mysqli, $_POST['placa']);
	$destino = mysqli_real_escape_string($mysqli, $_POST['destino']);
	
	// checking empty fields
	if(empty($nipd) || empty($marca) || empty($linea) || empty($color) || empty($tipov) 
    || empty($chasis)  || empty($vin)   || empty($motor) || empty($placa) || empty($destino)) {
				
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

		if(empty($placa)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($nipc)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($destino)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE vehiculo SET nip_digitador='$nipd',marca='$marca',linea='$linea',color ='$color', tipo ='$tipov', chasis = '$chasis', vin = 
			'$vin', motor = '$motor', placa= '$placa', nip_conductor = '$nipc', destino_vehiculo = '$destino' WHERE id_vehiculo=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id_vehiculo'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM vehiculo WHERE id_vehiculo=$id");

while($res = mysqli_fetch_array($result))
{
	$nipd = $res(['nipD']);
	$marca =  $res(['marca']);
	$linea =  $res(['linea']);
	$color =  $res(['color']);
	$tipov =  $res(['tVehiculo']);
	$chasis =  $res(['chasis']);
	$vin =  $res(['vin']);
	$motor =  $res(['motor']);
	$placa =  $res(['placa']);
	$destino =  $res(['destino']);

}
?>
<html>
<head>	
	<title>Editar datos</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nip Digitador</td>
				<td><input type="text" name="nipD"></td>
			</tr>
			<tr> 
				<td>Marca</td>
				<td><input type="text" name="marca"></td>
			</tr>
			<tr> 
				<td>Linea</td>
				<td><input type="text" name="linea"></td>
			</tr>
			<tr> 
				<td>Color</td>
				<td><input type="text" name="color"></td>
			</tr>
			<tr> 
				<td>Tipo de Vehiculo</td>
				<td><input type="text" name="tVehiculo"></td>
			</tr>
			<tr> 
				<td>Chasis Vehiculo</td>
				<td><input type="text" name="chasis"></td>
			</tr>
			<tr> 
				<td>VIN del Vehiculo</td>
				<td><input type="text" name="vin"></td>
			</tr>
			<tr> 
				<td>Codigo de Motor</td>
				<td><input type="text" name="motor"></td>
			</tr>
			<tr> 
				<td>Placa del Vehiculo</td>
				<td><input type="text" name="placa"></td>
			</tr>
			<tr> 
				<td>Nip del conductor</td>
				<td><input type="text" name="nipc"></td>
			</tr>
			<tr> 
				<td>Destino del Vehiculo</td>
				<td><input type="text" name="destino"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
