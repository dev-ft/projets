<?php
	
	// le 1er élément correspond à 0 en tant que clé
	$langages = array("HTML/CSS","JavaScript","PHP","Python","Ruby");

	echo "Exemple d'un print_r:"."<br><br>";
	// Affiche le contenu d'une variable en général mais pour un tableau indique chaque poste avec ses clés
	print_r($langages);
	
	echo "<br><br>"."Exemple d'un var_dump:"."<br>";
	// Identique à print_r mais avec plus de détails
	var_dump($langages);

	// Affiche un élément du tableau
	echo $langages[1]." // élément n°1<br><br>";

	foreach($langages as $lang) {
          print "<p>$lang<p>";
        }

	// Supprime la 3 ème clé du tableau sois Python
	unset($langages[3]);

	// Affiche uniquement le contenu comme un simple echo
	echo join("<br>",$langages);

	// Assigne ou remplace une nouvelle valeur dans le tableau
	$langages[0] = "<br><br>"."Nouveau élément";

	echo join("<br>",$langages);
	

    


	

 ?>