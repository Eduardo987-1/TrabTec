<?php 
//Sessão
session_start();
//Conexão
require_once 'conexao.php';

//verificando se o botão do adicionar foi acionado
if (isset($_POST['btn-editarviagem'])) {

	//Filtrando os dados pelo scape
	$id =  $_POST['id'];
	$viagem =  $_POST['viagem'];
	$valor =  $_POST['valor'];
	$dia = $_POST['dia'];
	$poltrona =  $_POST['poltrona'];

	// Acionando o comando sql pra inserir os dados no banco
	$sql = "UPDATE viagem SET viagem = '$viagem', valor = '$valor',dia = '$dia',poltrona = '$poltrona' WHERE id = '$id'";

	//Verificando se coneguimos inserir as informações no banco
	if (mysqli_query($connect,$sql)) {
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../cliente/visualizar_viagens.php');
		
		}
	}else{
		$_SESSION['mensagem'] = "Erro ao atualizar!";
		header('Location: ../cliente/visualizar_viagens.php');
	}
 ?>