<?php

require ('../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

if($_POST['password_edit'] != ''){
    $password = ' password = "'.MD5($_POST['password_edit']).'", ';
} else {
    $password = '';
}

$sql = $conexion->prepare('UPDATE usuarios set identificacion = '.$_POST['identificacion_edit'].', nombre = "'.$_POST['nombre_edit'].'", apellido = "'.$_POST['apellido_edit'].'", '.$password.' fecha_certificado = "'.$_POST['fecha_certificado_edit'].'", sede = '.$_POST['sede_edit'].', tipo = "'.$_POST['tipo_edit'].', estado = "'.$_POST['estado_edit'].'" where identificacion = '.$_POST['identificacion_edit']);
$sql->execute();

$resultado = $sql->rowCount();

if ($resultado == 1) {
   header('location:../../usuarios.php?update=1');
} else {
    header('location:../../usuarios.php?update=0');
}

?>