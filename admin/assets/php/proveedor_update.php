<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion(); 

$sql = $conexion->prepare('UPDATE proveedor set nombre = "'.$_POST['nombre_edit'].', contacto = "'.$_POST['contacto_edit'].', estado = "'.$_POST['estado_edit']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
   header('location:../../proveedor.php?update=1');
} else {
    header('location:../../proveedor.php?update=0');
}

?>  