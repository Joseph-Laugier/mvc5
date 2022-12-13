<?php
// Permet d'appeler une methode dans ControllerVoiture 
require_once 'ControllerVoiture.php';
$action = $_GET['action'];

if (isset($_GET['immat'])){
	$argument = $_GET['immat'];
}

if (isset ($_GET['immat'])){
	ControllerVoiture::$action($argument);
} 
else{
	ControllerVoiture::$action();
}

?>