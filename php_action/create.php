<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-cadastrar'])) {

	//Filtrando os dados pelo scape
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "INSERT INTO cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

	//Verificando se coneguimos inserir as informações no banco
	if (mysqli_query($connect,$sql)) {
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../login.php');

	}else{
		$_SESSION['mensagem'] = "Erro ao cadastrar!";
		header('Location: ../index.php');
	}
}

 ?>