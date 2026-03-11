<?php
require("ficheros/conexion.php");

usleep(20000);

$v1 = $_GET['codigo'];

$consulta = "DELETE FROM reservas WHERE DNI='$v1'";
mysqli_query($conexion, $consulta);

$registros_borrados = mysqli_affected_rows($conexion);
if ($registros_borrados == 0) {
    echo "<center><b><font face='Calibri' color='red' size='2'>No borrado!!</font></b></center>";
} else {
    echo "<center><b><font face='Calibri' color='green' size='2'>Borrado!!</font></b></center>";
}

echo "<script>parent.oculto_estrella();</script>";

mysqli_close($conexion);
?>