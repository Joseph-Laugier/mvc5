<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Creat</title>
</head>
<body>

	<form method="get" action="index.php?action=created">
		<fieldset>
		<legend> Création </legend>
		
		<P>
			<label for="immat_id">Immatriculation</label>
			<input type="text" placeholder="Ex : 4F2AFP39"  name="immatriculation" id="immat_id" required/>
		</P>

		<P>
			<label for="marque_id">Marque</label>
			<input type="text" placeholder="Ex : Ford"  name="marque" id="marque_id" required/>
		</P>

		<P>
			<label for="couleur_id">Couleur</label>
			<input type="text" placeholder="Ex : Rouge"  name="couleur" id="couleur_id" required/>
		</P>

		<p> <input type="submit" value="Envoyer"/> </p>

		</fieldset>
	 </form>


</body>
</html>
