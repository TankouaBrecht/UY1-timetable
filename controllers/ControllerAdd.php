<?php
class ControllerAdd{
    private $_videoManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->profilAdd();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU VideoManager.php
    private function profilAdd(){
        
        require_once('views/viewAdd.php');
    }

}
?>