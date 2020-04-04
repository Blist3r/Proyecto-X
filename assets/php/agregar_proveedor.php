<?php

require ('validaciones/conexion.php');

$conexion = conexion();



$sql = $conexion->prepare('INSERT into proveedor values ("", :nombre, :contacto)');
$sql->bindParam(':nombre', $_POST['nombre']);
$sql->bindParam(':contacto', $_POST['contacto']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
    header('location:../../agregar_proveedor.php?e=1');
} else {
    header('location:../../agregar_proveedor.php?e=0');
}

?>
