<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-editar'])) {

	//Filtrando os dados pelo scape
	$id = mysqli_escape_string($connect, $_POST['id']);
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "UPDATE cliente SET nome = '$nome', email = '$email',senha = '$senha' WHERE id = '$id'";

	//Verificando se coneguimos inserir as informações no banco
	if (mysqli_query($connect,$sql)) {
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../usuarios.php');
	}else{
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../usuarios.php');
	}
}

 ?>