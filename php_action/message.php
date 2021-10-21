<?php 
//Sessão
session_start();
if (isset($_SESSION['mensagem'])) {
?>

<script type="text/javascript">
	//Mensagem de Sucesso/Erro ao cadastrar
	window.onload = function(){
		M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'})
	}
</script>

<?php
}
session_unset();

 ?>