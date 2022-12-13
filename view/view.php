<!DOCTYPE html>
<html lang="fr">
 <head>
 <meta charset="UTF-8">
 <title><?php echo $pagetitle; ?></title>
 </head>
 <body>
<header>
    <a href="index.php?action=readAll">Accueil Voitures</a>
    <a href="index.php?action=readAll&controller=utilisateur">Accuil Utilisateurs</a>
    <a href="index.php?action=readAll&controller=trajet">Accueil Trajets</a>

</header>
<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
$filepath = File::build_path(array("view", $controller, "$view.php"));
require $filepath;
?>

<footer> <p style="border:2px solid black; text-align:right;padding-right:1rem ;">Site de covoiturage de LAUGIER Joseph </footer>
 </body>
</html>