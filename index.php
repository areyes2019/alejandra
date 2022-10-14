<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Hola mundo</h1>
	<p>Esta es mi primera pagina</p>
	<ul>
		<li>Cebollas $50.00</li>
		<li>Ajos     $40.00</li>
		<li>Jitomates$30.00</li>
	</ul>
	<label for="">Escriba un numero</label>
	<input type="text" placeholder="Escirba el numero">	
	<button>Enviar</button>
	<p>Estoes un cambio</p>
	<p>Lorem ipsum dolor sit, amet, consectetur adipisicing elit. Magnam minus quis a voluptatem, dolores, aliquid delectus corrupti perferendis, quibusdam, voluptas itaque. Adipisci sit molestiae nesciunt non quasi expedita, doloremque molestias?</p>	
	<p>
		<?php
			$edad_minima = 20;
			$regla = 12;

			if ($edad_minima >= $regla) {
				$msg = "puedes pasar, disfruta";
			}else{
				$msg = "los siento estas muy chico";
			}
		?>
		<h1><?php echo $msg; ?></h1>
	</p>
	
</body>
</html>