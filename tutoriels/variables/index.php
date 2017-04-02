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
			// Pour dire à PHP je veux créer une variable, on écrit toujours dollar, suivi du nom de la variable
			$le_nom_de_la_variable = "une valeur";
			
			// Affiche la variable
			$ma_nom_de_la_variable = "une valeur";
				echo $le_nom_de_la_variable;
			
			//-----------------------------------------------------//

			// types de variables

			// String = Chaine de caractères
			$variable_string = "un texte";

			// Int = Nombre entier
			$variable_int = 15;

			// Float = Nombre à virgule
			$variable_float = 10.5;

			//-----------------------------------------------------//

			// la concaténation

			$pseudo = "charlie";

			echo "<br>Bonjour ".$pseudo.'<br>';

			echo "Bonjour ".$pseudo." comment ça va ?";

			// Ma variable $pseudo contient "charlie"

			// PS: les espaces sont comptés comme des caractères dans les guillemets

			//-----------------------------------------------------//

			// les opérations mathématiques

			$nombre_1 = 10;
			$nombre_2 = 20;

			$addition = $nombre_1+$nombre_2;
			$soustraction = $nombre_2-$nombre_1;
			$multiplication = $nombre_1*$nombre_2;
			$division = $nombre_1/$nombre_2;
			
			echo "<br>résultat de mon addition: $addition "."<br>résutat de ma soustraction: $soustraction "."<br>résultat de ma multiplication: $multiplication "."<br>résultat de ma division: $division";
			

		
		?>
	</body>
</html>