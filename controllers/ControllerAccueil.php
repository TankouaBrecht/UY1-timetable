<?php
class ControllerAccueil{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->Acceuil();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function Acceuil(){

        require_once('views/viewAcceuil.php');
    }

}
?>