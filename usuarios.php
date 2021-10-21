<?php

//Conexão
include_once 'php_action/conexao.php';
// Header
include_once 'require/header.php';
//Message
include_once 'php_action/message.php';
//header
require_once('require/header.php');
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Clientes</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Email:</th>
					<th>Senha:</th>
				</tr>
			</thead>

			<tbody>
				<?php 
					// Deixando as linhas com os resultados do banco
					$sql = "SELECT * FROM cliente";
					$resultado = mysqli_query($connect, $sql);

					while ($dados = mysqli_fetch_array($resultado)) {
				 ?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['senha']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class=" material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class=" material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">

					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" id="btn-deletar" name="btn-deletar" class="btn red">Sim, quero deletar</button>

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

	</div>
</div>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Viagens</h3>
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
					<td><?php echo $dados['viagem']; ?></td>
					<td><?php echo $dados['valor']; ?></td>
					<td><?php echo $dados['dia']; ?></td>
					<td><?php echo $dados['poltrona']; ?></td>	
					      </form>
					    </div>
					  </div>
				</tr>

				<?php 
					}
				 ?>
			</tbody>
		</table>

		<br/>

		
	</div>
</div>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Assuntos</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Email:</th>
					<th>Assunto:</th>
				</tr>
			</thead>

			<tbody>
				<?php 
					// Deixando as linhas com os resultados do banco
					$sql = "SELECT * FROM assunto";
					$resultado = mysqli_query($connect, $sql);

					while ($dados = mysqli_fetch_array($resultado)) {
				 ?>
				<tr>
					<td><?php echo $dados['nome']; ?></td>
					<td><?php echo $dados['email']; ?></td>
					<td><?php echo $dados['assunto']; ?></td>
					<td><a href="editar_assunto.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class=" material-icons">edit</i></a></td>

					<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class=" material-icons">delete</i></a></td>

					<!-- Modal Structure -->
					
					  <div id="modal<?php echo $dados['id']; ?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">

					      <form action="php_action/delete_assunto.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
					      	<button type="submit" id="btn-deletar" name="btn-deletar" class="btn red">Sim, quero deletar</button>

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

		<a href="login.php" class="btn">Voltar a área de Login</a>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script>
      	M.AutoInit();
      </script>


<?php
// Footer
require_once('require/footer.php');
?>
   
   