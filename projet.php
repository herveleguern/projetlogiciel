<?php
class Projet {
    private $idProjet;
    private $intituleProjet;
    private $etat;     //en attente, en cours, terminé
    private $lesTachesARealiser = array();
    private $lesLots = array();

    function __construct($idProjet, $intituleProjet, $etat) {
        $this->idProjet = $idProjet;
        $this->intituleProjet = $intituleProjet;
        $this->etat = $etat;
    }

    function ajouterTaches(Array $lesTaches) {
        $this->lesTachesARealiser = $lesTaches;
    }

    function ajouterLot(Lot $leLot) {
        $this->lesLots[] = $leLot;
    }
/**
 * retourne le nombre de lots du projet
 * @return entier
 */
    function nbLots() {
        //A CODER
    }
/**
 * retourne le nombre de taches du projet
 * @return entier
 */
    function nbTaches() {
        //A CODER
    }

/**
 * retourne le nombre de taches affectées à des lots
 * @return entier
 */    
    function nbTachesLoties() {
        //A CODER
    }
/**
 * retourne la duree prévue totale en heures du projet
 * @return entier
 */    
    function duree(){
        //A CODER
    }

   /**
 * retourne le nombre de taches par état
 * @return array (clé = l'état => valeur = le nombre de taches à cet état)
 */    
function nbTachesParEtat(){
    //A CODER
}
}

?>