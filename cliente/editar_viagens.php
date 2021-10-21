<?php
//Conexão
include_once '../php_action/conexao.php';
//Select, verificando se existe o id na url
if (isset($_GET['id'])) {
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM viagem WHERE id = '$id'";

	$resultado = mysqli_query($connect, $sql);

	$dados = mysqli_fetch_array($resultado);
}
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
	<div class="parallax">

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

<div class="row">
	<div class="col s12 m6 push-m3">
		<h2 class="container">Mudar Viagem</h2>
			 <img >
			 <form method="POST" action="../php_action/update_viagem.php">
			 	<input type="hidden" name="id" value="<?php echo $dados['id'];?>">
			 	<h2>Destinos</h2>
			 	<select id="viagem" name="viagem">
			 		<option value="fortaleza-natal">Fortaleza á Natal</option>
			 		<option value="fortaleza-sp">Fortaleza á São Paulo</option>
			 		<option value="fortaleza-rj">Fortaleza á Rio de Janeiro</option>
			 	</select>

			 	<h2>Dia</h2>
			 	<input type="date" name="dia" id="dia">

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

			 	<h2>Valor</h2>
			 	<h4>R$ 200,00</h4>
			 	<input type="hidden" id="valor" name="valor" value="200">

			 	<button type="submit" id="btn-editarviagem" name="btn-editarviagem" class="btn" style="background-color: #2E3131;border-radius: 30px;">Atualizar</button>
			 	<a href="visualizar_viagens.php" class="btn" style="background-color: #2E3131;border-radius: 30px;">Lista de viagens</a>
			 </form>
	</div>
</div>
<?php 
//header
require_once('../require/footer.php');
 ?>
</div>

