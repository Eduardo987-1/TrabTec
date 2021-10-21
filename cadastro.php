<?php
require_once('require/header.php');

?>
<div class="parallax">
	<div class="row">
		<div class="col s12 m6 push-m3">
			<strong><h3 >Novo Cliente</h3></strong>
			<form action="php_action/create.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" required>
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="email" id="email" required>
					<label for="email">Email</label>
				</div>
				<div class="input-field col s12">
					<input type="password" name="senha" id="senha" required>
					<label for="senha">Senha</label>
				</div>

				<button type="submit" id="btn-cadastrar" name="btn-cadastrar" class="btn" style="background-color: #2E3131;border-radius: 30px;"> Cadastrar</button>
				<a class="waves-effect waves-light btn" href="index.php" style="background-color: #2E3131;border-radius: 30px;">Voltar</a>
			</form>
		</div>
	</div>
</div>

<?php
require_once('require/footer.php');

?>