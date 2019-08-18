<?php 

require_once("config.php");

//Carrega um usuario especifico
//$root = new Usuario;
//$root->loadByID(2);
//echo $root;

//Carega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lisa de usuários buscando pelo login
//$search = Usuario::search("ra");
//echo json_encode($search);

$usuario = new Usuario();
$usuario->login("root","123456");

echo $usuario;

 ?>