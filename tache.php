<?php
class Tache{
    private $intituleTache;
    private $dureePrevue;
    private $etat;     //en attente de lot, en cours, en test, terminée
    private $dureeReelle=NULL;
    
    function __construct($intituleTache, $dureePrevue, $etat) {
        $this->intituleTache = $intituleTache;
        $this->dureePrevue = $dureePrevue;//en heures
        $this->etat = $etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }
    function getEtat() {
        return $this->etat;
    }

    function getDureePrevue() {
        return $this->dureePrevue;
    }



}
?>