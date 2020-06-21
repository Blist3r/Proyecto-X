<?php

require ('../../../../assets/php/validaciones/conexion.php');

$conexion = conexion();

$id = $_POST['id'];

$sql = $conexion->prepare('SELECT * from usuarios where id = '.$id);
$sql->execute();

$resultado = $sql->fetchAll();

echo json_encode($resultado);

?>