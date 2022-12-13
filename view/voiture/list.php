<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste Voitures</title>
</head>
<body>

<?php

	foreach($tab_v as $v){
		$vImmatriculation = htmlspecialchars($v->Immatriculation());

		echo '<p> Voitures d\' immatriculation: 
		<a href="index.php?action=read&immat='.$v->getImmatriculation(). ' "> '. $vImmatriculation.' </a>  </p>';


		/*$vimmat = htmlspecialchars($v->get('immatriculation'));
		$vimmat2 = rawurldecode($v->get('immatriculation'));
		
	echo '<p> Voitures d\' immatriculation ' . ' <a href = "../controller/routeur.php?action=read&immat' .$vimmat. ' ">' .$vimmat2 . '</a>.<br>';
	*/
	}

?>



</body>
</html>