<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="tarefas.css">
	<title>Gerenciador de tarefas</title>
</head>
<body>
		<h1>Gerenciador de Tarefas</h1>

		<?php include ('formulario.php'); ?>

		<?php if ($exibir_tabela) : ?>
			<?php include ('tabela.php'); ?>
				<?php endif; ?>
	</body>
</html>