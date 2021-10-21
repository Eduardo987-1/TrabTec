<?php

//Conexão
include_once '../php_action/conexao.php';

//Message
include_once '../php_action/message.php';

?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TopTour</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="redes/dist/sharestatic.css">
	<link rel="stylesheet" href="../css/estilo.css">
</head>

<body>
	<div class="navbar">
		<nav>
			<div class="nav-wrapper" style="background-color: #2E3131;">
				<!-- Logo -->
				<a href="../index.php" class="brand-logo center">TopTour</a>

				<!-- Ícone para abrir no Mobile -->
				<a href="#" data-target="mobile-navbar" class="sidenav-trigger">
					<i class="material-icons">menu</i>
				</a>

				<ul id="navbar-items" class="right hide-on-med-and-down">
					<li><a href="../index.php">Home</a></li>
					<li><a href="../login.php">Viagem</a></li>
					<li><a href="../index.php">Contatos</a></li>
					<li><a href="../cadastro.php">Cadastro</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<!-- Menu Mobile -->
	<ul id="mobile-navbar" class="sidenav">
		<li><a href="../index.php">Home</a></li>
		<li><a href="../login.php">Viagem</a></li>
		<li><a href="../index.php">Contatos</a></li>
		<li><a href="../cadastro.php">Cadastro</a></li>
	</ul>
	<div class="parallax">
		<div class="row">
			<div class="col s12 m6 push-m3">
				<h3> Clientes</h3>
				<table class="striped">
					<thead>
						<tr>
							<th>Viagem:</th>
							<th>Valor:</th>
							<th>Dia:</th>
							<th>Poltrona:</th>
						</tr>
					</thead>

					<tbody>
						<?php 
					// Deixando as linhas com os resultados do banco
					$sql = "SELECT * FROM viagem";
					$resultado = mysqli_query($connect, $sql);

					while ($dados = mysqli_fetch_array($resultado)) {
				 ?>

						<tr>
							<td>
								<?php echo $dados['viagem']; ?>
							</td>
							<td>
								<?php echo $dados['valor']; ?>
							</td>
							<td>
								<?php echo $dados['dia']; ?>
							</td>
							<td>
								<?php echo $dados['poltrona']; ?>
							</td>
							<td><a href="editar_viagens.php?id=<?php echo $dados['id']; ?>"
									class="btn-floating orange"><i class=" material-icons">edit</i></a></td>

							<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i
										class=" material-icons">delete</i></a></td>

							<!-- Modal Structure -->
							<div id="modal<?php echo $dados['id']; ?>" class="modal">
								<div class="modal-content">
									<h4>Opa!</h4>
									<p>Tem certeza que deseja cancelar essa viagem?</p>
								</div>
								<div class="modal-footer">

									<form action="../php_action/delete_viagem.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
										<button type="submit" name="btn-deletarviagem" class="btn red">Sim, quero
											deletar</button>

										<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
									</form>
								</div>
							</div>
						</tr>

						<?php 
					}
				 ?>
					</tbody>
				</table>
				<br>
				<a href="../login.php" class="btn" style="background-color: #2E3131;border-radius: 30px;">Voltar a área de Login</a>
			</div>
		</div>

	
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
		M.AutoInit();
	</script>
		<?php 
	//header
	require_once"../require/footer.php";
	
	 ?>