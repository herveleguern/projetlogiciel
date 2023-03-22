<?php
class Lot{
    private $idLot;
    private $etat;     //en attente, en cours, terminé
    private $leProjet;
    private $lesTaches=array();
    
    function __construct($idLot, $etat, $leProjet) {
        $this->idLot = $idLot;
        $this->etat = $etat;
        $this->leProjet = $leProjet;
        $leProjet->ajouterLot($this);
    }

    function ajouterTache($uneTache){
        //A CODER
    }
    
    function nbTaches(){
        return count($this->lesTaches);
    }
    
}