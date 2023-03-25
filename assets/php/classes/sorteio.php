<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../css/container/container-sorteio.css">
</head>
<body>
	
</body>
</html>

<?php
	
	require_once "dado.php";

	class Sorteio extends Dado{

		protected $resultado;
		protected $valor;
		protected $valores = array();

			public function sortear($quantidade,$lado){
			for ($i=0; $i < $quantidade; $i++) { 
					$this->valor = mt_rand(1,$lado);
					$this->valores[$i] = $this->valor;
					$this->resultado = $this->resultado+$this->valor;
				}
					echo "<p class='container--sorteio'>Resultado: {$this->resultado}</p>";
					echo "<br>";
		}

		public function mostrarValores(){
			foreach ($this->valores as $x => $key) {
				echo "<p class='container--sorteio'>{$x}. valor sorteado: {$key}<br></p>";
			}
			echo "<br>";

		}

	}


?>