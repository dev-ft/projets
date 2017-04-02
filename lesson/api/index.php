<?php
	// file_exists -> Vérifie si un fichier ou un dossier existe
	if (file_exists("PrixCarburant.xml"))	{
		
		// simplexml_load_file -> Convertit un fichier XML en objet
		$xml = simplexml_load_file("PrixCarburant.xml");
				
		// pdv est un attribut de $xml
		foreach ($xml->pdv as $pdv) {
					
			// strval -> Récupère la valeur d'une variable, au format chaîne
			if ($_REQUEST["cp"]==strval($pdv->attributes()->cp)) {
						echo(strval($pdv->adresse)."<br>");
			}
		}
	}

	else {
		exit("Echec lors de l'ouverture du fichier PrixCarburant.xml")





?>
