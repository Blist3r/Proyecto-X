<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$sql = $conexion->prepare('UPDATE usuarios set estado = 0 where id = '.$_POST['identificacion_delete']);
$sql->execute();

$resultado = $sql->rowCount();

// print_r($sql->errorInfo());

if ($resultado == 1) {
    header('location:../../usuarios.php?delete=1');
} else {
    header('location:../../usuarios.php?delete=0');
}

?>