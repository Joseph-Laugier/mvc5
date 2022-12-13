<?php
  require (File::build_path(['model','Model.php']));

class ModelVoiture { 
 private $marque;
 private $couleur;
 private $immatriculation;

 // getter
 public function getMarque() {
 return $this->marque;
 }

public function getCouleur() {
 return $this->couleur;
 }

 public function getImmatriculation() {
 return $this->immatriculation;
 }


 // setter
 public function setMarque($marque2) {
 $this->marque = $marque2;
 }

  public function setCouleur($couleur2) {
 $this->marque= $marque2;
 }

 public function setImmatriculation($immatriculation2) {
 if(strlen($immatriculation) ==8)
{
  $this->immatriculation = $immatriculation2;

}else{
	echo"une plaque d'immatriculation doit avoir 8 characters";
}
}



 //un constructeur
 public function __construct($m = NULL, $c = NULL, $i = NULL) {
    if(!is_null($m) && !is_null($c) && !is_null($i)) {
       $this->marque = $m;
       $this->couleur = $c;
       $this->immatriculation = $i;
    }
 
 }


/*
 // une methode d'affichage.
 public function afficher() {
 echo'
  Info:
  <ul>
      <li> Marque: '.$this->getMarque().'</li>
      <li> Couleur: '.$this->getCouleur().'</li>
      <li> Immatriculation: '.$this->getImmatriculation().'</li>
  </ul>

 ';


 }*/



  public static function getAllVoitures(){
    require_once "Model.php";
    $bdd = Model::Init();
    $rep = $bdd-> query("SELECT * FROM voiture");
    $rep ->setFetchMode(PDO::FETCH_CLASS,'ModelVoiture');
    $tab_voit = $rep->fetchAll();

      
      return $tab_voit;
  }

  public static function getVoitureByImmat($immat){
    $sql = "SELECT * FROM voiture WHERE immatriculation=:nom_tag";

    $req_prep = Model::$pdo->prepare($sql);
    $values = array("nom_tag" => $immat);

    $req_prep->execute($values);
    $req_prep->setFetchMode(PDO::FETCH_CLASS,'ModelVoiture');
    $tab_voit = $req_prep->fetchAll ();

    if (empty($tab_voit))
      return false;
    return$tab_voit[0];
      }

public function save(){
    Model::getPDO() -> query("INSERT INTO voiture VALUES ('{$this->immatriculation}',  '{$this->marque}', '{$this->couleur}')");

}


/*
public static function save($v){
  $sql = "INSERT INTO voiture (immatriculation, marque, couleur) VALUES (:mimmatriculation, :marque, :couleur)";
  $req_prep = Model::$pdo->prepare($sql);
  $values = array(
    "immatriculation" => $v->getImmatriculation(),
    "marque" => $v->getMarque(),
    "couleur" => $v->getCouleur(),
  );
  $req_prep->execute($values);*/
}

?>
