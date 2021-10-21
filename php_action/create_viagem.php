<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-comprar'])) {
	//Filtrando os dados pelo scape
	$viagem =  $_POST['viagem'];
	$valor =  $_POST['valor'];
	$dia =  $_POST['dia'];
	$poltrona =  $_POST['poltrona'];

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "INSERT INTO viagem (viagem, valor, dia, poltrona) VALUES ('$viagem', '$valor', '$dia', '$poltrona')";

	//Verificando se coneguimos inserir as informações no banco
	if (mysqli_query($connect,$sql)) {
		$_SESSION['mensagem'] = "Viagem comprada com sucesso!";
		header('Location: ../cliente/viagem.php');
	}else{
		$_SESSION['mensagem'] = "Erro ao comprar!";
		header('Location: ../cliente/viagem.php');
	}
}

 ?>