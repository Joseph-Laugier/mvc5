<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detail</title>
</head>
<body>

<?php
		$xImmatriculation = htmlspecialchars($x->getImmatriculation());	
		$vMaque = htmlspecialchars($v->getMarque());
		$vCouleur = htmlspecialchars($v->getCouleur());


		echo ' <h1> Detail voiture: </h1>';

		echo ' Immatriculation: ' . $vImmatriculation. '<br>';
		echo ' Marque: ' . $vMaque. '<br>';
		echo ' Couleur: ' . $vCouleur. '<br>';


?>

</body>
</html>
