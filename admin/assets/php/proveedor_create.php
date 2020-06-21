<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('INSERT into proveedor values ("", :identificacion, :nombre, :apellido, :pas, :certificado, :sede, :tipo, :estado)');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':contacto', $_POST['contacto']);
$sql->bindParam(':estado', $_POST['estado']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
    header('location:../../proveedor.php?create=1'); 
} else {
    header('location:../../proveedor.php?create=0');
}

?>