<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-editar'])) {

	//Filtrando os dados pelo scape
	$id =  $_POST['id'];
	$nome =  $_POST['nome'];
	$email =  $_POST['email'];
	$assunto =  $_POST['assunto'];

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "UPDATE assunto SET nome = '$nome', email = '$email',assunto = '$assunto' WHERE id = '$id'";

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