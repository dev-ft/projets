<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="CSS/styles">
	<head>
		<title>
			Homepage
		</title>
	</head>
	<body>
		<?php
			
			// Création d'une fonction

			function aire($longueur, $largeur) {
				return $longueur * $largeur;
					
			}

			// Je souhaite l'aire d'un champ de 5 mètres sur 4
			
			$resultat = aire(5,4);
				echo "$resultat mètres carré de surface";
			
			
			/*
			function division($nombre_1, $nombre_2) {
				return $nombre_1 / $nombre_2;
			}

			$resultat = division(10,3);

				echo "le résultat de ma division est: ".sprintf("%.2f", $resultat);
			*/
		?>
	</body>
</html>