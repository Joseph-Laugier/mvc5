<?php 

require_once (File::build_path(['model','ModelVoiture.php'])); // pour le chargment du modele 
require_once (File::build_path(['lib','File.php']));

class ControllerVoiture {

    public static function readAll() { 
        $tab_v = ModelVoiture::getAllVoitures(); 
        $controller = 'voiture';
        $view = 'list';
        $pagetitle = ' Liste voitures';

        require (File::build_path(['view','view.php'])); 
	

	}

	public static function read($argument){
		$v = ModelVoiture::getVoitureByImmat($argument);
		
		if ($v !=NULL) {

	        $controller = 'voiture';
	        $view = 'detail';
	        $pagetitle = 'détail';
			require (File::build_path(['view','view.php'])); 
		} else{
			 $controller = 'voiture';
	        $view = 'eror';
	        $pagetitle = 'Erreur';
			require (File::build_path(['view','view.php'])); 
	}

	public static function create() {
		
		 $controller = 'voiture';
	     $view = 'create';
	     $pagetitle = 'Création voitures';
	     require (File::build_path(['view','view.php'])); 
	}

	public static function created($argument){
		ModelVoiture::save($argument);
		$tab_v = ModelVoiture::getAllVoitures();
		 $controller = 'voiture';
	     $view = 'list';
	     $pagetitle = 'voitures créer';
	     require (File::build_path(['view','view.php'])); 
	}

 } 

?>

