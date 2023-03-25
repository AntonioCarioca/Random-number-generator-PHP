<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/container/container.css">
	<link rel="stylesheet" href="../css/container/container-link.css">
	<link rel="stylesheet" href="../css/container/container-sorteio.css">
</head>
<body>
	
	<div class="container">
		<p></p>
		<?php
			require_once "classes/dado.php";
			require_once "classes/sorteio.php";

			if ($_POST['qdados'] != NULL and $_POST['qdados'] > 0) {
				$qdados = $_POST['qdados'];
				$qlados = $_POST['qlados'];
				$dado = new Dado();
				$sorteio = new Sorteio();

				$dado->set_lado($qlados);
				$dado->set_quantidade($qdados);
				//echo $dado->get_quantidade().$dado->get_lado();
				$sorteio->sortear($qdados,$qlados);
				$sorteio->mostrarValores();

				echo "<p class='container--sorteio'>Tipo do dado: {$dado->get_lado($qlados)} lados</p>";
			}
			else{
				header("Location: ../../index.html");
			}

		?>
		<a class="container--link" href="../../index.html">Voltar</a>

	</div>

</body>
</html>