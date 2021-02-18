<?php
	include('cabecalho.inc');
?>

	<form action="consulta_rar.php" method="POST">
		<label>Prontuario:</label>
		<input type="number" name="prontuario" />
		<br>
		
		<input type="submit" value="Consultar" />
	</form>
<?php
	include('rodape.inc');
?>