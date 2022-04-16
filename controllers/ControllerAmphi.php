<?php
class ControllerAmphi{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->Amphi();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function Amphi(){
        $this->_DataManager = new DataManager;
        require_once('views/viewAmphi.php');
    }

}
?>