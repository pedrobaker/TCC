<?php
class ClienteService {
	private $conexao;
	private $cliente;

	function __construct(Conexao $conexao, Cliente $cliente){
		$this->conexao = $conexao->connect();
		$this->cliente = $cliente;
	}

	function show(){
		try{
			if($acao[1]=='logar'){
				$sql = "SELECT id, login, nome, senha, cred FROM cliente WHERE login = :login AND senha = :senha";
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':login', $this->cliente->__get('login'));
				$stmt->bindValue(':senha', $this->cliente->__get('senha'));
				$stmt->execute();
			}

			if ($acao[1]=='mostrar') {
				$sql = "SELECT id, login, nome, senha, cred FROM cliente WHERE id = :id";
				$stmt = $this->conexao->prepare($sql);
				$stmt->bindValue(':id', $this->cliente->__get('id'));
				$stmt->execute();
			}
			//$sql = "SELECT id, login, nome, senha, cred FROM cliente WHERE login = ".$this->cliente->__get('id')." AND senha = ".$this->cliente->__get('senha')."";
			//$result = $this->conexao->query($sql);
			$result = $stmt->fetch(PDO::FETCH_OBJ);

			return $result;
			
		} catch(PDOException $e) {
			echo "ERRO AO LOGAR: $e->getMessage()";
		}
	}

	function create(){
		try{
			$sql = "INSERT INTO cliente(id, login, nome, senha, cred) VALUES (:id, :login, :nome, :senha, :cred)";
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->bindValue(':login', $this->cliente->__get('login'));
			$stmt->bindValue(':nome', $this->cliente->__get('nome'));
			$stmt->bindValue(':senha', $this->cliente->__get('senha'));
			$stmt->bindValue(':cred', $this->cliente->__get('cred'));
			$stmt->execute();
		} catch(PDOException $e) {
			echo "ERRO NO CADASTRO DE CLIENTE: $e->getMessage()";
		}
	}

	function update(){
		try{
			$sql = 'UPDATE cliente SET login=:login, nome=:nome, senha=:senha, cred=:cred WHERE id=:id';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':login', $this->cliente->__get('login'));
			$stmt->bindValue(':nome', $this->cliente->__get('nome'));
			$stmt->bindValue(':senha', $this->cliente->__get('senha'));
			$stmt->bindValue(':cred', $this->cliente->__get('cred'));
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->execute();
		} catch(PDOException $e) {
			echo "ERRO AO ATUALIZAR CLIENTE: $e->getMessage()";
		}
	}

	function delete(){
		try{
			$sql = 'DELETE FROM cliente WHERE id=:id';
			$stmt = $this->conexao->prepare($sql);
			$stmt->bindValue(':id', $this->cliente->__get('id'));
			$stmt->execute();
		} catch(PDOException $e) {
			echo "ERRO AO DELETAR CLIENTE: $e-getMessage()";
		}
	}
}
?>