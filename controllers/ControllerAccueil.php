<?php
class ControllerAccueil{
    private $_videoManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->ListStudent();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU VideoManager.php
    private function ListStudent(){
        $this->_videoManager = new VideoManager;
        $lists = $this->_videoManager->getLists();
        require_once('views/viewHome.php');
    }

}
?>