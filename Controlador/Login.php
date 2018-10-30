<?php

if (!isset($rootDir)) $rootDir = $_SERVER['DOCUMENT_ROOT'];

require_once($rootDir . "/DAO/AccesoDAO.php");

$username = $_POST['username'];
$password = $_POST['password'];

$respuesta = AccesoDAO::ingreso($username,$password);

if($respuesta){
    echo "true";
}

?>