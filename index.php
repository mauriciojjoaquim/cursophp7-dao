<?php

require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//Carrega um usuario
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//Carrega uma lista usuario
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista usuario buscando pelo logins 
//$search = Usuario::search("a");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("root", "123456");
echo $usuario;


//Cadastro
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("123456");
//$aluno->insert();
//echo $aluno;

?>