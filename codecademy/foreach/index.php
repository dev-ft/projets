Il y a aussi un autre type de boucle un peu spécial, appelé boucle foreach que nous pouvons utiliser pour mettre à jour ou afficher ou parcourir chaque élément d'une liste. Comme par exemple, les éléments d'un tableau.

La boucle foreach est utilisée pour itérer (boucler) sur chaque élément d'un objet. Du coup, c'est particulièrement utile pour l'utiliser avec des tableaux !

De façon imagée, vous pouvez imaginer que le foreach permet de sauter d'éléments en éléments du tableau et permet l'exécution d'un bloc de code (entre les accolades { }) pour chacun de ses éléments.
<hr>
<?php
	
	$inventaire = array ("a","b","c","d","e");
	
	foreach($inventaire as $ligne){
		$ligne = 9;
			echo("<p>$ligne<p>");
	}

















?>