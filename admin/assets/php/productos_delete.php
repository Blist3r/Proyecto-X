<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('UPDATE producto set estado = 0 where id = '.$_POST['identificacion_producto_delete']);
$sql->execute();

$resultado = $sql->rowCount();

// print_r($sql->errorInfo());

if ($resultado == 1) {
    header('location:../../productos.php?delete=1');
} else {
    header('location:../../productos.php?delete=0');
}

?>