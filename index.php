<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM vehiculo ORDER BY id_vehiculo DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Inicio</title>
</head>

<body>
<a href="add.html">Agregar Registro</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		
			</tr>
			<tr> 
				<td>Nip Digitador</td>
				<td>Marca</td>
				<td>Linea</td>
				<td>Color</td>
				<td>Tipo de Vehiculo</td>
				<td>Chasis Vehiculo</td>
				<td>VIN del Vehiculo</td>
				<td>Codigo de Motor</td>
				<td>Placa del Vehiculo</td>
				<td>Nip del conductor</td>
				<td>Destino del Vehiculo</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nip_digitador']."</td>";
		echo "<td>".$res['marca']."</td>";
		echo "<td>".$res['linea']."</td>";	
		echo "<td>".$res['color']."</td>";
		echo "<td>".$res['tipo']."</td>";
		echo "<td>".$res['chasis']."</td>";
		echo "<td>".$res['vin']."</td>";
		echo "<td>".$res['motor']."</td>";
		echo "<td>".$res['placa']."</td>";
		echo "<td>".$res['nip_conductor']."</td>";
		echo "<td>".$res['destino_vehiculo']."</td>";
		echo "<td><a href=\"edit.php?id=$res[id_vehiculo]\">Edit</a> | <a href=\"delete.php?id=$res[id_vehiculo]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
