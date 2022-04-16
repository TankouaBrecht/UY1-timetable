<?php
class ControllerClass{
    private $_DataManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->Class();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU DataManager.php
    private function Class(){
        $this->_DataManager = new DataManager;
        require_once('views/viewClass.php');
    }

}
?>