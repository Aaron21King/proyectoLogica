<?php

require('Model/Conexion.php');

$con = new Conexion();

$usuarios = $con->getUsers();

require('Views/Usuarios.php');

?>