<?php
require_once "projet.php";
require_once "lot.php";
require_once "tache.php";

$projet=new Projet('gsbbo', 'backoffice visiteurs gsb','ATTENTE');
//les taches sont créées avec l'état EN ATTENTE
$tache1=new Tache('squelette Zend + Bdd MySQL', 2, 'ATTENTE');
$tache2=new Tache('CRUD visiteur', 4, 'ATTENTE');
$tache3=new Tache('validation de formulaire', 2, 'ATTENTE');
$tache4=new Tache('pagination des listes', 2, 'ATTENTE');
$tache5=new Tache('layout CSS menu', 2, 'ATTENTE');
$tache6=new Tache('authentification', 4, 'ATTENTE');
$tache7=new Tache('ACL', 2, 'ATTENTE');
$tache8=new Tache('webservice données format XML', 4, 'ATTENTE');
$projet->ajouterTaches(array($tache1,$tache2,$tache3,$tache4,$tache5,$tache6,$tache7,$tache8));
//lorsque un lot est créé, il connait son projet.Le projet connait ses lots.
$lot1=new Lot('miseEnPlace','ATTENTE',$projet);
//lorsque une tache est lotie, elle passe à l'état ENCOURS
$lot1->ajouterTache($tache1);
$lot1->ajouterTache($tache2);
$lot2=new Lot('controleDeSaisie','ATTENTE',$projet);
$lot2->ajouterTache($tache3);
$lot3=new Lot('design general','ATTENTE',$projet);
$lot3->ajouterTache($tache4);
$lot3->ajouterTache($tache5);
$lot4=new Lot('confidentialite','ATTENTE',$projet);
$lot4->ajouterTache($tache6);
$lot4->ajouterTache($tache7);

//synthese pour ce jeu d'essai
var_dump($projet->nbLots());            
var_dump($projet->nbTaches());          
var_dump($projet->nbTachesLoties());  
var_dump($projet->duree()); 
var_dump($projet->nbTachesParEtat());

?>

