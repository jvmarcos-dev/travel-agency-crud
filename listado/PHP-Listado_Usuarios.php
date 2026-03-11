<?php
require('../ficheros/conexion.php');
$ordenacion = trim($_GET['elorden']);
$clase = trim($_GET['laclase']);
$dni = trim($_GET['eldni']);
$where = "";
if ($clase != 'novalue') {
	$where = " WHERE CLASE_VUELO = '" . $clase . "'";
}
if (!empty($dni)) {
	if ($where == "") {
		$where = " WHERE DNI = '" . $dni . "'";
	} else {
		$where = $where . " AND DNI = '" . $dni . "'";
	}
}
$consulta = "SELECT * FROM reservas" . $where . " ORDER BY " . $ordenacion;
echo "<link href='ficheros/tablas.css' rel='stylesheet'>";
$resultado = mysqli_query($conexion, $consulta);
$tiempo;
if (isset($resultado)) {
	$nregistros = mysqli_num_rows($resultado);
} else {
	$nregistros = 0;
}
echo "<div id='adorno'><br><b>Registros encontrados: </b><label id='nelementos'>".$nregistros."</label><br></div>";
echo "<table id='latablaphp'>";
echo "<thead>";
echo "<tr>";
echo "<th id='izquierda'>DNI</th>";
echo "<th>NOMBRE</th>";
echo "<th>ORIGEN</th>";
echo "<th>DESTINO</th>";
echo "<th>CLASE</th>";
echo "<th>FECHA</th>";
echo "<th>ESTANCIA</th>";
echo "<th id='derecha'>BORRAR</th>";
echo "</tr>";
echo "</thead>";
if ($nregistros > 0) {
	while ($registro = mysqli_fetch_array($resultado)) {
		if ($registro["ESTANCIA"] > 1) {
			$tiempo = "días";
		} else {
			$tiempo = "día";
		}
		echo "
		<tr>  
			<td>" . $registro["DNI"] . "</td>  
			<td>" . $registro["NOMBRE"] . "</td>  
			<td>" . $registro["ORIGEN"] . "</td>  
			<td>" . $registro["DESTINO"] . "</td>  
			<td>" . $registro["CLASE_VUELO"] . "</td>  
			<td>" . date('d-m-Y', strtotime($registro['FECHA'])) . "</td>
			<td>" . $registro["ESTANCIA"] . " " . $tiempo . "</td>  
			<td><img id='papelera' onclick='parent.borroRegistro(this)' src='imagenes/papelera.png' data-codigo=\"" . $registro["DNI"] . "\"></td></tr>";
	}
	echo "</table>";
}
echo "<script>parent.oculto_estrella();</script>";
mysqli_close($conexion);