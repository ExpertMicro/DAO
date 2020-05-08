<?php

require_once("config.php");

//$root = new Usuario();
//$root->loadById(6);
//echo $root;

//$lista = Usuario::getList();
//echo json_encode($lista);

//$search = Usuario::search("V");
//echo json_encode($search);

$usuario = new Usuario();
$usuario->login("Andre","112123");

echo $usuario;

?>