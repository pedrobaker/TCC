<?php
	$rm = $_POST['rmUsu'];
	$senha = $_POST['senUsu'];
	$acao[0] = 'show';
	$acao[1] = 'logar';

	require_once('controller\cliente.controller.php');
	//function logar(){
		//echo $_SESSION['id'];
		/*foreach ($con->query('SELECT rm, senha, id, cred, nome FROM aluno') as $dado) {
			if($dado[0] == $rm && $dado[1] == $senha){
				$_SESSION['id'] = $dado[2];
				$_SESSION['cred'] = $dado[3];
				$_SESSION['nome'] = $dado[4];
				header('Location:index.php?link=2');
			} else {
				echo '<script> $(document).alert("Login incorreto!"); </script>';
			}
		}

		$db = null;*/
	//}

	/*if (isset($_SESSION['idCli'])) {
		header('Location:index.php?link=2');
	}*/
?>