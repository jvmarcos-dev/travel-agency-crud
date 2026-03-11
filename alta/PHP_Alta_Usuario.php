<?php 
require('../ficheros/conexion.php');
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_OFF);
$v1=strtoupper($_POST['dni']);
$v2=ucwords(strtolower($_POST['nombre']));
$v3=ucwords(strtolower($_POST['origen']));
$v4=ucwords(strtolower($_POST['destino']));
$v5=ucwords(strtolower($_POST['clase_vuelo']));
$v6=$_POST['fecha'];
$v7=$_POST['estancia'];
$consulta="INSERT INTO reservas (DNI,NOMBRE,ORIGEN,DESTINO,CLASE_VUELO,FECHA,ESTANCIA) VALUES ('$v1','$v2','$v3','$v4','$v5','$v6',$v7)";
@mysqli_query($conexion,$consulta);
if (mysqli_errno($conexion)==0)
{
	echo "<center><b><font face='Calibri' color='green' size='3'>La reserva ha sido realizada.</font><b></center>";
	echo "<script>parent.limpio_pantalla(0);</script>";
}
else 
{
	$numerror=mysqli_errno($conexion); 
	$descrerror=mysqli_error($conexion); 
	echo "<center><b><font face='Calibri' color='red' size='3'>Error nº $numerror (el cliente ya tiene una reserva realizada)</font><b></center>";
	echo "<script>parent.limpio_pantalla(1);</script>";
}	
mysqli_close($conexion); 
?>