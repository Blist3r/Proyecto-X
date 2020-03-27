<?php
session_start();
if (!$_SESSION["user"]){
header ("location:auth-login.php");
}
?>