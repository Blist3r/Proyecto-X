<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();




$sql = $conexion->prepare('INSERT into producto values ("",  :nombre, :valor, :estado)');
$sql->bindParam(':nombre', $_POST['nombre_producto']);
$sql->bindParam(':valor', $_POST['valor_producto']);
$sql->bindParam(':estado', $_POST['estado_producto']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
    header('location:../../productos.php?create=1');
} else {
    header('location:../../productos.php?create=0');
}

?>