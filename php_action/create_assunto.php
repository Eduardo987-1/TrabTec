<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-enviar'])) {

	//Filtrando os dados pelo scape
	$nome =  $_POST['nome'];
	$email =  $_POST['email'];
	$assunto =  $_POST['assunto'];

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "INSERT INTO assunto (nome, email, assunto) VALUES ('$nome', '$email', '$assunto')";

	//Verificando se coneguimos inserir as informações no banco
	if (mysqli_query($connect,$sql)) {
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	}else{
		$_SESSION['mensagem'] = "Erro ao cadastrar!";
		header('Location: ../index.php');
	}
}

 ?>