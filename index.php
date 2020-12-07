<?php 

require_once("config.php");

//Carrega 1 usuario
/*$root = new Usuario();
$root->loadById(4);
echo $root;*/

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode(($lista));*/

//Carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("e");
echo json_encode($search);*/


//Carrega um usuario usando o login e a senha
/*$usuario = new Usuario();
$usuario->login("paje", "321654");
echo $usuario;*/

//Insere novo usuario
/*$aluno = new Usuario("aluno", "@luno");
$aluno->insert();
echo $aluno;*/

//Atualiza um usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "senhaprofessor");
echo $usuario;

 ?>