<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<head>
		<title>index</title>
	</head>
	<body>
		<?php
//fonction qui prend en paramètre un nom(classe css) qui fabrique du code css qui génère une couleur de fond et de texte aléatoire
		echo generator();


		function generator($className){
			return '.toto { color: #FF0000; }';
			$color = dechex(rand(0,255))
			echo $color;
		}
























			//stocker dans une variable un chemin vers un document (peux importe lequel)
			//retourner à l'aide d'une fonction le nombre de documents (rencontrer) sur le chemin
			
			//echo "<pre>";
			//print_r(toto("C:\Users\Charlie\Desktop"));
			
			
			/*echo nbFiles("C:\Users\Charlie\Desktop", "rtf").'<br>';
			echo nbFiles("C:\Users\Charlie\Desktop", "logrr").'<br>';
			echo nbFiles("C:\Users\Charlie\Desktop", "txt", true).'<br>';

			function nbFiles($dossier, $suffixe, $recursif = false) {
				$cpt = 0;
				foreach(scandir($dossier) as $elements) {
					$chemin = $dossier.'\\'.$elements;
					error_log($chemin);
					if (is_dir($chemin)==false) {
						if (pathinfo($chemin, PATHINFO_EXTENSION)==$suffixe){
							$cpt++;
						}
					} else {
						// dossier
						if($recursif && $elements!='.' && $elements!='..') {
							$cpt += nbFiles($chemin, $suffixe, true);
						}
					}
				}
				return $cpt;
			}








/*
			function toto($param) {
				// echo "contenu du dossier: $param<br>";
				$nbd = 0;
				$nbf = 0;

				foreach(scandir($param) as $item) {
					
					if (is_dir($param.'\\'.$item)==true) {
						$nbd++;
					}
					else{
						$nbf++;
					}

				}
				$tableau = array("nbDossier" => $nbd, "nbFichier" => $nbf);
				return $tableau;
			}
*/

			/*
			function pileOUface()	{
				if(rand(0,1)==0)	{
					return "pile";
				}
			
				return "face";
			}
			$result= array();
			$courant =  "a";
			$courant_1 =  $courant_2 = "";
			do {
				$result[]=pileOUface();
				if(count($result)>=3) {
					$courant =  $result[count($result)-1];
					$courant_1 =  $result[count($result)-2];
					$courant_2 =  $result[count($result)-3];
				}

			} while($courant != $courant_1 || $courant != $courant_2 ||  $courant_1 != $courant_2);

			echo "<br>"."J'ai fais ".count($result)." lancés";
			echo '<pre>';
			print_r($result);


			
			$nbPile=0;
			$nbFace=0;
			$nbDeLances=0;
			$precedent ="";
			while ($nbFace < 3 && $nbPile < 3)	{
				$now = pileOUface();
				$nbDeLances++;
				
				//sleep(3);
				if($now == $precedent || $precedent =="") {

					if($now == "face")	{
						$nbFace++;
					}
					else{
						$nbPile++;
					}
					echo "lance $nbDeLances: $now / $precedent \n<br>";
					
				} else{
					$nbPile = 0;
					$nbFace = 0;
				}

				$precedent = $now;
			}

			echo $nbFace;
			echo "<br>".$nbPile;
			echo "<br>"."J'ai fais ".$nbDeLances." lancés";
*/


		

		?>
	</body>
</html>