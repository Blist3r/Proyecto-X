<?php
require("assets/php/validaciones/secure_login.php");
require('assets/php/validaciones/conexion.php');
$conexion = conexion();

$sql = $conexion->prepare('SELECT * from usuarios where id = :id');

$sql->bindParam(':id',$_SESSION['user']);
$sql->execute();

$resultado = $sql->rowCount();

$datos = $sql->fetchAll();

if($datos[0]['tipo'] !='admin'){
    header('location:../../../index.php');

}

?>