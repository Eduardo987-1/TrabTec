<?php 
	//CONEXÃO
	require_once 'php_action/conexao.php';
	require_once 'require/header.php';

	//SESSÕES
	session_start();

	//BOTÃO ENVIAR
	if (isset($_POST['btn-cadastrar'])) {
		$erros = array();
		$nome = mysqli_escape_string($connect, $_POST['nome']);
		$senha = mysqli_escape_string($connect, $_POST['senha']);

		if (empty($nome) or empty($senha)) {
			$erros[] = "<li>O campo nome ou Senha precisam ser preenchidos </li>";
		}else{
			$sql = "SELECT nome FROM cliente WHERE nome = '$nome'";
			$resultado = mysqli_query($connect, $sql);

			if (mysqli_num_rows($resultado)> 0) {
				$sql = "SELECT * FROM cliente WHERE nome = '$nome' AND senha = '$senha'";
				$resultado = mysqli_query($connect, $sql);
				if (mysqli_num_rows($resultado) == 1) {
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($connect);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					header('Location: cliente/viagem.php');
					if ($nome == "admin" & $senha=="1234" ) {
						header('Location: usuarios.php');
					}
				}else{
					$erros[] = "<li> Usuário e senha não conferem </li>";
				}
			}else{
				$erros[] = "<li> Usuário inexistente </li>";
			}
		}
	}

 ?>
<div class="parallax">
	<h1 class="container center-align">Login</h1>

	<?php 
		if (!empty($erros)) {
			foreach ($erros as $erro) {
				echo $erro;
			}
		}

	 ?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="input-field col s12">
					<input type="text" name="nome">
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="password" name="senha">
					<label for="senha">Senha</label>
				</div>
				<button type="submit" id="btn-cadastrar" name="btn-cadastrar" class="btn" style="background-color: #2E3131;border-radius: 30px;">Entrar</button>
				<a class="waves-effect waves-light btn" href="index.php" style="background-color: #2E3131;border-radius: 30px;">Voltar</a>
			</form>
			<h6><strong>* Para comprar suas passagens você precisa estar logado!</strong></h6>
		</div>
	</div>
	</div>
	</div>


	<?php
	require_once('require/footer.php');
	?>