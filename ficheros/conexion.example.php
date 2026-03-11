<?php
$servidor="localhost";
$usuario="your_user";
$contraseña="your_password";
$schema="your_schema";
try
{
	$conexion=new mysqli($servidor, $usuario, $contraseña, $schema);
	$conexion->query("SET NAMES 'utf8'");
} 
catch (exception $e)
{
}
?>