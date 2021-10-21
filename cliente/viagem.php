<?php 
	//CONEXÃO
	require_once '../php_action/conexao.php';
	//SESSÕES
	session_start();

	//VERIFICAÇÃO
	if (!isset($_SESSION['logado'])) {
		header('Location : index.php');
	}

	//DADOS
	$id = $_SESSION['id_usuario'];
	$sql = "SELECT * FROM cliente WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
	mysqli_close($connect);
 ?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TopTour</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="../redes/dist/sharestatic.css">
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
			<div class="col s12 m6 push-m3 center-align">
				<h1>Viagens Disponíveis</h1>
				<h5> Olá
					<?php echo $dados['nome']; ?>, selecione o seu destino,dia e poltrona para compra sua passagem.
				</h5>
				<form method="POST" action="../php_action/create_viagem.php">
					<h2>Destinos</h2>
					<div class="input-field col s12">
						<select id="viagem" name="viagem">
							<option value="Fortaleza-Natal">Fortaleza/Natal</option>
							<option value="Fortaleza-Sp">Fortaleza/São Paulo</option>
							<option value="Fortaleza-Rj">Fortaleza/Rio de Janeiro</option>
						</select>
					</div>

					<h2>Dia</h2>
					<input type="date" name="dia" id="dia" value="2021-10-09">
				

					<h2>Poltrona</h2>
					<select id="poltrona" name="poltrona">
						<option value="01">01</option>
						<option value="02">02</option>
						<option value="03">03</option>
						<option value="04">04</option>
						<option value="05">05</option>
						<option value="06">06</option>
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
					</select>
					<img/>
					<h2>Valor</h2>
					<h3>R$ 200,00</h3>
					<input type="hidden" id="valor" name="valor" value="200">
					<br>

					<button type="submit" id="btn-comprar" name="btn-comprar" class="btn" style="background-color: #2E3131;border-radius: 30px;"> Comprar</button>
				</form>


				<h1>SUAS VIAGENS</h1>
				<button class="waves-effect waves-light btn" style="background-color: #2E3131;border-radius: 30px;"><a href="visualizar_viagens.php" style="color: white;">aqui para ver suas viagens !</a> </button>
				<br><br><br>

				<button class="waves-effect waves-light btn" style="background-color: #2E3131;border-radius: 30px;"><a href="../login.php" style="color: white;">para a página de login</a></button>

				<br><br>




			</div>
		</div>
		<?php 
//header
require_once('../require/footer.php');
 ?>
	</div>