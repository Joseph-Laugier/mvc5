<?php
	require_once "Model.php";
	require_once "Voituree.php";
	

	echo '<h1>Liste voitures:</h1> <div><br>';
	Voiture::getAllVoitures();
	echo '</div> <h2> La voiture 4F2AFP39 :</h2>  <div>';
	Voiture::getVoitureByImmat('4F2AFP39')->afficher();
	echo '</div> <h2> Save voiture:</h2> <div>';
	Voiture::save(new Voiture('peugeot', 'bleu', '4D9DGV83'));
	Voiture::getAllVoitures();
	echo'</div>';	



?>