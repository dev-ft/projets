Les boucles for sont parfaites pour exécuter le même code à plusieurs reprises, surtout quand on sait à l'avance combien de fois vous aurez besoin de boucler.

<?php
	
	// tant que $cpt est inférieur à 10000 je compte de 1 en 1
	for ($cpt = 5000; $cpt < 10000; $cpt++)	{
		echo "<p>$cpt<p>";
	}
	
	// tant qu $cpt est inférieur à 10000 je compte de 100 en 100
	for ($cpt = 5000; $cpt < 10000; $cpt = $cpt + 100)	{
		echo "<p>$cpt<p>";
	}

?>