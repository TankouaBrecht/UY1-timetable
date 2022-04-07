<?php
class ControllerEdit{
    private $_videoManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->EditStudent();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU VideoManager.php
    private function EditStudent(){
        $this->_videoManager = new VideoManager;
        $lists = $this->_videoManager->getLists();
        require_once('views/viewEdit.php');
    }

}
?>