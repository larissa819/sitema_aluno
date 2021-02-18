<?php

	include('conexao.php');
	
	$SQL = "SELECT * FROM pessoas";
	
	// Executa o comando SQL
	$dados_recuperados = mysqli_query($con, $SQL);

	if($dados_recuperados) {
		if(mysqli_num_rows($dados_recuperados) > 0){
			
			echo "<table border='1'>";
			echo "<tr>
					<th>Prontuário</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Endereço</th>
					<th colspan='2'>Operações</th>
				  </tr>";
			
			while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
				
				echo "<tr>";
					echo "<td>" . $resultado[0] . "</td>";	
					echo "<td>" . $resultado[1] . "</td>";
					echo "<td>" . $resultado[2] . "</td>";
					echo "<td>" . $resultado[3] . "</td>";
					echo "<td><a href='editar_aluno.php?pront=$resultado[0]'>Editar</a></td>";
					echo "<td><a href='remover_aluno.php?pront=$resultado[0]'>Remover</a></td>";
				echo "</tr>";
			}
			
			echo "</table>";
		}
	} else {
		echo "Problema de sintaxe SQL<br>";
		echo mysqli_error($con);
	}
	
	mysqli_close($con);
?>

<a href="menu.php">Voltar</a>