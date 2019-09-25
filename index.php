<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Flopados</title>
		<link rel="shortcut icon" href="imagens/favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="js/libs/jquery-3.3.1.min.js"></script>
		<script src="js/libs/bootstrap.min.js"></script>
		<script src="js/libs/jquery.validate.js"></script>
		<script src="js/views/index.js"></script>
	<title></title>
</head>
<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<a class="navbar-brand" onclick='history.go(-1)'>Voltar</a>
			<a class="navbar-brand" href="index.php">Início</a>

		</nav>

		<div id="container-imagem">
		
				<img class="logo" src="imagens/logo1.png" alt="Logo" title="Logo"/>
			
		</div>
				<div>
				
					<?php include "paginas.php"; ?>
				
				</div>
		<div id="rodape">
			
				<p>Drinks Game - Flopados</p>
				
				<p>Desenvolvido por Thiago Lira</p>
			
		</div>		
	</div>
</body>
</html>