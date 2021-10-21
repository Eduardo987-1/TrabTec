<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-deletar'])) {

	//Filtrando os dados pelo scape
	$id = mysqli_escape_string($connect, $_POST['id']);

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "DELETE FROM assunto WHERE id = '$id'";

	//Verificando se coneguimos inserir as informações no banco
	if (mysqli_query($connect,$sql)) {
		$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('Location: ../usuarios.php');
	}else{
		$_SESSION['mensagem'] = "Erro ao deletar!";
		header('Location: ../usuarios.php');
	}
}

 ?>