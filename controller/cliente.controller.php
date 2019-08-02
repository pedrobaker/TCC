<?php
	require_once('model/cliente.model.php');
	require_once('service/cliente.service.php');
	require_once('conexao/conexao.php');

	//$acao[0] = isset($_POST['acao'])?$_POST['acao']:$acao;

	if ($acao[0]=='create') {

		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('login', $_POST['login']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('senha', $_POST['senha']);
		$cliente->__set('cred', $_POST['cred']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		$clienteService->create();
		header('Location:index.php');

	} else if($acao[0]=='update') {

		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('login', $_POST['login']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('senha', $_POST['senha']);
		$cliente->__set('cred', $_POST['cred']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		$clienteService->update();
		header('Location:index.php');

	} else if ($acao[0]=='delete') {

		$cliente = new Cliente();
		$cliente->__set('id', $_POST['id']);
		$cliente->__set('login', $_POST['login']);
		$cliente->__set('nome', $_POST['nome']);
		$cliente->__set('senha', $_POST['senha']);
		$cliente->__set('cred', $_POST['cred']);

		$conexao = new Conexao();

		$clienteService = new ClienteService($conexao, $cliente);
		$clienteService->delete();
		header('Location:index.php');

	} else if($acao[0]=='show') {

		$cliente = new Cliente();
		$conexao = new Conexao();

		$cliente->__set('login', $_POST['loginUsu']);
		$cliente->__set('senha', $_POST['senUsu']);

		$cli = new ClienteService($conexao, $cliente);
		$cliente = $cli->show();
		//var_dump($cliente);

		if ($acao[1]=='logar') {

			$_SESSION['idCli'] = $cliente->id;
			$_SESSION['loginCli'] = $cliente->login;
			$_SESSION['senhaCli'] = $cliente->senha;
			$_SESSION['nomeCli'] = $cliente->nome;
			$_SESSION['credCli'] = $cliente->cred;

			header('Location:index.php?link=6');
		}
	}
?>