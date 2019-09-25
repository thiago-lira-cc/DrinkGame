<?php
	include "conectar.php";
	$s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j1 FROM jogadores"));
	$j1 = $s1['j1'];

	$s2 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j2 FROM jogadores"));
	$j2 = $s2['j2'];

	$s3 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j3 FROM jogadores"));
	$j3 = $s3['j3'];

	$s4 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j4 FROM jogadores"));
	$j4 = $s4['j4'];

	$s5 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j5 FROM jogadores"));
	$j5 = $s5['j5'];

	$jogadores = $_GET['jogadores'];
	$p1=$_GET['p1'];
	$p2=$_GET['p2'];
	if (isset($_GET['p3'])){$p3=$_GET['p3'];}
	if (isset($_GET['p4'])){$p4=$_GET['p4'];}
	if (isset($_GET['p5'])){$p5=$_GET['p5'];}
	$total = $j1+$j2;
	$vez = 1;

	function calcular() {
		$vez=1;
		if ($vez==1){
			include "conectar.php";
			$s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j1 FROM jogadores"));
			$j = $s1['j1'];
			$pontos = $j+3;
			$sql2 = "UPDATE jogadores SET j1=$pontos WHERE id=1;";
			mysqli_query($conexao, $sql2);
		}
		if ($vez==2){
			$s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j2 FROM jogadores"));
			$j = $s1['j2'];
			$pontos = $j+3;
			$sql2 = "UPDATE jogadores SET j2=$pontos WHERE id=1;";
			mysqli_query($conexao, $sql2);
		}
		if ($vez==3){
			$s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j3 FROM jogadores"));
			$j = $s1['j3'];
			$pontos = $j+3;
			$sql2 = "UPDATE jogadores SET j3=$pontos WHERE id=1;";
			mysqli_query($conexao, $sql2);
		}
		if ($vez==4){
			$s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j4 FROM jogadores"));
			$j = $s1['j4'];
			$pontos = $j+3;
			$sql2 = "UPDATE jogadores SET j4=$pontos WHERE id=1;";
			mysqli_query($conexao, $sql2);
		}
		if ($vez==5){
			$s1 = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT j5 FROM jogadores"));
			$j = $s1['j5'];
			$pontos = $j+3;
			$sql2 = "UPDATE jogadores SET j5=$pontos WHERE id=1;";
			mysqli_query($conexao, $sql2);
		}
	}
?>
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
		<a class="navbar-brand" href="zerar.php">Zerar</a>
		<a class="navbar-brand" href="index.php">Início</a>
	</nav>

	<form name="form-login" id="form-login" method="POST" action="">
		<div class="form-group botao-centralizado">
			<input type="submit" onclick="calcular()"value="Feito!"/>
		</div>
	</form>
	<?php
		if ($jogadores==2){ 
			?>
			<form action="" method="POST">
				<label ><?php echo $p1 ?></label>
				<div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $j1*100/$total ?>%" aria-valuenow="<?php echo $j1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p2 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $j2*100/$total ?>%" aria-valuenow="<?php echo $j2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
			</form>
		<?php }	
		if ($jogadores==3){ ?>
			<form name="form-login" id="form-login" method="get" action="homepage.php">
				<label ><?php echo $p1 ?></label>
				<div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $v1*100/$total ?>%" aria-valuenow="<?php echo $v1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p2 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v2*100/$total ?>%" aria-valuenow="<?php echo $v2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p3 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v3*100/$total ?>%" aria-valuenow="<?php echo $v3 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
			</form>
		<?php }
		if ($jogadores==4){ ?>
			<form name="form-login" id="form-login" method="get" action="homepage.php">
				<label ><?php echo $p1 ?></label>
				<div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $v1*100/$total ?>%" aria-valuenow="<?php echo $v1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p2 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v2*100/$total ?>%" aria-valuenow="<?php echo $v2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p3 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v3*100/$total ?>%" aria-valuenow="<?php echo $v3 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p4 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v4*100/$total ?>%" aria-valuenow="<?php echo $v4 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
			</form>
		<?php }
		if ($jogadores==5){ ?>
			<form name="form-login" id="form-login" method="get" action="homepage.php">
				<label ><?php echo $p1 ?></label>
				<div class="progress">
				<div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $v1*100/$total ?>%" aria-valuenow="<?php echo $v1 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p2 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v2*100/$total ?>%" aria-valuenow="<?php echo $v2 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p3 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v3*100/$total ?>%" aria-valuenow="<?php echo $v3 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p4 ?></label>
				<div class="progress">
					<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v4*100/$total ?>%" aria-valuenow="<?php echo $v4 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
				<label ><?php echo $p5 ?></label>
				<div class="progress">
				<div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $v5*100/$total ?>%" aria-valuenow="<?php echo $v5 ?>" aria-valuemin="0" aria-valuemax="<?php echo $total ?>"></div>
				</div>
			</form>

		<?php }
	?>

	<div id="rodape">			
		<p>Drinks Game - Flopados</p>
		<p>Desenvolvido por Thiago Lira</p>			
	</div>		
</body>
</html>