<?php
	require_once("config.php");
	//Carrega um usuário
	//$root = new Usuario();
	//$root->loadById(1);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista= Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login
	//$search = Usuario::search("ju");
	//echo json_encode($search);

	//Carrega um usuário usando login e a senha
	//$usuario = new Usuario();
	//$usuario->login("juliana","123456");
	//echo $usuario;

	$aluno = new Usuario("aluno","aluno123");
	$aluno->insert();
	echo $aluno;
?>