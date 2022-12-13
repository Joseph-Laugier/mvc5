<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Creer Voiture</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <?php 
	
	if (isset($_POST['immatriculation']) && isset($_POST['marque']) && isset($_POST['couleur'])){
		echo "Save voiture:";
		require_once('Voituree.php');
		$voiture1 = new Voiture(escape($_POST['immatriculation']), escape($_POST['marque']), escape($_POST['couleur']));
		$voiture1-> afficher();
		try{
			Voiture::save($voiture1);
		} catch (PDOException $e){
			echo $e->getMessage();
			die();
		}
	}
	else{
		echo '<h1> Erreur formulaire</h1>';
	}



 ?>



</body>
</html>